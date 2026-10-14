<?php
// Textos da página, conforme a copy aprovada do simpósio.
// Os trechos entre colchetes vieram do documento base e seguem pendentes de
// confirmação da coordenação; não invente nomes nem horários no lugar deles.

$selos = [
    'Evento presencial',
    'Certificado UFAPE',
];

$numeros = [
    'Data'           => '20 e 21 de novembro de 2026',
    'Local'          => 'Faculdade Ufape, Unidade 2<br>Av. Tiradentes, 960, São Paulo/SP',
    'Carga horária'  => 'Dois dias de programação científica',
];

// Endereço da chamada final e do mapa; a busca do Google Maps usa este texto.
$endereco_evento = 'Av. Tiradentes, 960, São Paulo/SP';

$diferenciais = [
    'Primeiro evento UFAPE estruturado especificamente em torno de neuromonitorização e tomada de decisão anestésica.',
    'Integração de EEG bruto, BIS, qCON, qNOX, PTA, NIRS, entropia, pupilometria e índices derivados de inteligência artificial.',
    'Discussão de limitações, artefatos e interpretação em diferentes espécies.',
    'Trilha específica para interface Anestesiologia e UTI, incluindo sedação, neuroproteção e paciente crítico.',
    'Abordagem centrada em decisões clínicas, não apenas em equipamentos.',
];

// Cada linha: horário, atividade, professor sugerido, conteúdo e foco.
// Currículo por palestrante, exibido no modal do card. Quem ainda não mandou o
// texto fica de fora e o card não abre.
$curriculos = [
    'Profa. Dra. Mayara Travalini de Lima' => [
        '2014, bacharel em Medicina Veterinária na UNESP de Botucatu',
        '2017, residência em Anestesiologia Veterinária na UNESP de Botucatu',
        '2019, pós-graduação em Anestesia Regional Veterinária no IEP Ranvier',
        '2020, mestrado em Anestesiologia na Faculdade de Medicina da UNESP de Botucatu',
        '2023 até hoje, chefe do setor de Anestesiologia da UFAPE',
        '2023 até hoje, preceptora da residência em Anestesiologia da UFAPE',
        '2023 até hoje, auxiliar de coordenação da pós-graduação em Anestesiologia da UFAPE',
        '2024, doutorado em Anestesiologia na Faculdade de Medicina da UNESP de Botucatu',
    ],
    'Prof. Dr. Alessandro Martins' => [
        'Residência em Anestesiologia Veterinária na UNESP de Jaboticabal',
        'Especialização em Anestesiologia pela FMVZ-USP',
        'Doutorado em Anestesiologia pela FM-USP',
        'Presidente da APAV',
        'CEO da Faculdade UFAPE',
    ],
    'Prof. Renan Holczer' => [
        'Médico Veterinário',
        'Pós-graduação em Terapia Intensiva e Emergência Veterinária na UFAPE',
        'Residência em Terapia Intensiva e Emergência na UFAPE',
        'Preceptor da UTI na UFAPE',
    ],
    'Prof. MSc. Yuri Ferreira Vicentini' => [
        'Médico Veterinário pela Universidade do Oeste Paulista, Unoeste',
        'Residência em Clínica e Cirurgia de Equinos na FMVZ-USP',
        'Pós-graduado em Anestesiologia, Dor e Intensivismo na FMVZ-USP',
        'Mestre pelo VCI da FMVZ-USP',
        'Professor na UniFAJ e na UniMAX',
    ],
    'Prof. Dr. Rodrigo Neca Ribeiro' => [
        'Médico Veterinário pela PUCPR',
        'Pós-graduado em Clínica Médica e Cirúrgica de Pequenos Animais no Instituto Qualittas',
        'Mestre em Medicina Veterinária pela Universidade Estadual de Maringá, UEM',
        'Doutor em Ciências Veterinárias pela Universidade Federal do Paraná, UFPR',
        'Professor de Anestesiologia Veterinária no Centro Universitário FAG',
        'Responsável técnico do Centro Avançado de Apoio Veterinário, CAAV',
    ],
];

