<?php
// Textos da página do workshop, conforme a copy aprovada do simpósio.
// Os trechos entre colchetes vieram do documento base e seguem pendentes de
// confirmação da coordenação; não invente nomes nem horários no lugar deles.

$selos = [
    'Evento presencial',
    'Sexta-feira teórica e sábado prático',
    'Somente 30 vagas',
    'Certificado UFAPE',
];

$numeros = [
    'Data'           => '20 e 21 de novembro de 2026, sexta-feira e sábado',
    'Local'          => 'Faculdade Ufape, Unidade 2<br>Av. Tiradentes, 960, São Paulo/SP',
    'Carga horária'  => '16 horas, sendo 8 teóricas e 8 práticas',
    'Vagas'          => 'Somente 30 vagas, por ordem de inscrição',
];

// Endereço da chamada final e do mapa; a busca do Google Maps usa este texto.
$endereco_evento = 'Av. Tiradentes, 960, São Paulo/SP';

$diferenciais = [
    'Sexta-feira teórica e sábado prático, com 16 horas de atividades das 08h às 18h.',
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
    'Profa. MSc. Elidia Zotelli' => [
        'Médica-veterinária com atuação em neurologia e comportamento',
        'Mestre e doutoranda pela Universidade Santo Amaro',
        'Especializações em Neurologia Veterinária e Neurociências pelo Hospital das Clínicas da USP',
        'Professora de pós-graduação, palestrante convidada e autora de capítulos de livros na área',
        'Secretária-geral da ABNV e integrante da diretoria da ABEV',
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

// Programação conforme o planejamento da coordenação (sexta teórica, sábado
// prático). Cada linha: horário, atividade, docente proposto e conteúdo. A
// distribuição entre docentes ainda é proposta para alinhamento.
$programacao = [
    [
        'data'   => '20 de novembro de 2026, sexta-feira',
        'tema'   => 'Teoria',
        'linhas' => [
            ['08h30 às 08h45', 'Abertura', 'Profa. Dra. Mayara Travalini', 'Objetivos, sequência do curso e preparação para o sábado prático.'],
            ['08h45 às 09h45', 'Dos planos de Guedel ao awareness intraoperatório', 'Prof. MSc. Daniel Zannin', 'Limitações dos planos de Guedel e dos sinais clínicos; consciência intraoperatória e avaliação do paciente na presença de bloqueadores neuromusculares.'],
            ['09h45 às 10h45', 'Redes neurais e neuroanatomia aplicada à anestesia', 'Prof. Dr. Rodrigo Neca (online ao vivo)', 'Estruturas e circuitos envolvidos em consciência, sono e anestesia. Ênfase em neuroanatomia, conectando a base anatômica às aulas de EEG.'],
            ['10h45 às 11h00', 'Intervalo', '', ''],
            ['11h00 às 12h30', 'Como funciona o EEG: do sinal às análises espectrais', 'Prof. MSc. Daniel Zannin', 'Aquisição do EEG, montagem, frequências, amplitude, qualidade do sinal e artefatos. Introdução à leitura de DSA e CSA.'],
            ['12h30 às 13h30', 'Almoço', '', ''],
            ['13h30 às 14h30', 'EEG clínico na neurologia veterinária', 'Profa. MSc. Elidia Zotelli', 'Leitura orientada de registros, padrões de interesse e discussão da relação entre o traçado e o contexto clínico.'],
            ['14h30 às 15h30', 'Índice bispectral (BIS), PSI e Conox: índices processados e revisão da literatura', 'Prof. MSc. Daniel Zannin', 'Fundamentos e leitura do BIS, EEG, qualidade do sinal e EMG; evidências veterinárias e limitações dos índices BIS, PSI e qNOX.'],
            ['15h30 às 15h45', 'Intervalo', '', ''],
            ['15h45 às 16h30', 'Adaptação de eletrodos de agulha: o que está validado?', 'Prof. MSc. Daniel Zannin e Profa. MSc. Elidia Zotelli', 'Revisão crítica dos métodos publicados, sensores, montagens e populações estudadas; discussão dos limites de aplicação de cada resultado.'],
            ['16h30 às 17h15', 'Neuromonitorização na UTI e bloqueadores neuromusculares (BNM)', 'Prof. Renan Holczer', 'Avaliação de hipnose e sedação sob BNM; interpretação de EEG e BIS, relação com o EMG e monitorização neuromuscular por TOF.'],
            ['17h15 às 18h00', 'Qual monitor temos disponível na prática?', 'Prof. MSc. Daniel Zannin', 'Apresentação do BIS, dos demais neuromonitores e do monitor neuromuscular para TOF previstos para o sábado.'],
        ],
    ],
    [
        'data'   => '21 de novembro de 2026, sábado',
        'tema'   => 'Prática',
        'linhas' => [
            ['08h30 às 09h00', 'Demonstração inicial e organização dos grupos práticos', 'Prof. MSc. Daniel Zannin, Prof. MSc. Yuri Vicentini e Profa. Dra. Mayara Travalini', 'Reconhecimento dos equipamentos disponíveis, funções dos participantes e roteiro de execução.'],
            ['09h00 às 10h30', 'Instalação do BIS e de outros neuromonitores', 'Prof. MSc. Daniel Zannin', 'Preparação, posicionamento e conexão dos sensores em modelos; checagem da qualidade do sinal do BIS e identificação de falhas de instalação.'],
            ['10h30 às 10h45', 'Intervalo', '', ''],
            ['10h45 às 12h30', 'Leitura prática de EEG e reconhecimento de artefatos', 'Prof. MSc. Daniel Zannin e Profa. MSc. Elidia Zotelli', 'Exercícios com traçados, qualidade do registro e interpretação orientada de padrões clínicos.'],
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
    'Certificado UFAPE conforme presença',
    'Aulas teóricas da sexta-feira e treinamento prático do sábado',
    'Apostila e material digital, se previsto',
];

// A foto entra quando a coordenação enviar; sem ela o card mostra só nome e atuação.
// A chave é o trecho pelo qual a agenda reconhece o palestrante, que aparece lá com
// títulos diferentes a cada linha.
$palestrantes = [
    ['nome' => 'Profa. Dra. Mayara Travalini de Lima', 'tema' => 'Coordenação científica. Neuromonitorização, nocicepção, integração multimodal e casos', 'foto' => 'mayara.jpg', 'chave' => 'Mayara'],
    ['nome' => 'Prof. Dr. Alessandro Martins', 'tema' => 'Coordenação, tecnologia e integração, workshop avançado', 'foto' => 'alessandro.jpg', 'chave' => 'Alessandro'],
    ['nome' => 'Prof. MSc. Daniel Zannin', 'tema' => 'Condução principal das aulas teóricas, demonstrações e treinamento prático', 'foto' => 'zannin.jpg', 'chave' => 'Daniel'],
    ['nome' => 'Profa. MSc. Elidia Zotelli', 'tema' => 'EEG clínico, aplicação em UTI e apoio aos exercícios de interpretação', 'foto' => 'elidia.jpg', 'chave' => 'Elidia'],
    ['nome' => 'Prof. Renan Holczer', 'tema' => 'Ventilação mecânica e UTI neuromonitorizada', 'foto' => 'renan.jpg', 'chave' => 'Renan'],
    ['nome' => 'Prof. MSc. Yuri Ferreira Vicentini', 'tema' => 'Artefatos de EEG, qCON e qNOX na decisão anestésica', 'foto' => 'yuri.jpg', 'chave' => 'Yuri'],
    ['nome' => 'Prof. Dr. Rodrigo Neca Ribeiro', 'tema' => 'Aula online ao vivo sobre redes neurais e neuroanatomia aplicada à anestesia', 'foto' => 'rodrigo.jpg', 'chave' => 'Rodrigo'],
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
    ['O workshop será presencial ou online?', 'Presencial, nos dias 20 e 21 de novembro, na Unidade 2 da Faculdade Ufape. Na sexta-feira, a aula do Prof. Rodrigo Neca é online, ao vivo.'],
    ['Como funcionam os dois dias?', 'A sexta-feira é teórica, com oito temas das 08h30 às 18h. O sábado é prático, com instalação dos monitores, leitura de EEG e BIS, casos com e sem bloqueio neuromuscular e um desafio em pequenos grupos.'],
    ['É necessário saber interpretar EEG previamente?', 'Não. A sexta-feira constrói a base, de neuroanatomia, EEG e análises espectrais a índices processados, antes da prática do sábado.'],
    ['O workshop será apenas sobre BIS?', 'Não. O BIS tem destaque, mas o programa passa por EEG, DSA, CSA, PSI, Conox e monitorização neuromuscular por TOF.'],
    ['Quantas vagas existem?', 'Somente 30, preenchidas por ordem de inscrição.'],
    ['Haverá certificado?', 'Sim, conforme presença, emitido pela UFAPE.'],
];
