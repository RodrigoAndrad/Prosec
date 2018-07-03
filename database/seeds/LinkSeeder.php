<?php

use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('links')->insert([
            'id' => 1,
            'name' => 'Link do Banner 1 da Homepage',
            'description' => 'Link do Banner 1 da Homepage',
            'text' => 'Link do Banner 1 da Homepage',
            'url' => 'Link do Banner 1 da Homepage',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 2,
            'name' => 'Link do Banner 2 da Homepage',
            'description' => 'Link do Banner 2 da Homepage',
            'text' => 'Link do Banner 2 da Homepage',
            'url' => 'Link do Banner 2 da Homepage',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 3,
            'name' => 'Link do Banner 3 da Homepage',
            'description' => 'Link do Banner 3 da Homepage',
            'text' => 'Link do Banner 3 da Homepage',
            'url' => 'Link do Banner 3 da Homepage',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 4,
            'name' => 'Serviços',
            'description' => 'Link para a página de serviços do Website da Prosecurity.',
            'text' => 'Serviços',
            'url' => 'servicos.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 5,
            'name' => 'Intelligent Service',
            'description' => 'Link para a página do Website da Intelligent Service.',
            'text' => 'Intelligent Service',
            'url' => 'http://www.intelligentservice.com.br',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 6,
            'name' => 'Vigilância Patrimonial',
            'description' => 'Link para a página do serviço de Vigilância Patrimonial da Prosecurity.',
            'text' => 'Vigilância Patrimonial',
            'url' => 'vig-patrimonial.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 7,
            'name' => 'Áreas de atuação',
            'description' => 'Link para a página de Áreas de Atuação da Prosecurity.',
            'text' => 'Áreas De Atuação',
            'url' => 'atuacao.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 8,
            'name' => 'Fale Conosco',
            'description' => 'Link para a página de contato da Prosecurity.',
            'text' => 'Fale Conosco',
            'url' => 'fale-conosco.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 9,
            'name' => 'Solicite uma proposta',
            'description' => 'Link para a página de solicitação de proposta comercial da Prosecurity.',
            'text' => 'Solicite Uma Proposta',
            'url' => 'proposta.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        
        DB::table('links')->insert([
            'id' => 10,
            'name' => 'Roubo e furto de celular: Saiba como evitar',
            'description' => 'Link para a noticia.','text' => 'Solicite Uma Proposta',
            'text' => 'Saiba mais',
            'url' => 'http://prosecurity.com.br/pronews/roubo-e-furto-de-celular/',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);
        
        DB::table('links')->insert([
            'id' => 11,
            'name' => 'Sistema de monitoramento da empresa: Interno ou Externo?',
            'description' => 'Link para a noticia.',
            'text' => 'Saiba mais',
            'url' => 'http://prosecurity.com.br/pronews/roubo-e-furto-de-celular/',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);
        
        DB::table('links')->insert([
            'id' => 12,
            'name' => 'CFTV: Entenda tudo o que e necessario, antes de contratar',
            'description' => 'Link para a noticia.',
            'text' => 'Saiba mais',
            'url' => 'http://prosecurity.com.br/pronews/roubo-e-furto-de-celular/',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 13,
            'name' => 'Video 1 da Homepage',
            'description' => 'Video Apresentação da Prosecurity',
            'text' => 'Saiba mais',
            'url' => 'https://www.youtube.com/embed/j09zBxqGjMo?list=PLdlfJldFC1fRyE8y7BxmHTNhoWhIbdZCE',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 14,
            'name' => 'Video 1 da Homepage',
            'description' => 'Video Condomínio da Prosecurity',
            'text' => 'Saiba mais',
            'url' => 'https://www.youtube.com/embed/videoseries?list=PLdlfJldFC1fRK0AicP7YTllmNPB-_ZlDf',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 15,
            'name' => 'PDF do Pro Control',
            'description' => 'PDF do Pro Control',
            'text' => 'Clique Aqui!',
            'url' => 'http://prosecurity.com.br/tutorial-pro-control/procontrol.pdf',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 16,
            'name' => 'PDF do Pro Control',
            'description' => 'PDF do Pro Control',
            'text' => 'Clique Aqui!',
            'url' => 'http://prosecurity.com.br/tutorial-pro-control/procontrol.pdf',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('links')->insert([
            'id' => 17,
            'name' => 'Link 1 da Página do Grupo',
            'description' => 'Link 1 da Página do Grupo',
            'text' => 'Conheça',
            'url' => 'conheca.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 18,
            'name' => 'Link 2 da Página do Grupo',
            'description' => 'Link 2 da Página do Grupo',
            'text' => 'Responsabilidade Social',
            'url' => 'resp-social.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 19,
            'name' => 'Link 3 da Página do Grupo',
            'description' => 'Link 3 da Página do Grupo',
            'text' => 'Pro Ação Criança',
            'url' => 'pro-acao.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 20,
            'name' => 'Link 4 da Página do Grupo',
            'description' => 'Link 4 da Página do Grupo',
            'text' => 'Nossos Clientes',
            'url' => 'clientes.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 21,
            'name' => 'Link 5 da Página do Grupo',
            'description' => 'Link 5 da Página do Grupo',
            'text' => 'Política de RH',
            'url' => 'rh.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 22,
            'name' => 'Link 6 da Página do Grupo',
            'description' => 'Link 6 da Página do Grupo',
            'text' => 'Últimas Notícias',
            'url' => 'http://prosecurity.com.br/pronews/',
            'target' => '_blank',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 23,
            'name' => 'Link 1 da Página Fale Conosco',
            'description' => 'Link 1 da Página Fale Conosco',
            'text' => 'Solicite uma Proposta',
            'url' => 'proposta.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 24,
            'name' => 'Link 2 da Página Fale Conosco',
            'description' => 'Link 2 da Página Fale Conosco',
            'text' => 'SAC',
            'url' => 'sac.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 25,
            'name' => 'Link 3 da Página Fale Conosco',
            'description' => 'Link 3 da Página Fale Conosco',
            'text' => 'Trabalhe Conosco',
            'url' => 'trabalhe-conosco.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 26,
            'name' => 'Link 4 da Página Fale Conosco',
            'description' => 'Link 4 da Página Fale Conosco',
            'text' => 'Cadastro de Fornecedores',
            'url' => 'fornecedores.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
        DB::table('links')->insert([
            'id' => 27,
            'name' => 'Link 5 da Página Fale Conosco',
            'description' => 'Link 5 da Página Fale Conosco',
            'text' => 'Endereços e Telefones',
            'url' => 'contatos.html',
            'target' => '_top',
            'priority' => 1,
            'order' => 1,
        ]);
    }

}