// iniciais no lugar do retrato de quem ainda não mandou foto
function iniciais(string $nome): string
{
    $partes = array_values(array_filter(
        explode(' ', $nome),
        fn($p) => !in_array($p, ['Dr.', 'Dra.', 'M.V.', 'MV.', 'MSc.', 'Prof.', 'Profa.', 'TEAV', 'TEAV.', 'da', 'de', 'do'], true)
    ));

    return substr($partes[0], 0, 1) . substr(end($partes), 0, 1);
}

$programacao = [
    [
        'data'   => '20 de novembro de 2026, sexta-feira',
        'tema'   => 'Do cérebro ao sinal',
        'linhas' => [
            ['08h30 às 09h30', 'Por que ainda anestesiamos no escuro? Consciência intraoperatória e profundidade anestésica', 'Prof. MSc. Yuri Vicentini e Prof. MSc. Daniel Zannin', ''],
            ['09h30 às 10h30', 'Neurofisiologia aplicada à anestesia: o papel dos neurônios piramidais e do tálamo', 'Prof. MSc. Daniel Zannin', ''],
            ['10h30 às 11h00', 'Intervalo', '', ''],
            ['11h00 às 12h00', 'EEG para anestesistas: como o EEG é aferido e quais são os padrões de onda', 'Prof. MSc. Daniel Zannin', ''],
            ['12h00 às 13h00', 'Almoço', '', ''],
            ['13h00 às 13h45', 'Análise espectral, CSA e DSA', 'Prof. MSc. Daniel Zannin', ''],
            ['13h45 às 14h30', 'Artefato ou cérebro? O que realmente estamos medindo?', 'Prof. MSc. Yuri Vicentini', ''],
            ['14h30 às 15h00', 'Intervalo', '', ''],
            ['15h00 às 16h00', 'BIS: história, algoritmo, interpretação e limitações', 'Prof. MSc. Daniel Zannin', ''],
            ['16h00 às 17h00', 'BIS nas diferentes espécies: o que sabemos e quais são as limitações', 'Prof. Dr. Rodrigo Neca', ''],
            ['17h00 às 18h00', 'Mesa redonda: profundidade anestésica além do número', 'Prof. MSc. Daniel Zannin, Prof. MSc. Yuri Vicentini, Prof. Dr. Rodrigo Neca e Profa. Dra. Mayara Travalini (mediadora)', 'Discussão de casos e integração entre EEG bruto, índices processados e sinais clínicos.'],
        ],
    ],
    [
        'data'   => '21 de novembro de 2026, sábado',
        'tema'   => 'Do sinal à decisão',
        'linhas' => [
            ['08h30 às 09h15', 'qCON: monitorização da hipnose e estados de consciência', 'Prof. MSc. Yuri Vicentini', ''],
            ['09h15 às 10h00', 'qNOX: resposta nociceptiva e aplicação clínica', 'Prof. MSc. Yuri Vicentini', ''],
            ['10h00 às 10h30', 'Intervalo', '', ''],
            ['10h30 às 11h15', 'Entropia e outros índices derivados do EEG', 'Prof. MSc. Daniel Zannin', ''],
            ['11h15 às 12h00', 'PTA: variabilidade da frequência cardíaca e analgesia guiada', 'Palestrante a confirmar', ''],
            ['12h00 às 13h00', 'Almoço', '', ''],
            ['13h00 às 13h45', 'Inteligência artificial e o futuro da neuromonitorização', 'Palestrante a confirmar', ''],
            ['13h45 às 14h45', 'Mesa redonda: neuromonitorização no paciente crítico', 'Prof. Dr. Rodrigo Neca, Profa. Dra. Mayara Travalini, Prof. MSc. Daniel Zannin e Prof. MSc. Yuri Vicentini', 'Sedação, TCE, estado epiléptico, pós PCR e alterações sistêmicas que interferem no cérebro.'],
            ['14h45 às 15h15', 'Intervalo', '', ''],
            ['15h15 às 16h15', 'O paciente não é apenas um índice', 'Prof. MSc. Daniel Zannin e Profa. Dra. Mayara Travalini', 'Integração entre EEG, profundidade anestésica, nocicepção, hemodinâmica, ventilação e perfusão.'],
            ['16h15 às 17h30', 'Mesa de casos: quando o monitor muda a sua conduta?', 'Prof. MSc. Daniel Zannin, Profa. Dra. Mayara Travalini, Prof. MSc. Yuri Vicentini e Prof. Dr. Rodrigo Neca', 'Integração entre hipnose, nocicepção, pressão arterial, ventilação, temperatura e resposta clínica.'],
            ['17h30 às 18h00', 'Encerramento e discussão geral', '', ''],
        ],
    ],
];

