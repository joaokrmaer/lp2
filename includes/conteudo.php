<?php
// Textos da página do workshop, conforme a copy aprovada do simpósio.
// Os trechos entre colchetes vieram do documento base e seguem pendentes de
// confirmação da coordenação; não invente nomes nem horários no lugar deles.

$selos = [
    'Presencial e online',
    'Sexta de teoria aplicada e sábado prático',
    '30 vagas presenciais',
    'Gravação da teoria por 12 meses',
    'Certificado UFAPE',
];

$numeros = [
    'Data'           => '20 e 21 de novembro de 2026, sexta-feira e sábado',
    'Local'          => 'Faculdade Ufape, Unidade 2<br>Av. Tiradentes, 960, São Paulo/SP',
    'Carga horária'  => '16 horas presenciais, sendo 8 de teoria e 8 de prática',
    'Vagas'          => '30 vagas presenciais, por ordem de inscrição',
];

// Endereço da chamada final e do mapa; a busca do Google Maps usa este texto.
$endereco_evento = 'Av. Tiradentes, 960, São Paulo/SP';

$diferenciais = [
    'Sexta-feira de teoria aplicada e sábado de prática presencial, com 16 horas de atividades das 08h30 às 18h.',
    'Teoria também online, ao vivo, com acesso à gravação por 12 meses.',
    'Integração de neuroanatomia, EEG, análises espectrais e índices processados, com destaque para o BIS.',
    'Avaliação do paciente sob bloqueadores neuromusculares e monitorização do bloqueio por TOF.',
    'Treinamento progressivo: instalar, avaliar o sinal, interpretar e discutir os casos.',
    'Casos de anestesia e de UTI com e sem bloqueio neuromuscular e desafio prático em pequenos grupos.',
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
        '2023 até 2026, preceptora-chefe do setor de Anestesiologia da UFAPE',
        '2023 até hoje, coordenadora do aprimoramento em Anestesiologia da Faculdade UFAPE',
        '2023 até hoje, coordenadora da pós-graduação em Anestesiologia da UFAPE',
        '2023 até hoje, coordenadora do serviço de tratamento da dor no Hospital Veterinário UFAPE',
        '2024, doutorado em Anestesiologia na Faculdade de Medicina da UNESP de Botucatu',
        '2026 até hoje, pós-doutorado em andamento em Anestesiologia na FMVZ-USP, São Paulo',
        '2026 até hoje, Curso Internacional de Medicina Canábica no Instituto Bioethicus, Botucatu/SP',
    ],
    'Prof. MSc. Daniel Zannin' => [
        'Médico Veterinário Anestesiologista, TEAV',
        'Formado em Medicina Veterinária pela Universidade Federal do Paraná, Curitiba/PR',
        'Residência em Anestesiologia Veterinária pela PUCPR, Curitiba/PR',
        'Mestre em Anestesiologia Veterinária pela Universidade Federal do Paraná, Curitiba/PR',
        'Pós-graduado em bloqueios locorregionais pelo Instituto de Ensino e Pesquisa Ranvier, São Paulo/SP',
        'Título de Especialista em Anestesiologia Veterinária pelo CBAV',
        'Preceptor de Anestesiologia Veterinária no Hospital Veterinário UFAPE, São Paulo/SP',
        'Proprietário da Comunivet, a Comunidade dos Anestesiologistas Veterinários',
    ],
    'Profa. MSc. Elídia Zotelli' => [
        'Médica-veterinária com atuação em neurologia e comportamento',
        'Mestre e doutoranda pela Universidade Santo Amaro',
        'Especializações em Neurologia Veterinária e Neurociências pelo Hospital das Clínicas da USP',
        'Professora de pós-graduação, palestrante convidada e autora de capítulos de livros na área',
        'Secretária-geral da ABNV e integrante da diretoria da ABEV',
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

// Programação conforme o planejamento da coordenação (sexta teórica, sábado
// prático). Cada linha: horário, atividade, docente proposto e conteúdo. A
// distribuição entre docentes ainda é proposta para alinhamento.
$programacao = [
    [
        'data'   => '20 de novembro de 2026, sexta-feira',
        'tema'   => 'Teoria aplicada',
        'linhas' => [
            ['08h30 às 08h45', 'Abertura', 'Profa. Dra. Mayara Travalini', 'Objetivos, sequência do curso e preparação para o sábado prático.'],
            ['08h45 às 09h45', 'Dos planos de Guedel ao awareness intraoperatório', 'Prof. MSc. Daniel Zannin', 'Limitações dos planos de Guedel e dos sinais clínicos; consciência intraoperatória e avaliação do paciente na presença de bloqueadores neuromusculares.'],
            ['09h45 às 10h45', 'Redes neurais e neuroanatomia aplicada à anestesia', 'Prof. Dr. Rodrigo Neca (online ao vivo)', 'Estruturas e circuitos envolvidos em consciência, sono e anestesia. Ênfase em neuroanatomia, conectando a base anatômica às aulas de EEG.'],
            ['10h45 às 11h00', 'Intervalo', '', ''],
            ['11h00 às 12h30', 'Como funciona o EEG: do sinal às análises espectrais', 'Prof. MSc. Daniel Zannin', 'Aquisição do EEG, montagem, frequências, amplitude, qualidade do sinal e artefatos. Introdução à leitura de DSA e CSA.'],
            ['12h30 às 13h30', 'Almoço', '', ''],
            ['13h30 às 14h30', 'EEG clínico na neurologia veterinária', 'Profa. MSc. Elídia Zotelli', 'Leitura orientada de registros, padrões de interesse e discussão da relação entre o traçado e o contexto clínico.'],
            ['14h30 às 15h30', 'Índice bispectral (BIS), PSI e Conox: índices processados e revisão da literatura', 'Prof. MSc. Daniel Zannin', 'Fundamentos e leitura do BIS, EEG, qualidade do sinal e EMG; evidências veterinárias e limitações dos índices BIS, PSI e qNOX.'],
            ['15h30 às 15h45', 'Intervalo', '', ''],
            ['15h45 às 16h30', 'Adaptação de eletrodos de agulha: o que está validado?', 'Prof. MSc. Daniel Zannin e Profa. MSc. Elídia Zotelli', 'Revisão crítica dos métodos publicados, sensores, montagens e populações estudadas; discussão dos limites de aplicação de cada resultado.'],
            ['16h30 às 17h15', 'Neuromonitorização na UTI e bloqueadores neuromusculares (BNM)', 'Prof. Renan Holczer', 'Avaliação de hipnose e sedação sob BNM; interpretação de EEG e BIS, relação com o EMG e monitorização neuromuscular por TOF.'],
            ['17h15 às 18h00', 'Qual monitor temos disponível na prática?', 'Prof. MSc. Daniel Zannin', 'Apresentação do BIS, dos demais neuromonitores e do monitor neuromuscular para TOF previstos para o sábado.'],
        ],
    ],
    [
        'data'   => '21 de novembro de 2026, sábado',
        'tema'   => 'Prática presencial',
        'linhas' => [
            ['08h30 às 09h00', 'Demonstração inicial e organização dos grupos práticos', 'Prof. MSc. Daniel Zannin, Prof. MSc. Yuri Vicentini e Profa. Dra. Mayara Travalini', 'Reconhecimento dos equipamentos disponíveis, funções dos participantes e roteiro de execução.'],
            ['09h00 às 10h30', 'Instalação do BIS e de outros neuromonitores', 'Prof. MSc. Daniel Zannin', 'Preparação, posicionamento e conexão dos sensores em modelos; checagem da qualidade do sinal do BIS e identificação de falhas de instalação.'],
            ['10h30 às 10h45', 'Intervalo', '', ''],
            ['10h45 às 12h30', 'Leitura prática de EEG e reconhecimento de artefatos', 'Prof. MSc. Daniel Zannin e Profa. MSc. Elídia Zotelli', 'Exercícios com traçados, qualidade do registro e interpretação orientada de padrões clínicos.'],
            ['12h30 às 13h30', 'Almoço', '', ''],
            ['13h30 às 15h00', 'BIS, DSA, CSA e índices processados na prática', 'Prof. MSc. Daniel Zannin', 'Leitura de BIS, EEG, EMG e qualidade do sinal; interpretação de DSA e CSA e comparação com PSI e Conox, conforme equipamentos e registros disponíveis.'],
            ['15h00 às 15h15', 'Intervalo', '', ''],
            ['15h15 às 16h15', 'Casos de anestesia com e sem BNM', 'Prof. MSc. Daniel Zannin e Prof. MSc. Yuri Vicentini', 'Discussão de EEG, BIS, sinais clínicos e monitorização multiparamétrica em casos com e sem BNM; análise de dados discordantes e das decisões propostas.'],
            ['16h15 às 17h15', 'Casos de UTI com BNM, EEG e BIS', 'Prof. Renan Holczer', 'Avaliação da hipnose em pacientes sob BNM; integração de EEG e BIS e treinamento da leitura do TOF em simulações ou registros clínicos.'],
            ['17h15 às 17h45', 'Desafio prático em pequenos grupos', 'Prof. MSc. Daniel Zannin', 'Caso com BIS e TOF em paciente sob BNM: cada grupo avalia o sinal, interpreta os registros, identifica limitações e justifica suas decisões.'],
            ['17h45 às 18h00', 'Devolutiva e encerramento', 'Prof. MSc. Daniel Zannin, Profa. Dra. Mayara Travalini e Prof. MSc. Yuri Vicentini', 'Revisão dos pontos principais e entrega do roteiro de aplicação na rotina.'],
        ],
    ],
];

$inclusos = [
    'Workshop presencial: certificado UFAPE conforme presença',
    'Somente a teoria: certificado das 8 horas teóricas como ouvinte',
    'Gravação da teoria por 12 meses nas duas modalidades, liberada 7 dias úteis após o evento',
];

// A foto entra quando a coordenação enviar; sem ela o card mostra só nome e atuação.
// A chave é o trecho pelo qual a agenda reconhece o palestrante, que aparece lá com
// títulos diferentes a cada linha.
$palestrantes = [
    ['nome' => 'Profa. Dra. Mayara Travalini de Lima', 'tema' => 'Coordenação científica; abertura e atividades práticas integradas', 'foto' => 'mayara.jpg', 'chave' => 'Mayara'],
    ['nome' => 'Prof. MSc. Daniel Zannin', 'tema' => 'Condução principal da teoria, demonstrações e treinamento prático', 'foto' => 'zannin.jpg', 'chave' => 'Daniel'],
    ['nome' => 'Profa. MSc. Elídia Zotelli', 'tema' => 'EEG clínico, registros e exercícios de interpretação', 'foto' => 'elidia.jpg', 'chave' => 'Elídia'],
    ['nome' => 'Prof. Renan Holczer', 'tema' => 'Neuromonitorização em UTI e casos com bloqueio neuromuscular', 'foto' => 'renan.jpg', 'chave' => 'Renan'],
    ['nome' => 'Prof. MSc. Yuri Ferreira Vicentini', 'tema' => 'Atividades práticas e casos anestésicos; artefatos de EEG, qCON e qNOX', 'foto' => 'yuri.jpg', 'chave' => 'Yuri'],
    ['nome' => 'Prof. Dr. Rodrigo Neca Ribeiro', 'tema' => 'Redes neurais e neuroanatomia; participação online ao vivo', 'foto' => 'rodrigo.jpg', 'chave' => 'Rodrigo'],
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
    ['Posso comprar somente a teoria?', 'Sim. A teoria aplicada de sexta-feira, 20 de novembro, pode ser adquirida separadamente, com transmissão ao vivo e gravação disponível por 12 meses. Quem compra somente a teoria também pode assisti-la presencialmente.'],
    ['A prática será online?', 'Não. O treinamento de sábado, 21 de novembro, faz parte da modalidade presencial e será realizado na Unidade 2 da Faculdade UFAPE, em São Paulo.'],
    ['O professor Neca estará presencialmente?', 'O Prof. Rodrigo Neca Ribeiro participará online, ao vivo, da aula de redes neurais e neuroanatomia aplicada à anestesia.'],
    ['Preciso saber interpretar EEG?', 'Não é necessário conhecimento prévio de interpretação de EEG. A teoria aplicada apresenta a base para os exercícios do workshop.'],
    ['Por quanto tempo terei acesso à gravação?', 'Por 12 meses. A gravação da teoria é liberada sete dias úteis após o evento, tanto para quem comprou somente a teoria quanto para quem participa do workshop presencial completo.'],
    ['Haverá certificado?', 'Sim. No workshop presencial, o certificado é emitido conforme presença. Quem adquirir somente a teoria recebe certificado das 8 horas teóricas como ouvinte.'],
    ['Alunos UFAPE têm desconto?', 'Sim. Alunos e ex-alunos UFAPE têm 20% de desconto nas duas modalidades, mediante comprovação do vínculo.'],
    ['Quantas vagas existem?', 'São 30 vagas presenciais, preenchidas por ordem de inscrição.'],
];
