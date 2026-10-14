<?php
// Configuração e tabela de preços do I Simpósio Brasileiro de Neuromonitorização
// Veterinária, Anestesia e Neurologia. As chaves técnicas (EVENTO, PASTA_NO_SITE e
// as UTMs) seguem com "neurovet": são contrato com o webhook, com a URL publicada e
// com as campanhas que já estão no ar.
// Valores em centavos para não arrastar erro de arredondamento.

date_default_timezone_set('America/Sao_Paulo');

const EVENTO = 'neurovet-summit';

// Pasta em que a página fica publicada dentro do site da faculdade.
const PASTA_NO_SITE = 'neurovet-summit';

// Lote vigente na tabela de preços. Trocar para '2' no mesmo dia em que os valores
// forem atualizados no carrinho da faculdade: a página não pode anunciar um preço
// diferente do que o checkout cobra.
const LOTE_VIGENTE = '1';

const CHECKOUT_BASE = 'https://faculdade.ufape.com.br/cart/add';

const WHATSAPP_SECRETARIA = '5511974928443';

// Webhook próprio do NeuroVet. O 4ded9a37 é do simpósio de cardiologia e recebe as
// inscrições daquela landing page, então os dois eventos não podem dividir o mesmo.
const WEBHOOK_INSCRICAO = 'https://webhook.thegrowthhub.app.br/webhook/8ca1795b-917c-4da6-b059-61e1fbf4884b';

// O popup não pergunta o vínculo com a UFAPE: a inscrição sai sempre pelo valor
// cheio e o desconto de aluno e ex-aluno entra como cupom no carrinho.
const CATEGORIA_PADRAO = 'geral';
const CATEGORIA_COM_CUPOM = 'ufape';

// A condição de aluno e ex-aluno é o valor de demais participantes com desconto,
// igual em todas as modalidades e nos dois lotes.
const DESCONTO_EX_ALUNO = 0.20;

// Enquanto o cupom não existir no carrinho, a página anuncia o desconto e o popup
// não pede o código: a condição é acertada com a secretaria.
const PEDE_CUPOM = false;

// Conferidos no servidor, em cupom.php, para a lista não ir parar no HTML. Lista
// vazia aceita qualquer código não vazio.
$cupons = [];

$categorias = [
    'geral' => 'Demais participantes',
    'ufape' => 'Aluno/ex-aluno UFAPE',
];

// Modalidades da tabela de preços, na ordem em que aparecem na página. checkout_id é
// o id do curso no carrinho da faculdade (cart/add/<id>). Toda inscrição vai pelo
// valor cheio: o desconto de aluno e ex-aluno sai do cupom aplicado no carrinho, não
// de um produto mais barato. Enquanto o id estiver vazio, a inscrição da modalidade
// vai para a secretaria pelo WhatsApp.
$modalidades = [
    'simposio' => [
        'titulo'      => 'Simpósio',
        'nota'        => 'A programação científica completa dos dias 20 e 21 de novembro.',
        'checkout_id' => ['geral' => '68634'],
        'precos'      => [
            'geral' => ['1' => 40000, '2' => 50000],
        ],
    ],
];

function formatar_brl(int $centavos): string
{
    return 'R$ ' . number_format($centavos / 100, 2, ',', '.');
}

// Valor que a página anuncia e que o checkout cobra, sem o desconto de vínculo.
function valor_cheio(string $modalidade, string $lote): int
{
    global $modalidades;

    return $modalidades[$modalidade]['precos'][CATEGORIA_PADRAO][$lote];
}

function desconto_em_texto(): string
{
    return (int) round(DESCONTO_EX_ALUNO * 100) . '% de desconto usando o cupom';
}

function cupom_valido(string $codigo): bool
{
    global $cupons;

    if ($cupons === []) {
        return trim($codigo) !== '';
    }

    return in_array(strtoupper(trim($codigo)), array_map('strtoupper', $cupons), true);
}

// UTMs que marcam a inscrição como vinda desta landing page. A modalidade vai no
// utm_content para o relatório separar as modalidades, se voltarem a ser mais de uma.
function utm_checkout(string $modalidade, string $lote): string
{
    return http_build_query([
        'utm_source'   => 'lp-neurovet-summit',
        'utm_medium'   => 'popup-inscricao',
        'utm_campaign' => "neurovet-{$lote}o-lote",
        'utm_content'  => $modalidade,
    ]);
}

// As UTMs com que o visitante chegou vêm dentro da origem. O webhook recebe cada uma
// separada para não ter de quebrar a URL do outro lado.
function utms_da_origem(string $origem): array
{
    parse_str((string) parse_url($origem, PHP_URL_QUERY), $parametros);

    return array_filter(
        $parametros,
        fn (string $chave) => str_starts_with($chave, 'utm_'),
        ARRAY_FILTER_USE_KEY
    );
}

function checkout_id(string $modalidade, string $categoria): string
{
    global $modalidades;

    $ids = $modalidades[$modalidade]['checkout_id'];

    return $ids[$categoria] ?? $ids['geral'];
}

function url_checkout(string $modalidade, string $categoria, string $lote): string
{
    $id = checkout_id($modalidade, $categoria);

    return $id === '' ? '' : CHECKOUT_BASE . '/' . $id . '?' . utm_checkout($modalidade, $lote);
}