$inclusos = [
    'Certificado UFAPE conforme modalidade e presença',
    'Apostila e material digital, se previsto',
    'Acesso às gravações das palestras teóricas, caso a modalidade seja confirmada',
];

// A foto entra quando a coordenação enviar; sem ela o card mostra só nome e atuação.
// A chave é o trecho pelo qual a agenda reconhece o palestrante, que aparece lá com
// títulos diferentes a cada linha.
$palestrantes = [
    ['nome' => 'Profa. Dra. Mayara Travalini de Lima', 'tema' => 'Coordenação científica. Neuromonitorização, nocicepção, integração multimodal e casos', 'foto' => 'mayara.jpg', 'chave' => 'Mayara'],
    ['nome' => 'Prof. Dr. Alessandro Martins', 'tema' => 'Coordenação, tecnologia e integração', 'foto' => 'alessandro.jpg', 'chave' => 'Alessandro'],
    ['nome' => 'Prof. Daniel Zannin', 'tema' => 'Apoio à trilha de ventilação e UTI, conforme expertise e confirmação', 'foto' => 'zannin.jpg', 'chave' => 'Daniel'],
    ['nome' => 'Prof. Renan Holczer', 'tema' => 'Ventilação mecânica e UTI neuromonitorizada', 'foto' => 'renan.jpg', 'chave' => 'Renan'],
    ['nome' => 'Prof. MSc. Yuri Ferreira Vicentini', 'tema' => 'Artefatos de EEG, qCON e qNOX na decisão anestésica', 'foto' => 'yuri.jpg', 'chave' => 'Yuri'],
    ['nome' => 'Prof. Dr. Rodrigo Neca Ribeiro', 'tema' => 'Neurofisiologia aplicada à anestesia e neuromonitorização multimodal', 'foto' => 'rodrigo.jpg', 'chave' => 'Rodrigo'],
    ['nome' => 'Convidado em neurofisiologia e EEG clínico', 'tema' => 'A definir', 'foto' => '', 'chave' => ''],
    ['nome' => 'Convidado em neuroanestesia e NIRS', 'tema' => 'A definir', 'foto' => '', 'chave' => ''],
    ['nome' => 'Convidado em nocicepção e variabilidade da frequência cardíaca', 'tema' => 'A definir', 'foto' => '', 'chave' => ''],
    ['nome' => 'Convidado em inteligência artificial e processamento de sinais', 'tema' => 'A definir', 'foto' => '', 'chave' => ''],
];

$fotos_palestrantes = array_filter(array_column($palestrantes, 'foto', 'chave'));

// Uma linha da agenda pode citar mais de um palestrante.
function retratos_da_linha(string $quem): array
{
    global $fotos_palestrantes;

    $retratos = [];
    foreach ($fotos_palestrantes as $chave => $foto) {
        $onde = strpos($quem, $chave);
        if ($onde !== false) {
            $retratos[$onde] = $foto;
        }
    }
    ksort($retratos);

    return array_values($retratos);
}

$faq = [
    ['O evento será presencial ou online?', 'A proposta principal é presencial. A gravação e transmissão das palestras teóricas ainda será confirmada.'],
    ['É necessário saber interpretar EEG previamente?', 'Não. A sexta-feira foi desenhada justamente para construir a base clínica de neurofisiologia, EEG e índices processados.'],
    ['O evento será apenas sobre BIS?', 'Não. O simpósio integra BIS, qCON, qNOX, PTA, NIRS, entropia, pupilometria, EEG bruto, CSA e DSA e outros dados fisiológicos.'],
    ['Haverá certificado?', 'Sim, conforme presença e modalidade de inscrição definida pela UFAPE.'],
];
