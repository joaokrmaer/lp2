<?php
// Textos da página do workshop, conforme a copy aprovada do simpósio.
// Os trechos entre colchetes vieram do documento base e seguem pendentes de
// confirmação da coordenação; não invente nomes nem horários no lugar deles.

$selos = [
    'Evento presencial',
    'Somente 30 vagas',
    'Certificado UFAPE',
];

$numeros = [
    'Data'           => '22 de novembro de 2026, domingo',
    'Local'          => 'Faculdade Ufape, Unidade 2<br>Av. Tiradentes, 960, São Paulo/SP',
    'Carga horária'  => 'Um dia inteiro de prática em estações rotativas',
    'Vagas'          => 'Somente 30 vagas, por ordem de inscrição',
];

// Endereço da chamada final e do mapa; a busca do Google Maps usa este texto.
$endereco_evento = 'Av. Tiradentes, 960, São Paulo/SP';

$diferenciais = [
    'Workshop de um dia inteiro com estações rotativas, interpretação em tempo real e casos simulados.',
    'Turma dividida em pequenos grupos, conforme a quantidade de equipamentos e instrutores.',
    'Prática com colocação de sensores, EEG bruto, BIS, qCON, qNOX e sinais autonômicos.',
    'Discussão de limitações, artefatos e interpretação em diferentes espécies.',
    'Desafio final com caso clínico progressivo e discussão coletiva das condutas.',
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

// O workshop veio sem horário por estação: a coluna da esquerda leva o nome da
// estação, que é como a coordenação organizou o dia.
$workshop = [
    'data'      => '22 de novembro de 2026, domingo',
    'tema'      => 'Do sensor à decisão clínica',
    'descricao' => 'Dia inteiro de prática em estações rotativas, exclusivamente presencial. A turma será dividida em pequenos grupos conforme a quantidade de equipamentos e instrutores. Cada estação combina execução, interpretação e decisão clínica.',
    'linhas'    => [
        ['Estação 1', 'Colocação de sensores e qualidade de sinal', '', 'Posicionamento, impedância, preparo da pele e identificação de interferências.'],
        ['Estação 2', 'EEG na prática', '', 'Reconhecimento de padrões de anestesia superficial, profunda, burst suppression, EMG e despertar.'],
        ['Estação 3', 'BIS, qCON e índices processados', '', 'Correlação entre EEG bruto e números apresentados pelos monitores.'],
        ['Estação 4', 'Nocicepção em tempo real', '', 'Integração de frequência cardíaca, pressão arterial, qNOX e demais sinais autonômicos.'],
        ['Estação 5', 'Casos clínicos integrados', '', 'O que fazer diante de hipotensão, hipercapnia, burst suppression, nocicepção, hipotermia e recuperação inadequada?'],
        ['Encerramento', 'Desafio final: monitore o paciente, interprete os sinais e tome a decisão', '', 'Caso clínico progressivo envolvendo diferentes monitores e alterações fisiológicas, com discussão coletiva das condutas.'],
    ],
];

$inclusos = [
    'Certificado UFAPE conforme presença',
    'Participação nas cinco estações práticas e no desafio final',
    'Apostila e material digital, se previsto',
];

// A foto entra quando a coordenação enviar; sem ela o card mostra só nome e atuação.
// A chave é o trecho pelo qual a agenda reconhece o palestrante, que aparece lá com
// títulos diferentes a cada linha.
$palestrantes = [
    ['nome' => 'Profa. Dra. Mayara Travalini de Lima', 'tema' => 'Coordenação científica. Neuromonitorização, nocicepção, integração multimodal e casos', 'foto' => 'mayara.jpg', 'chave' => 'Mayara'],
    ['nome' => 'Prof. Dr. Alessandro Martins', 'tema' => 'Coordenação, tecnologia e integração, workshop avançado', 'foto' => 'alessandro.jpg', 'chave' => 'Alessandro'],
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
    ['O workshop será presencial ou online?', 'Exclusivamente presencial, no dia 22 de novembro, na Unidade 2 da Faculdade Ufape.'],
    ['Como funciona o dia?', 'A turma é dividida em pequenos grupos que passam por cinco estações rotativas. O dia termina com um desafio final de caso clínico progressivo e discussão coletiva das condutas.'],
    ['É necessário saber interpretar EEG previamente?', 'Não. A primeira estação começa pela colocação de sensores e pela qualidade de sinal, e cada estação combina execução, interpretação e decisão clínica.'],
    ['O workshop será apenas sobre BIS?', 'Não. As estações passam por EEG bruto, BIS, qCON, qNOX e sinais autonômicos como frequência cardíaca e pressão arterial.'],
    ['Quantas vagas existem?', 'Somente 30, preenchidas por ordem de inscrição.'],
    ['Haverá certificado?', 'Sim, conforme presença, emitido pela UFAPE.'],
];
