<?php

use Illuminate\Database\Seeder;

class TextSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('texts')->insert([
            'id' => 1,
            'name' => 'HomeBox1',
            'description' => 'Box 1 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Serviços'
        ]);

        DB::table('texts')->insert([
            'id' => 2,
            'name' => 'HomeBox2',
            'description' => 'Box 2 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Intelligent Service'
        ]);

        DB::table('texts')->insert([
            'id' => 3,
            'name' => 'HomeBox3',
            'description' => 'Box 3 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Vigilância Patrimonial'
        ]);

        DB::table('texts')->insert([
            'id' => 4,
            'name' => 'HomeBox4',
            'description' => 'Box 4 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Áreas de Atuação'
        ]);

        DB::table('texts')->insert([
            'id' => 5,
            'name' => 'HomeBox5',
            'description' => 'Box 5 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Fale Conosco'
        ]);
        DB::table('texts')->insert([
            'id' => 6,
            'name' => 'HomeBox3',
            'description' => 'Box 6 da área de seções da Home',
            'title' => NULL,
            'subtitle' => NULL,
            'content' => 'Solicite Uma Proposta'
        ]);
        DB::table('texts')->insert([
            'id' => 7,
            'name' => 'Noticia 1',
            'description' => 'Post 1 da área de Noticias da Home',
            'title' => 'Roubo e furto de celular: Saiba como evitar',
            'subtitle' => NULL,
            'content' => 'Mais de nove milhoes de celulares foram bloqueados no Brasil no ultimo mes de novembro'
        ]);
        DB::table('texts')->insert([
            'id' => 8,
            'name' => 'Noticia 2',
            'description' => 'Post 2 da área de Noticias da Home',
            'title' => 'Sistema de monitoramento da empresa: Interno ou Externo?',
            'subtitle' => NULL,
            'content' => 'Contratar um serviço de monitoramento é importante para a grande maioria das empresas'
        ]);
        DB::table('texts')->insert([
            'id' => 9,
            'name' => 'Noticia 3',
            'description' => 'Post 3 da área de Noticias da Home',
            'title' => 'CFTV: Entenda tudo o que é necessário, antes de contratar',
            'subtitle' => NULL,
            'content' => 'Sem dúvidas, uma das maiores preocupações dos brasileiros hoje em dia é com a segurança'
        ]);
        DB::table('texts')->insert([
            'id' => 10,
            'name' => 'Indicador 1',
            'description' => 'Indicador 1 da área de Indicadores da Homepage',
            'title' => 'sistemas eletrôncios instalados',
            'subtitle' => NULL,
            'content' => '+7000'
        ]);
        DB::table('texts')->insert([
            'id' => 11,
            'name' => 'Indicador 2',
            'description' => 'Indicador 2 da área de Indicadores da Homepage',
            'title' => 'clientes à <br />+ 15 anos',
            'subtitle' => NULL,
            'content' => '25%'
        ]);
        DB::table('texts')->insert([
            'id' => 12,
            'name' => 'Indicador 3',
            'description' => 'Indicador 3 da área de Indicadores da Homepage',
            'title' => 'profissionais treinados',
            'subtitle' => NULL,
            'content' => '5854'
        ]);
        DB::table('texts')->insert([
            'id' => 13,
            'name' => 'Indicador 4',
            'description' => 'Indicador 4 da área de Indicadores da Homepage',
            'title' => 'anos no mercado',
            'subtitle' => NULL,
            'content' => '+30'
        ]);
        DB::table('texts')->insert([
            'id' => 14,
            'name' => 'Box 1',
            'description' => 'Box 1 da Página de Serviços',
            'title' => 'Segurança Patrimonial',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 15,
            'name' => 'Box 2',
            'description' => 'Box 2 da Página de Serviços',
            'title' => 'Segurança Pessoal e Escolta',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 16,
            'name' => 'Box 3',
            'description' => 'Box 3 da Página de Serviços',
            'title' => 'Portaria, Controlador de Acesso e Recepção',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 17,
            'name' => 'Box 4',
            'description' => 'Box 4 da Página de Serviços',
            'title' => 'Intelligent Service',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 18,
            'name' => 'Box 5',
            'description' => 'Box 5 da Página de Serviços',
            'title' => 'Segurança Eletrônica',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 19,
            'name' => 'Box 6',
            'description' => 'Box 6 da Página de Serviços',
            'title' => 'Monitoramento 24h',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 20,
            'name' => 'Box 7',
            'description' => 'Box 7 da Página de Serviços',
            'title' => 'Pro Control',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 21,
            'name' => 'Box 8',
            'description' => 'Box 8 da Página de Serviços',
            'title' => 'Limpeza e Conservação',
            'subtitle' => NULL,
            'content' => NULL
        ]);
        DB::table('texts')->insert([
            'id' => 22,
            'name' => 'Box 9',
            'description' => 'Box 9 da Página de Serviços',
            'title' => 'Serviços Gerais',
            'subtitle' => NULL,
            'content' => NULL
        ]);

        DB::table('texts')->insert([
            'id' => 23,
            'name' => 'Box da Página Vigilância Patrimonial',
            'description' => 'Box da Página Vigilância Patrimonial',
            'title' => 'Vigilância Patrimonial',
            'subtitle' => NULL,
            'content' => '<p>A vigilância patrimonial do Grupo Pro Security envolve um conjunto de atividades que procura controlar os riscos ao patrimônio e a integridade física das pessoas, seguindo sempre normas e procedimentos criteriosos que atendem na íntegra a Legislação da Segurança Privada. Para trabalhar com foco nestas ações, a equipe de profissionais é instruída e qualificada para prestar todo o atendimento necessário ao cliente. Por meio de treinamentos e atualizações constantes, aliados também à tecnologia e às inovações de cada método e equipamento, a vigilância patrimonial busca trazer a tranquilidade e o bem-estar que o cliente necessita de forma personalizada.</p>
                            <p>Os diferenciais da vigilância patrimonial do Grupo Pro Security envolvem prevenção, análise de risco e da vulnerabilidade dos clientes, manual de procedimentos customizados, rádios de comunicação, rondas com bastão eletrônico online, supervisão 24 horas por dia, profissionais credenciados armados ou desarmados e monitoramento de imagens de células de segurança. Os vigilantes são credenciados junto à Polícia Federal e Ministério da Justiça. Todos os profissionais são formados em academias e participam de reciclagens periódicas.</p>
                            <p>De forma preventiva, o Grupo Pro Security também trabalha com unidades volantes, atendendo sinais de alarme e executando rondas em perímetro delimitado pelo cliente.</p>
                            <p>Por isso, toda a comunicação entre os envolvidos é integrada, formando um importante elo entre segurança, prevenção e agilidade.</p>'
        ]);
        
        DB::table('texts')->insert([
            'id' => 24,
            'name' => 'Box da Vigilância Pessoal e Escolta',
            'description' => 'Box da Vigilância Pessoal e Escolta',
            'title' => 'Vigilância Pessoal e Escolta',
            'subtitle' => NULL,
            'content' => '<p>Com uma filosofia de trabalho voltada para a segurança e tranquilidade do cliente VIP, a área de vigilância pessoal privada do Grupo Pro Security possui profissionais experientes, capacitados e credenciados junto à Polícia Federal e ao Ministério da Justiça, fatores que contribuem para a qualidade e eficácia de cada serviço. Além de proporcionar soluções ágeis, seguras e confiáveis diante de cada acontecimento, os procedimentos são monitorados pela Central Pro Security 24h.</p>
                            <p>O Grupo Pro Security, dentro do segmento de segurança privada, atua nas modalidades de vigilância patrimonial, vigilância para segurança pessoal privada (VSPP) e vigilância de escolta armada. Para cada segmento, os profissionais possuem treinamento específico regulamentado pela Polícia Federal.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 25,
            'name' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'title' => 'Portaria, Controlador de Acesso e Recepção',
            'subtitle' => NULL,
            'content' => '<p>Os serviços de portaria, recepção e controle de acesso do Grupo Pro Security não se limitam a estabelecer somente o controle de acesso aos usuários, mas também, conforto e tranquilidade. Além de fornecer a mão de obra capacitada, o Grupo Pro Security implanta um inovador sistema de controle de acesso informatizado (computador e software), que o porteiro utilizará para gestão de todo o controle de acesso ao condomínio. Por meio desse sistema é possível promover a interação entre o morador e o serviço de portaria e controle de acesso do condomínio. Tal sistema pode ser integrado a um sistema biométrico e ao sistema de controle de veículo linear. Por isso, precisam ser executados e dirigidos por profissionais responsáveis, que zelem pela eficiência e cordialidade. Dessa forma, para alcançar os objetivos de oferecer um serviço eficaz e cordial, o Grupo Pro Security recruta, seleciona e treina profissionais para exercer cada uma de suas funções. O treinamento realizado envolve o conhecimento teórico e atividades práticas, como o atendimento de interfone e telefone, confecção de relatório de ocorrência, manuseio de rádios, entre outras funções. O treinamento teórico envolve técnicas de portaria, relações humanas, noção de combate a incêndio, entre outros.</p>
                            <p>Todos os funcionários possuem uma meta de treinamento, que na prática faz com que o profissional alocado ao posto, tenha a atualização e os aperfeiçoamentos constantes.</p>
                            <p>As rotinas realizadas neste segmento funcionam sem interrupção. Seja em qualquer hora ou localização, os profissionais estão preparados para agir ou substituir em alguma emergência ou até mesmo, para o aumento do efetivo quando necessário. Com o cuidado de reunir informações sólidas e de integrar a equipe de colaboradores, o serviço de portaria interna e portaria de controle de acesso externo do Grupo Pro Security é realizado por meio de triagens rigorosas dos moradores e demais públicos, antes mesmo de autorizar ou não a abertura dos portões e garagem.</p>
                            <p>A integração desses serviços a sistemas eletrônicos eficazes de controle de acesso, o apoio da vigilância patrimonial e um manual de procedimentos elaborado com base na experiência dos profissionais do Grupo Pro Security, trazem eficiência e tranquilidade ao dia a dia.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 26,
            'name' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'title' => 'Segurança Eletrônica',
            'subtitle' => NULL,
            'content' => '<p>Os sistemas eletrônicos com câmeras, sensores e alarmes são fundamentais para a proteção de nosso patrimônio e para agilizar as ações em prol da nossa segurança. Por isso, o Grupo Pro Security está preparado para atender todos os clientes, oferecendo projetos personalizados, além de produtos e serviços exclusivos com o melhor custo-benefício.</p>
                            <p>Por meio de um planejamento e uma análise criteriosa dos locais a serem protegidos, o Grupo Pro Security cuida de toda a operacionalização e oferece o equipamento ideal para cada situação. Diante dessas vantagens, no Grupo Pro Security você conta com o pronto atendimento para manutenção, equipe de instalação altamente treinada, motivada e comprometida com cada solução.</p>
                            <p>A cada necessidade, uma solução! Por isso, o Grupo Pro Security pratica com excelência, todas as atividades, incluindo sistemas e produtos de última geração, que abrangem alarmes, cercas elétricas, sensores de movimento, câmeras IP para monitoramento de imagens, entre outros. Todo o serviço é vistoriado e acompanhado por uma equipe especializada, pronta para atender qualquer ocorrência.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 27,
            'name' => 'Box 1 da Página de Segurança Eletrônica',
            'description' => 'Box 1 da Página de Segurança Eletrônica',
            'title' => 'Circuito Fechado de TV',
            'subtitle' => NULL,
            'content' => '<p>O monitoramento de circuito fechado de TV do Grupo Pro Security é um sistema de vigilância avançado que permite visualizar, gravar e reproduzir as imagens realizadas por câmeras. Os serviços envolvem monitoramento CFTV em: empresas e indústrias de diversos segmentos, residências, condomínios, escolas, shoppings, entre outros.</p>
                                <p>Trata-se de uma solução personalizada para cada situação. Alarmes e outros procedimentos também podem ser integrados para facilitar e agilizar o pronto atendimento de toda a equipe de profissionais altamente capacitados para prevenir e identificar qualquer ação suspeita.</p>
                                <p>O Grupo Pro Security atua com diversos segmentos de câmeras e DVRs, desde digitais até IP.</p>',
        ]);

        DB::table('texts')->insert([
            'id' => 28,
            'name' => 'Box 2 da Página de Segurança Eletrônica',
            'description' => 'Box 2 da Página de Segurança Eletrônica',
            'title' => 'Alarmes',
            'subtitle' => NULL,
            'content' => '<p>A procura por um sistema de proteção eficaz tornou-se uma opção bastante desejada, seja em residências ou pontos comerciais. Por isso, o Grupo Pro Security, preocupado em zelar por sua segurança, apresenta produtos e soluções eficazes. Entre os produtos disponibilizados, estão: central de alarmes, sensor de movimento, quebra de vidro, fumaça, impacto, botão de pânico, sensor para portas e janelas, painel de alarme, sirene e cerca elétrica. O Grupo Pro Security faz uso de sistemas de alta tecnologia com fácil instalação; capazes de proteger o imóvel e também, locais de grandes extensões.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 29,
            'name' => 'Box 3 da Página de Segurança Eletrônica',
            'description' => 'Box 3 da Página de Segurança Eletrônica',
            'title' => 'Proteção Perimetral',
            'subtitle' => NULL,
            'content' => '<p>A proteção perimetral abrange inúmeros sistemas de segurança. O Grupo Pro Security, a partir da análise de um consultor especializado, oferece a melhor solução para cada tipo de perímetro. Dessa forma, apresenta os mais diversos dispositivos, que de alguma forma, podem impedir e dificultar o acesso de pessoas ou animais em uma determinada área. Dentre os sistemas mais utilizados estão os sensores infravermelho sob muros, sensores infravermelhos terrestres e cerca elétricas com choque pulsativo.</p>
                                <p>As cercas elétricas instaladas pelo Grupo Pro Security atendem às normas da Associação Brasileira de Normas Técnicas (ABNT). Outra forma de proteção utilizada são os arames de concertina. Trata-se de uma barreira de segurança laminada, de forma espiralada que possui lâminas pontiagudas, cortantes e penetrantes. A concertina foi originada nas cercas utilizadas em ações militares que ficavam no chão para impedir a ultrapassagem de um perímetro. A concertina é a evolução do arame farpado e geralmente são utilizadas em muros, alambrados, cercas, portões, telhados e torres, especialmente aqueles com grande vegetação que impede a instalação de um dispositivo eletrônico. São feitos de aço galvanizado ou inoxidável e dificilmente são cortados por ferramentas convencionais.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 30,
            'name' => 'Box 4 da Página de Segurança Eletrônica',
            'description' => 'Box 4 da Página de Segurança Eletrônica',
            'title' => 'Pro Assistance',
            'subtitle' => NULL,
            'content' => '<p>O Pro Assistance é um serviço exclusivo de manutenção preventiva e corretiva para sistemas eletrônicos de segurança. Com as vantagens do Pro Assistance, mantenha seus equipamentos de segurança em constante funcionamento. Confira:</p>
                                <ul>
                                  <li>Equipe técnica treinada;</li>
                                  <li>Opções de contrato com visitas periódicas para análise do sistema, reposição de peças ou de equipamentos;</li>
                                  <li>Tranquilidade e agilidade no atendimento;</li>
                                  <li>Sistema de segurança em pleno funcionamento.</li>
                                </ul>'
        ]);

        DB::table('texts')->insert([
            'id' => 31,
            'name' => 'Texto Introdutório da Página de Monitoramento 24h',
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
            'title' => 'Monitoramento 24h',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security utiliza equipamentos de última geração para monitorar em tempo integral, empresas, residências, condomínios, comércios e hospitais. Trata-se de uma solução eficaz que ajuda a inibir a invasão de intrusos e proteger o seu patrimônio por meio de alarme monitorado e câmeras. Transmitido em tempo real, o monitoramento 24 horas é responsável pela interface entre a central e o sistema, que diante de alguma ocorrência, transmite informações e imagens às equipes de profissionais que estão prontas e treinadas para agir até a chegada do policiamento. Além de zelar pela segurança, o Grupo Pro Security desenvolve soluções acessíveis, seguras e confiáveis por meio da idealização de projetos, instalação e manutenção de equipamentos eletrônicos com a colaboração de profissionais capacitados e treinados para as mais diversas situações.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 32,
            'name' => 'Box 1 da Página de Monitoramento 24h',
            'description' => 'Box 1 da Página de Monitoramento 24h',
            'title' => 'Monitoramento de Alarmes',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security oferece um completo sistema de monitoramento de alarmes para empresas, residenciais, condomínios, escolas e shoppings por meio de uma comunicação ágil e integrada. A Central de Monitoramento do Grupo Pro Security é blindada e com acesso restrito. O serviço de monitoramento é efetivado mediante o disparo de um dispositivo instalado no imóvel do cliente. A partir deste alerta recebido na Central Pro Security por meio de linha telefônica, GPRS ou internet, a equipe adota imediatamente os procedimentos específicos para cada tipo de sinal, inclusive acionando as equipes de socorro e apoio quando necessário.</p>
                          <p>Além dos serviços de monitoramento de alarmes, o Grupo Pro Security disponibiliza outras tecnologias para proteção, como: monitoramento de imagens, gravação remota de imagens, bem como instalação de todos os dispositivos necessários, como: cercas elétricas, sirenes, sensores de movimento, circuito fechado de TV, porteiro eletrônico, botão de pânico, entre outros.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 33,
            'name' => 'Box 2 da Página de Monitoramento 24h',
            'description' => 'Box 2 da Página de Monitoramento 24h',
            'title' => 'Monitoramento de Imagens',
            'subtitle' => NULL,
            'content' => '<p>O monitoramento de imagens é uma das formas mais seguras de inibir e prevenir ações de meliantes em residências, empresas e condomínios. Por esse motivo, o Grupo Pro Security fornece os melhores equipamentos de segurança para atender os mais diversos projetos.</p>
                          <p>Com soluções inovadoras e uma equipe especializada para atender os clientes e executar as ações, o monitoramento é realizado com o objetivo de detectar e prevenir a presença de intrusos em áreas restritas. O monitoramento pode ser permanente ou mediante acionamento de dispositivo eletrônico. Quando um dispositivo, como por exemplo, um sensor de presença é acionado, imediatamente a Central passa a monitorar a câmera do estabelecimento com o objetivo de constatar algum sinistro em curso. Mediante qualquer constatação de problema, o procedimento padrão é colocado em prática. </p>
                          <p>De acordo com a necessidade do cliente, esse serviço pode atender tanto as áreas internas como as externas do imóvel.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 34,
            'name' => 'Box 3 da Página de Monitoramento 24h',
            'description' => 'Box 3 da Página de Monitoramento 24h',
            'title' => 'Gravação Remota de Imagens',
            'subtitle' => NULL,
            'content' => '<p>O cliente pode acompanhar em tempo real, via internet, todas as câmeras de segurança instaladas em seu imóvel. A gravação remota de imagens consiste em armazená-las no sistema CFTV, fora do ambiente onde ele está instalado. Com a ajuda do Grupo Pro Security, o cliente é quem define onde e quais câmeras deverão transmitir as imagens para a Central de Monitoramento, que poderão ser gravadas automaticamente.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 35,
            'name' => 'Box 4 da Página de Monitoramento 24h',
            'description' => 'Box 4 da Página de Monitoramento 24h',
            'title' => 'System Plus',
            'subtitle' => NULL,
            'content' => '<p>O System Plus permite o monitoramento eletrônico do condomínio através de um sistema de alarme. Esse sistema é um apoio importante à equipe de profissionais do local, principalmente, quando há situações de emergência. O System Plus apresenta:</p>
                                <ul>
                                  <li>Kit de alarme composto de central, teclado, botão de pânico e bateria;</li>
                                  <li>Sistema Pânico Reverso para monitorar uma situação de coação que o porteiro esteja sofrendo como também, monitorar a atenção dos profissionais, principalmente, no período noturno. Caso não haja o cumprimento das marcações periódicas, a Central de Monitoramento será acionada;</li>
                                  <li>Atendimento de unidade de apoio 24h para situações de emergência;</li>
                                  <li>Manutenções corretivas do sistema de alarme e câmeras existentes no condomínio.</li>
                                </ul>'
        ]);
        DB::table('texts')->insert([
            'id' => 36,
            'name' => 'Box 5 da Página de Monitoramento 24h',
            'description' => 'Box 5 da Página de Monitoramento 24h',
            'title' => 'Vision Plus',
            'subtitle' => NULL,
            'content' => '<p>O Vision Plus é um sistema digital de monitoramento online ideal para implantar em áreas críticas de segurança. Trata-se de um sistema inovador, que integra câmeras e alarmes aos serviços dos profissionais especializados em segurança. Por meio da instalação de uma câmera e sensores de abertura, a Central 24h controla o acesso deste ambiente restrito (por exemplo, uma guarita de segurança) e monitora toda a abertura da porta, constatando se o ambiente ainda permanece tranquilo, sem nenhuma ocorrência. Dessa forma, remotamente, complementamos a segurança do cliente, já que acompanhamos o trabalho do profissional no local protegido. O controle de acesso dos moradores, visitantes e prestadores de serviços torna-se mais eficaz e seguro. O Vision Plus apresenta:</p>
                                <ul>
                                  <li>Soluções de última geração para acompanhamento da rotina do condomínio;</li>
                                  <li>Câmeras IP na guarita que permitem o acesso remoto das imagens pela Central de Monitoramento;</li>
                                  <li>Sempre que uma porta ou janela se abre ou em uma emergência, o botão de pânico é acionado e as imagens são transmitidas automaticamente para a Central de Monitoramento, que no mesmo instante, executa os procedimentos de proteção necessários, como acionar uma viatura. </li>
                                </ul>'
        ]);


        DB::table('texts')->insert([
            'id' => 37,
            'name' => 'Texto Introdutório da Página do Pro Control',
            'description' => 'Texto Introdutório da Página do Pro Control',
            'title' => 'Pro Control',
            'subtitle' => NULL,
            'content' => '<p>O Pro Control é um sistema de controle de acesso inteligente e interativo que utiliza a comunicação online como forma de integrar todas as pessoas e informações ligadas às áreas do condomínio. É uma ferramenta prática e segura. Os dados coletados são lançados no sistema e armazenados em um data center (sistema de processamento e armazenamento de dados) de forma sigilosa. O Pro Control funciona como um sistema facilitador das rotinas diárias de um condomínio. A comunicação passa a ser integrada entre porteiros, zeladores, síndicos e administradores com somente alguns &ldquo;clicks&rdquo;, possibilitando uma navegação rápida e prática, capaz de agilizar cadastros e atualizar informações. Confira na sequência, as vantagens exclusivas do Pro Control:</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 38,
            'name' => 'Box 1 da Página do Pro Control',
            'description' => 'Box 1 da Página do Pro Control',
            'title' => 'Porteiros',
            'subtitle' => NULL,
            'content' => '<p>O porteiro pode contar com um sistema de fácil manuseio e de acesso rápido e eficiente. Os campos são pré-configurados, o que agiliza a escolha da opção desejada sem a necessidade de digitar as palavras durante o cadastro de entrega de algum prestador de serviço. É possível também, controlar os horários de entrada e saída dos visitantes, fornecedores e demais públicos com mais segurança e atenção.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 39,
            'name' => 'Box 2 da Página de Segurança Eletrônica',
            'description' => 'Box 2 da Página de Segurança Eletrônica',
            'title' => 'Síndicos, zeladores e administradores',
            'subtitle' => NULL,
            'content' => '<p>O Pro Control estabelece um espaço exclusivo para a publicação de comunicados, atas, regulamentos, entre outros materiais de interesse. A troca de informações é realizada de forma mais rápida entre o zelador, síndico, administrador e morador. Os serviços realizados também podem ser apresentados e acompanhados pelo sistema, como pinturas, reformas e demais atividades. Todos os acontecimentos são transmitidos com mais facilidade e sem burocracia, como os assuntos referentes às reservas das áreas de lazer solicitadas pelos moradores.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 40,
            'name' => 'Box 3 da Página de Segurança Eletrônica',
            'description' => 'Box 3 da Página de Segurança Eletrônica',
            'title' => 'Moradores',
            'subtitle' => NULL,
            'content' => '<p>Com o Pro Control o morador consegue reservar as áreas de lazer do condomínio com menos burocracia e mais rapidez. A lista de convidados pode ser encaminhada à portaria com o intuito de agilizar as entradas e trazer mais segurança ao local. Com o Pro Control também é possível receber e encaminhar alertas via SMS sobre encomendas na recepção, entrada e saída de empregados, entre outros. O sistema também ajuda como uma fonte importante de consulta. Assim, você consegue localizar com mais credibilidade, um serviço que procura na região, juntamente com as opiniões de seus vizinhos.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 41,
            'name' => 'Box da Página de Limpeza e Conservação',
            'description' => 'Box da Página de Limpeza e Conservação',
            'title' => 'PRO CLEAN – Limpeza e Conservação',
            'subtitle' => NULL,
            'content' => '<p>Atento a sua responsabilidade social e em decorrência da crise hídrica que atinge o estado de São Paulo, o Grupo Pro Security adotou processos inovadores com produtos biodegradáveis que além de não contaminar o meio ambiente, permite prestar serviço de limpeza reduzindo em até 30% o consumo de água.</p>
                            <p>Os produtos adotados pela Pro Clean são produzidos com peróxido de hidrogênio que age fracionando a sujeira em pequenas partículas, facilitando o processo de limpeza e ainda reage com compostos contento enxofre e amônia, eliminando também odores desagradáveis.</p>
                            <p>Os produtos convencionais utilizam matérias-primas oriundas do petróleo, elemento poluente que degrada o meio ambiente. Os utilizados pela Pro Clean são produzidos com elementos orgânicos que requerem menor quantidade de água nos processos, se decompõem rapidamente no meio ambiente e não agridem os meios naturais.</p>
                            <p>Além disso, os produtos biodegradáveis também são mais saudáveis para os profissionais, uma vez que os agentes são menos corrosivos. Todos produtos receberam o certificado de limpeza verde.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 42,
            'name' => 'Texto Introdutório da Página de Serviços Gerais',
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
            'title' => 'Serviços Gerais',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security conta com profissionais preparados para qualquer necessidade do condomínio ou empresa. Além de serviços que visam proteger você e o patrimônio dos serviços de limpeza, há também os serviços gerais que visam contribuir com o cuidado e bom funcionamento do local. Para isso, o Grupo Pro Security presta serviços de zeladoria, jardinagem, copa, manutenção predial, mensageiro, manobrista, bombeiro civil, entre outros.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 43,
            'name' => 'Box 1 da Página de Serviços Gerais',
            'description' => 'Box 1 da Página de Serviços Gerais',
            'title' => 'Manutenção',
            'subtitle' => NULL,
            'content' => '<p>Ao agregar valor e diferencial em seus produtos e serviços, o Grupo Pro Security encontrou na área de manutenção, os benefícios que você e a sua empresa precisam para manter o patrimônio em excelentes condições de funcionamento, como a manutenção predial para reparos na pintura, sistema elétrico, hidráulico, entre outros, de forma eficaz, segura e confiável e também, com base na redução dos custos.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 44,
            'name' => 'Box 2 da Página de Serviços Gerais',
            'description' => 'Box 2 da Página de Serviços Gerais',
            'title' => 'Jardinagem',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security apresenta profissionais preparados e bem treinados para atender as mais diversas necessidades que você, sua empresa ou que o seu condomínio necessita. Por isso, além de proporcionar serviços de proteção e limpeza, o Grupo Pro Security se preocupa com a conservação e o bom funcionamento das áreas comuns, como os jardins e as paisagens que cercam o seu ambiente. Com dedicação e profissionalismo, o seu espaço verde terá o cuidado que merece.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 45,
            'name' => 'Box 3 da Página de Serviços Gerais',
            'description' => 'Box 3 da Página de Serviços Gerais',
            'title' => 'Zeladoria',
            'subtitle' => NULL,
            'content' => '<p>Para atender as necessidades de cada cliente no que se refere à manutenção predial e conservação de ambientes, o Grupo Pro Security conta com profissionais experientes na área de zeladoria e capacitados para atuar e coordenar ações na área elétrica, hidráulica, limpeza, entre outros.</p>
                                <p>O zelador tem como principal objetivo fiscalizar as áreas de uso comum dos condôminos ou inquilinos, verificar o funcionamento das instalações elétricas e hidráulicas do edifício, assim como, os aparelhos de uso comum, além de zelar pelo sossego e pela observância da disciplina no edifício, de acordo com o seu regimento interno ou com as normas afixadas na portaria e nos corredores.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 46,
            'name' => 'Box 4 da Página de Serviços Gerais',
            'description' => 'Box 4 da Página de Serviços Gerais',
            'title' => 'Bombeiro Civil',
            'subtitle' => NULL,
            'content' => '<p>O bombeiro civil tem por função proteger pessoas e patrimônios de riscos como incêndios e vazamentos. Além disso, inspeciona e testa equipamentos de segurança. Este profissional está habilitado para realizar salvamentos e prestar primeiros socorros, podendo treinar equipes e brigadas em situações de emergência.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 47,
            'name' => 'Texto Introdutório da Página de Áreas de Atuação',
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
            'title' => 'Áreas de Atuação',
            'subtitle' => NULL,
            'content' => 'O Grupo Pro Security presta serviços de segurança, conservação e limpeza para escolas, empresas, administradoras, condomínios e construtoras na grande São Paulo. Confira todas as áreas de atuação.'
        ]);
        DB::table('texts')->insert([
            'id' => 48,
            'name' => 'Box 1 da Página de Áreas de Atuação',
            'description' => 'Box 1 da Página de Áreas de Atuação',
            'title' => 'Condomínios e Construções',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security apresenta aos condomínios e construtoras, alternativas eficientes e dinâmicas para uma ampla proteção. Os serviços abrangem: serviços de portaria, controle de acesso e limpeza, serviços de vigilância patrimonial armada ou desarmada e uma gama completa de sistemas eletrônicos de segurança, tais como alarmes, câmeras IP, controle de acesso e proteção perimétrica. Todos os vigilantes são credenciados pela Polícia Federal e treinados constantemente para a função.</p>
                                <p>Associando mão de obra, processos formalizados e tecnologia, o Grupo Pro Security oferece importantes diferenciais e eficácia ao segmento de construtoras e condomínios.</p>
                                <p>Para consultar outras vantagens para o seu condomínio ou construtora, entre em contato com o Grupo Pro Security!</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 49,
            'name' => 'Box 2 da Página de Áreas de Atuação',
            'description' => 'Box 2 da Página de Áreas de Atuação',
            'title' => 'Administradoras',
            'subtitle' => NULL,
            'content' => '<p>As administradoras de condomínios são parceiras importantes para um atendimento eficaz ao cliente final, o condomínio.</p>
                                <p>A qualidade dos serviços, a presença, a interação constante da supervisão operacional junto ao cliente e a administradora e os processos rápidos e transparentes são diferencias que o Grupo Pro Security oferece às administradoras de condomínio que, muitas vezes, têm a missão de gerenciar os serviços terceirizados nos condomínios.</p>
                                <p>Mensalmente, encaminhamos à administradora a comprovação de regularidade dos funcionários alocados a cada condomínio, como Folha de Pagamento, INSS e FGTS.</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 50,
            'name' => 'Box 3 da Página de Áreas de Atuação',
            'description' => 'Box 3 da Página de Áreas de Atuação',
            'title' => 'O Corporativo',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security traz aos seus clientes ideias e conceitos inovadores para o segmento de segurança e serviços, apresentando um projeto exclusivo e personalizado.</p>
                                <p>Tudo com o intuito de integrar os sistemas de segurança , minimizando o risco e otimizando os custos para sua empresa.</p>
                                <p>Os serviços abrangem a segurança com vigilantes armados ou desarmados, vigilantes motorizados, vigilantes de Central de Monitoramento, porteiros / controladores de acesso e recepcionistas.</p>
                                <p>Além disso disponibilizamos equipamentos modernos e homologados pelo nosso Departamento de Engenharia para integração da segurança, são eles, controle de acess , biometria, câmeras IP, gravadores de imagem, detecção de movimento, dentre outros.</p>
                                <p>Segmentos de atuação no ambiente corporativo</p>
                                <ul>
                                  <li> Instituições Financeiras</li>
                                  <li> Instituições de Ensino</li>
                                  <li> Comércio</li>
                                  <li> Shopping Centers</li>
                                  <li> Indústria</li>
                                  <li> Hospitalar</li>
                                  <li> Condomínios Comerciais</li>
                                </ul>
                                <p>Para consultar uma solução exclusiva para sua empresa, <a href="proposta.html">entre em contato</a> com o Grupo Pro Security!</p>'
        ]);
        DB::table('texts')->insert([
            'id' => 51,
            'name' => 'Box 4 da Página de Áreas de Atuação',
            'description' => 'Box 4 da Página de Áreas de Atuação',
            'title' => 'Escolas',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security desenvolve projetos específicos para estabelecimentos de ensino. Diante desta iniciativa, o profissional de segurança desta área age em sincronia com as rotinas diárias das escolas e conta com o apoio tecnológico dos sistemas de alarme e circuitos fechados de televisão. Além de treinamentos constantes, com o objetivo de inibir não somente ações de vandalismo, mas também, de desmotivar possíveis roubos, tráfico de entorpecentes ao redor da escola e até mesmo sequestros, o Grupo Pro Security nas escolas é uma alternativa diferenciada e de qualidade, a fim de trazer mais segurança e tranquilidade aos pais, estudantes e funcionários. Dentro do portfólio de clientes, o Grupo Pro Security atende instituições de ensino há mais de 15 anos.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 52,
            'name' => 'Texto Introdutório da Página do Grupo',
            'description' => 'Texto Introdutório da Página do Grupo',
            'title' => 'O Grupo',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security se consolidou na área de segurança e desde 1986 conseguiu estar presente em todos os lugares para trazer a tranquilidade e a comodidade a todos os clientes. Conheça a história e os princípios organizacionais que direcionam as ações do Grupo Pro Security.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 53,
            'name' => 'Texto do Título da Página Conheça O Grupo Pro Security',
            'description' => 'Texto do Título da Página Conheça O Grupo Pro Security',
            'title' => 'Conheça O Grupo Pro Security',
            'subtitle' => NULL,
            'content' => ''
        ]);

        DB::table('texts')->insert([
            'id' => 54,
            'name' => 'Texto do Box 1 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto do Box 1 da Página Conheça O Grupo Pro Security',
            'title' => 'História',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security nasceu em 1986 da experiência de seu fundador. Para estar presente em todos os lugares e trazer mais comodidade e segurança aos seus clientes, o Grupo Pro Security, que presta serviços de segurança, portaria e limpeza no Estado de São Paulo, conseguiu antecipar ações, previu movimentos e enfrentou todos os obstáculos. O Grupo Pro Security cresceu e conquistou o mercado, inicialmente dedicando-se ao desenvolvimento de projetos de segurança integrada e com o passar dos anos oferecendo toda a solução de segurança, desde mão de obra até tecnologia.</p>
                            <p>Com foco nas metodologias e nos conceitos desde 1986, o Grupo Pro Security se consolidou na área de segurança, proporcionando a todos os clientes e parceiros uma grande variedade de serviços, que englobam não somente a área de segurança, mas também a terceirização de mão de obra de portaria e limpeza, vigilância, planejamento e instalação de equipamentos.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 55,
            'name' => 'Texto 1 do Box 2 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 1 do Box 2 da Página Conheça O Grupo Pro Security',
            'title' => 'Missão',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security assume a missão de fornecer serviços de segurança, monitoramento de alarmes e imagens, conservação e limpeza com qualidade, respeito, ética, transparência e responsabilidade social, a partir de soluções que proporcionem satisfação e tranquilidade ao cliente.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 56,
            'name' => 'Texto 2 do Box 2 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 2 do Box 2 da Página Conheça O Grupo Pro Security',
            'title' => 'Visão',
            'subtitle' => NULL,
            'content' => '<p>Ser líder e referência no segmento de prestação de serviços de segurança, monitoramento, conservação e limpeza do Estado de São Paulo.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 57,
            'name' => 'Texto 3 do Box 2 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 3 do Box 2 da Página Conheça O Grupo Pro Security',
            'title' => 'Valores',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security busca estabelecer seus valores nas atitudes, nos resultados e, principalmente, diante do relacionamento com os seus públicos estratégicos.</p>
                            <ul>
                              <li> Responsabilidade, ética, cordialidade, respeito e transparência;</li>
                              <li> Governança Corporativa ligada aos processos, políticas e leis para administrar a empresa;</li>
                              <li> Inovação e aprimoramento dos processos e tecnologias.</li>
                            </ul>'
        ]);

        DB::table('texts')->insert([
            'id' => 58,
            'name' => 'Texto do Título do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto do Título do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificados e Prêmios',
            'subtitle' => NULL,
            'content' => NULL
        ]);

        DB::table('texts')->insert([
            'id' => 59,
            'name' => 'Texto 1 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 1 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificado SINDEPRESTEM',
            'subtitle' => NULL,
            'content' => '<p><em>(Sindicato das Empresas de Prestação de Serviços a Terceiros, Colocação e Administração de Mão-de-Obra e de Trabalho Temporário no Estado de São Paulo)</em></p>
                                        <p>O SINDEPRESTEM foi criado para representar as empresas de Trabalho Temporário e Terceirização de Serviços no Estado de São Paulo. Por isso, o Grupo Pro Security, associada a este sindicato, mantém suas ações voltadas para o crescimento e desenvolvimento do setor com base em ações sólidas e íntegras com todos os parceiros e clientes.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 60,
            'name' => 'Texto 2 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 2 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificado de Regularidade em Segurança (CRS)',
            'subtitle' => NULL,
            'content' => '<p>O Sevesp (Sindicato das Empresas de Segurança Privada, Segurança Eletrônica e Cursos de Formação do Estado de São Paulo) lançou em 2002 o Certificado de Regularidade em Segurança Patrimonial. O CRS é uma iniciativa pioneira que identifica as empresas aptas a prestar bons serviços. Confira as vantagens de contratar uma empresa prestadora de segurança com CRS:</p>
                            <p>Eficiência: vigilantes treinados e reciclados, periodicamente, em cursos de formação, legalmente reconhecidos e aprovados pelo Ministério da Justiça;</p>
                            <p>Tranquilidade: o contratante não será envolvido em eventuais processos criminais pela contratação de segurança irregular;</p>
                            <p>Retorno Social: valoriza a prestadora que é socialmente responsável, respeita o piso salarial da categoria e apresenta situação regularizada em órgãos públicos.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 61,
            'name' => 'Texto 3 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 3 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Prêmio Master Escola 2006',
            'subtitle' => NULL,
            'content' => '<p>O Prêmio Master Escolas é organizado pela editora da Revista Produtos e Serviços, ABC Educatio e foi criado para valorizar as empresas que realizam um trabalho sério no oferecimento de produtos e serviços às escolas de todo o país.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 62,
            'name' => 'Texto 4 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 4 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificado ABRALIMP',
            'subtitle' => NULL,
            'content' => '<p>A Associação Brasileira do Mercado Limpeza Profissional - Abralimp é uma entidade civil, sem fins lucrativos e de âmbito nacional. A Abralimp é responsável pelo enquadramento do setor da limpeza profissional do Brasil aos mais modernos conceitos de tecnologia e serviços agregados do mundo, proporcionando ambientes públicos e privados limpos com a garantia de saúde e bem-estar.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 63,
            'name' => 'Texto 5 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 5 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificado SESVESP',
            'subtitle' => NULL,
            'content' => '<p>O SESVESP - Sindicato das Empresas de Segurança Privada, Segurança Eletrônica e Cursos de Formação do Estado de São Paulo recebeu sua Carta Sindical em 1988, quando havia muito ainda a ser feito pela categoria. Desde sua fundação, o SESVESP vem acompanhando a evolução do mercado através de dados estatísticos para ampliar sua atuação e dessa forma cumprir com mais eficácia o seu papel de entidade representativa.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 64,
            'name' => 'Texto 6 do Box 3 da Página Conheça O Grupo Pro Security',
            'description' => 'Texto 6 do Box 3 da Página Conheça O Grupo Pro Security',
            'title' => 'Certificado ABREVIS',
            'subtitle' => NULL,
            'content' => '<p>A ABREVIS - Associação Brasileira de Empresas de Segurança e Vigilância foi fundada em 1970. Como entidade que congrega e representa a categoria econômica de empresas de segurança e vigilância privada no BRASIL, evoluiu muito como prestadora de serviços, objetivando sempre o bom atendimento às suas associadas.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 65,
            'name' => 'Texto Introdutório da Página de Responsabilidade Social',
            'description' => 'Texto Introdutório da Página de Responsabilidade Social',
            'title' => 'Responsabilidade Social',
            'subtitle' => NULL,
            'content' => '<p>Para o Grupo Pro Security, tornar-se uma grande prestadora de serviços não resulta somente de um brilhante desempenho financeiro, mas, também da forma como os negócios são geridos por toda a equipe. Por isso, o Grupo Pro Security está atento ao compromisso de contribuir para o desenvolvimento sustentável de uma sociedade mais justa. Assim, não somente apoia uma ação ou projeto, mas, participa ativamente com ações sociais nas comunidades onde atua. Conheça mais:</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 66,
            'name' => 'Texto do Box 1 da Página de Responsabilidade Social',
            'description' => 'Texto do Box 1 da Página Página de Responsabilidade Social',
            'title' => 'Pro Ação Criança',
            'subtitle' => NULL,
            'content' => '<p>A Pro Ação Criança visa a arrecadação de brinquedos e demais donativos destinados para mais diversas instituições assistenciais. Em 2014, o projeto arrecadou mais de 14 mil brinquedos.</p>
                            <p>Desde 2014 os colabores do Grupo Pro Security participam ativamente de todas as etapas do projeto como equipes que concorrem entre si. A equipe vencedora escolhe a entidade que além de ganhar parte dos brinquedos arrecadados também recebe um prêmio em cheque doado pelo Grupo Pro Security. Nesse ano foram arrecadados mais de 14 mil brinquedos.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 67,
            'name' => 'Texto do Box 2 da Página de Responsabilidade Social',
            'description' => 'Texto do Box 2 da Página Página de Responsabilidade Social',
            'title' => 'Fundação Gol de Letra',
            'subtitle' => NULL,
            'content' => '<p>A fundação busca novas perspectivas de vida para crianças e adolescentes que estão em situação de vulnerabilidade social. As ações que envolvem atividades de arte, cultura, comunicação, esporte, lazer, cidadania e educação para o trabalho com colaborações mensais do Grupo Pro Security.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 68,
            'name' => 'Texto do Box 3 da Página de Responsabilidade Social',
            'description' => 'Texto do Box 3 da Página Página de Responsabilidade Social',
            'title' => 'SAMOVIS',
            'subtitle' => NULL,
            'content' => '<p>(Sociedade Amigos do Morumbi e Vila Suzana)<br>
                            O projeto busca integrar e reunir pessoas voluntárias e moradores da região do Morumbi empenhados a melhorar o bem-estar social da região.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 69,
            'name' => 'Texto do Box 4 da Página de Responsabilidade Social',
            'description' => 'Texto do Box 4 da Página Página de Responsabilidade Social',
            'title' => 'Projeto Favela Vila da Praia',
            'subtitle' => NULL,
            'content' => '<p>(O projeto busca mobilizar pessoas voluntárias para arrecadar alimentos destinados aos mais necessitados moradores da Favela Vila da Praia, no Morumbi.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 70,
            'name' => 'Texto do Box 5 da Página de Responsabilidade Social',
            'description' => 'Texto do Box 5 da Página Página de Responsabilidade Social',
            'title' => 'Entidade Cáritas Santa Suzana',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security colabora com os mais diversos donativos para atender crianças e adolescentes assistidos por esta entidade. Conheça mais sobre estas ações sociais!</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 71,
            'name' => 'Texto do Título da Página Pro Ação Criança',
            'description' => 'Texto do Título da Página Pro Ação Criança',
            'title' => 'Pro Ação Criança',
            'subtitle' => NULL,
            'content' => '<p>Anualmente, o Grupo Pro Security realiza o Pro Ação Criança, campanha de voluntariado na qual os colaboradores competem entre si, arrecadam brinquedos e escolhem para qual entidade desejam doar o prêmio em dinheiro e brinquedos.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 72,
            'name' => 'Texto 1 do Box 1 da Página Pro Ação Criança',
            'description' => 'Texto 1 do Box 1 da Página Pro Ação Criança',
            'title' => 'lorem ipsem',
            'subtitle' => '1000',
            'content' => 'ipsem lorem<br>ipsem lorem ru<br>ipsem</h3>'
        ]);

        DB::table('texts')->insert([
            'id' => 73,
            'name' => 'Texto 2 do Box 1 da Página Pro Ação Criança',
            'description' => 'Texto 2 do Box 1 da Página Pro Ação Criança',
            'title' => 'lorem ipsem',
            'subtitle' => '300',
            'content' => 'ipsem lorem<br>ipsem lorem ru<br>ipsem</h3>'
        ]);

        DB::table('texts')->insert([
            'id' => 74,
            'name' => 'Texto 3 do Box 1 da Página Pro Ação Criança',
            'description' => 'Texto 3 do Box 1 da Página Pro Ação Criança',
            'title' => 'lorem ipsem',
            'subtitle' => '60',
            'content' => 'ipsem lorem<br>ipsem lorem ru<br>ipsem</h3>'
        ]);

        DB::table('texts')->insert([
            'id' => 75,
            'name' => 'Texto do Título do Box 2 da Página Pro Ação Criança',
            'description' => 'Texto do Título do Box 2 da Página Pro Ação Criança',
            'title' => 'Carrossel de Fotos',
            'subtitle' => NULL,
            'content' => NULL
        ]);

        DB::table('texts')->insert([
            'id' => 76,
            'name' => 'Texto do Título da Página Pro Ação Criança Campanha',
            'description' => 'Texto do Título da Página Pro Ação Criança Campanha',
            'title' => 'Pro Ação Criança 2018',
            'subtitle' => NULL,
            'content' => '<p>Anualmente, o Grupo Pro Security realiza o Pro Ação Criança, campanha de voluntariado na qual os colaboradores competem entre si, arrecadam brinquedos e escolhem para qual entidade desejam doar o prêmio em dinheiro e brinquedos.</p>'
        ]);


        DB::table('texts')->insert([
            'id' => 77,
            'name' => 'Texto do Título da Página Clientes',
            'description' => 'Texto do Título da Página Clientes',
            'title' => 'Nossos Clientes',
            'subtitle' => NULL,
            'content' => '<p>Desenvolver um relacionamento transparente e de qualidade com os clientes é um grande diferencial da Pro Security. Por isso, você pode esperar de toda a equipe não somente a excelência das técnicas e dos serviços, mas também, uma postura ética que busca criar e manter relacionamentos duradouros, baseados no comprometimento e na superação das expectativas.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 78,
            'name' => 'Texto do Título da Página RH',
            'description' => 'Texto do Título da Página RH',
            'title' => 'Normas Sociais e Políticas Internas',
            'subtitle' => NULL,
            'content' => ''
        ]);

        DB::table('texts')->insert([
            'id' => 79,
            'name' => 'Texto do Box 1 da Página RH',
            'description' => 'Texto do Box 1 da Página RH',
            'title' => 'Meio Ambiente',
            'subtitle' => NULL,
            'content' => '<p><strong>Grupo Pro Security</strong>  entende que preservar o meio ambiente é fundamental, por isso, para o exercício de suas atividades busca constantemente processos eficientes que preservem os recursos naturais, reduzindo ao máximo sua pegada ambiental.</p>
                          <p>Seu comprometimento pode ser observado na construção da sua sede, que foi desenvolvida dentro dos conceitos de Green Building, na prestação de serviços de limpeza, por exemplo, que adota produtos biodegradáveis, bem como na prestação dos serviços de segurança com uso de frota nova, carros com até 18 meses de uso e rígido padrão de manutenção, visando reduzir a emissão de gás carbônico.</p>
                          <p>Além disso, a empresa adota uma série de  ações como:</p>
                          <ul>
                            <li>Reciclagem de papel, pilhas/baterias, plástico com lixeiras e  coletores apropriadas</li>
                            <li>Lixeiras de coleta seletiva</li>
                            <li>Doação de equipamentos eletrônicos em desuso</li>
                            <li>Frota renovada a cada 18 meses e com um departamento voltado somente para manutenção preventiva e corretiva dos veículos, Veículos novos e com revisão em dia – reduzindo a emissão de gases poluentes ao meio ambiente</li>
                          </ul>
                                <p></p>
                                <figure>
                                    <img src="images/meio-amb.jpg" width="100%" height="100%" alt="meio ambiente">
                                </figure>'
        ]);

        DB::table('texts')->insert([
            'id' => 80,
            'name' => 'Texto do Box 2 da Página RH',
            'description' => 'Texto do Box 2 da Página RH',
            'title' => 'Práticas Trabalhistas e Direitos Humanos',
            'subtitle' => NULL,
            'content' => '<p>O <strong>Grupo Pro Security</strong> acredita nas boas práticas das relações trabalhistas, respeita a legislação brasileira e as convenções coletivas de trabalhos dos sindicatos das categorias envolvidas.</p>
                          <p>Todos os profissionais possuem igualdade de possibilidades respeitando a individualidade, qualificações, aptidões e conhecimento técnico. É prioritário promovermos o trabalho incentivando o crescimento pessoal e profissional de cada colaborador, bem como zelar por sua segurança, prevenindo riscos.</p>
                          <p>Disponibilizamos:</p>
                          <ul>
                            <li>Plano de Carreira</li>
                            <li>Serviço de Atendimento ao Funcionário</li>
                            <li>Seguro de Vida</li>
                            <li>Empréstimo Consignado</li>
                            <li>PROVE (Projeto de Vantagens Especiais) é um Projeto elaborado pelo Grupo Pro Security que visa firmar parcerias com empresas idôneas e conseguirmos descontos em produtos e serviços para nossos colaboradores.
                               <ul>
                                    <li>Óticas</li>
                                    <li>Universidades</li>
                                    <li>Escolas de idiomas e informática</li>
                                    <li>Comércios</li>
                                    <li>Auto Escola</li>
                                    <li>Senac</li>
                                    <li>Drogarias</li>
                                    <li>Academias de ginastica</li>
                               </ul>
                            </li>
                            <li>Parceiros:
                                <ul>
                                    <li>Assistência Odontológica Opcional</li>
                                    <li>Convênio Medico</li>
                                    <li>TICKET - Vale Refeição</li>
                                    <li>TICKET - Cesta Básica</li>
                                    <li>Convenio Farmácia</li>
                                    <li>MGP – Saude Ocupacional</li>
                                </ul>
                            </li>
                        </ul>'
        ]);

        DB::table('texts')->insert([
            'id' => 81,
            'name' => 'Texto do Box 3 da Página RH',
            'description' => 'Texto do Box 3 da Página RH',
            'title' => 'Treinamento',
            'subtitle' => NULL,
            'content' => '<p>Todos os colaboradores do <strong>Grupo Pro Security</strong>, na admissão,  passam por um treinamento de 15 horas especifico para cada função. Além disso, possuem uma meta semestral de treinamento que devem cumprir, cujo acompanhamento é realizado pelo departamento de Recursos Humanos e pela equipe de Supervisão Operacional.</p>
                                <p>O treinamento no <strong>Grupo Pro Security</strong> funciona como uma universidade aberta, são disponibilizados cerca de 25 módulos diferentes todo mês, de um total de 40 opções existentes. Estes módulos, oferecidos em diferentes dias e horários, inclusive à noite e finais de semana, são organizados em cursos, com carga horária final entre 20 e 30 horas-aula, que possibilitam não só o desenvolvimento profissional dos colaboradores, bem como oportunidades de crescimento de carreira e promoções, pois estes ão exigidos nestes processos.</p>
                                <p>Os módulos abrangem habilidades específicas (atendimento em portaria, controle de acesso, prevenção e combate a incêndios, limpeza profissional), habilidades organizacionais (segurança e atendimento, trabalho em equipe, atendimento telefônico) e conhecimentos relacionados ao cargo (liderança, zeladoria, administração do tempo).
                                Além disto, temos um programa específico de desenvolvimento de líderes e zeladores operacionais, focado na qualidade do atendimento e na gestão de pessoas.</p>
                                <p>Todos os colaboradores recebem o informativo PROfissional mensalmente, estendendo o conhecimento à distancia<strong>PRO SECURITY</strong>, sobre postura, procedimentos, atenção e dicas de segurança para o dia à dia da operação.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 82,
            'name' => 'Texto do Box 4 da Página RH',
            'description' => 'Texto do Box 4 da Página RH',
            'title' => 'Práticas Comerciais Justas',
            'subtitle' => NULL,
            'content' => '<p>No <strong>Grupo Pro Security</strong>, adotamos práticas comerciais transparentes  seguindo os tópicos abaixo:</p>
                                <ul>
                                    <li>Preços e prazos de pagamento justo e competitivos</li>
                                    <li>Gerar lucro aos acionistas</li>
                                    <li>Sempre oferecer soluções tecnológicas, visando otimizar os custos de nosso cliente;</li>
                                    <li>Executar a gestão comercial do contrato junto ao cliente</li>
                                    <li>Fornecer os documentos necessários sempre que solicitado pelo cliente</li>
                                    <li>Estar constantemente aberto a negociações</li>
                                    <li>Equipe comercial treinada e preparada com foco no atendimento ao cliente</li>
                                </ul>'
        ]);

        DB::table('texts')->insert([
            'id' => 83,
            'name' => 'Texto do Box 5 da Página RH',
            'description' => 'Texto do Box 5 da Página RH',
            'title' => 'Compras Sustentáveis',
            'subtitle' => NULL,
            'content' => '<p>O <strong>Grupo Pro Security</strong> foca suas ações no uso eficiente de recursos, evitando o desperdício e integrando aspectos ambientais em todas as fases dos processos de compra.</p>
                                <p>Um conjunto de regras rege o processo de compras visando, a cada dia, apromirar nossas práticas.</p>
                                <ul>
                                    <li>Diminuir a utilização de recursos naturais</li>
                                    <li>Restringir a utilização de materiais perigosos ou tóxicos</li>
                                    <li>Priorizar produtos de maior vida útil</li>
                                    <li>Incentivar da reutilização ou reciclagem de materiais</li>
                                    <li>Diminuir a geração de resíduos</li>
                                </ul>
                                <p>Desde a suam concepção a sede do Grupo Pro Security foi projetada para obter maior aproveitamento da luz natural, além de prever infraestrutura aparente e acabamento em concreto (menos gesso, tinta e resíduos causados pela obra)visando melhor desempenho e menor impacto ambiental.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 84,
            'name' => 'Texto do Título da Página Fale Conosco',
            'description' => 'Texto do Título da Página Fale Conosco',
            'title' => 'Fale Conosco',
            'subtitle' => NULL,
            'content' => '<p>O canal <strong>Fale Conosco </strong> está disponível para ajudar cliente e parceiros em qualquer ocasião e também, nas mais diversas necessidades. Caso tenha alguma dúvida, sugestão ou crítica a fazer, entre em contato através de um de nossos canais abaixo:</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 85,
            'name' => 'Texto Introdutório da Página SAC',
            'description' => 'Texto Introdutório da Página SAC',
            'title' => 'SAC',
            'subtitle' => "Bem-vindo ao Serviço de Atendimento ao Cliente do Grupo Pro Security!",
            'content' => '<p>Se você tem alguma dúvida, sugestão ou crítica a fazer, entre em contato pelo telefone (11) 3512-8100 em horário comercial ou pelo e-mail através do formulário abaixo. A sua opinião é fundamental para nortear nossas ações.

                            <p>Em caso de urgência, entrar em contato com a CENTRAL PRO SECURITY 24H pelo telefone (11) 3512-8118.</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 86,
            'name' => 'Texto do Título da Página Trabalhe Conosco',
            'description' => 'Texto do Título da Página Trabalhe Conosco',
            'title' => 'Trabalhe Conosco',
            'subtitle' => NULL,
            'content' => '<p>O Grupo Pro Security oferece aos colaboradores a possibilidade de crescimento profissional e pessoal em um ambiente dinâmico e participativo</p>
                          <p>Se você tem interesse em fazer parte da equipe Pro Security, envie seu currículo através do email abaixo e conte-nos sobre a sua experiência profissional.</p>
                          <div  style="height: 480px; text-align: center; font-weight: bolder; font-style: italic; text-decoration: underline; font-size: 18px;" >
                            <a href="mailto:curriculo@prosecurity.com.br?subject="Site Pro Security - Trabalhe Conosco">curriculo@prosecurity.com.br</a>
                          </div>'
        ]);

        DB::table('texts')->insert([
            'id' => 87,
            'name' => 'Texto do Título da Página Cadastro de Fornecedores',
            'description' => 'Texto do Título da Página Cadastro de Fornecedores',
            'title' => 'Trabalhe Conosco',
            'subtitle' => 'Para se tornar um fornecedor da Pro Security, realize o seu cadastro por meio do formulário abaixo:',
            'content' => NULL
        ]);

        DB::table('texts')->insert([
            'id' => 88,
            'name' => 'Texto do Título da Página Endereços e Telefones',
            'description' => 'Texto do Título da Página Endereços e Telefones',
            'title' => 'Endereços e Telefones',
            'subtitle' => NULL,
            'content' => NULL
        ]);

        DB::table('texts')->insert([
            'id' => 89,
            'name' => 'Texto do Box 1 da Página Endereços e Telefones',
            'description' => 'Texto do Box 1 da Página Endereços e Telefones',
            'title' => 'Endereço',
            'subtitle' => NULL,
            'content' => '<p>Avenida General Cavalcanti de Albuquerque, 75 – Morumbi<br>
                            São Paulo – SP<br>
                            CEP 05638-010</p>'
        ]);

        DB::table('texts')->insert([
            'id' => 90,
            'name' => 'Texto do Box 2 da Página Endereços e Telefones',
            'description' => 'Texto do Box 2 da Página Endereços e Telefones',
            'title' => 'Telefones',
            'subtitle' => NULL,
            'content' => '<p>PABX: (11) 3512-8100<br>
                            Central 24 Horas: (11) 3512-8118</p>'

        ]);

        DB::table('texts')->insert([
            'id' => 91,
            'name' => 'Texto do Box 3 da Página Endereços e Telefones',
            'description' => 'Texto do Box 3 da Página Endereços e Telefones',
            'title' => 'Contato Rápido',
            'subtitle' => NULL,
            'content' => '<p>Central 24 Horas: (11) 3512-8118<br>
                            Departamento Pessoal: (11) 3512-8161</p><br>'
        ]);

        DB::table('texts')->insert([
            'id' => 92,
            'name' => 'Texto do Título da Página Proposta',
            'description' => 'Texto do Título da Página Proposta',
            'title' => 'Solicite uma Proposta',
            'subtitle' => 'Informe os seus dados e descreva as suas necessidades.',
            'content' => '<p>Entre em contato com a Área Comercial do Grupo Pro Security, disponível de 2ª a 6ª feira, das 08h00 às 18h00, pelo telefone (11) 3512-8100 ou através do e-mail, utilizando o formulário abaixo, e receba informações ou esclareça dúvidas sobre todos os nossos serviços.</p>
                            <p>Teremos grande satisfação em atendê-lo.</p>'
        ]);
    }
}
