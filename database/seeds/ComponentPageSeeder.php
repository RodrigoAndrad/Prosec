<?php

use Illuminate\Database\Seeder;

class ComponentPageSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('component_page')->insert([
            'id' => 1,
            'page_id' => 1,
            'component_id' => 1,
            'description' => 'Banner Rotativo da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 2,
            'page_id' => 1,
            'component_id' => 2,
            'description' => 'Box da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 3,
            'page_id' => 1,
            'component_id' => 3,
            'description' => 'Destaque da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 4,
            'page_id' => 1,
            'component_id' => 4,
            'description' => 'Últimas notícias da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 5,
            'page_id' => 1,
            'component_id' => 5,
            'description' => 'Últimas notícias da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 6,
            'page_id' => 1,
            'component_id' => 6,
            'description' => 'Videos da Homepage',
        ]);

        DB::table('component_page')->insert([
            'id' => 7,
            'page_id' => 2,
            'component_id' => 7,
            'description' => 'Banner da Página de Serviço',
        ]);

        DB::table('component_page')->insert([
            'id' => 8,
            'page_id' => 2,
            'component_id' => 8,
            'description' => 'Box da Página de Serviço',
        ]);

        DB::table('component_page')->insert([
            'id' => 9,
            'page_id' => 3,
            'component_id' => 9,
            'description' => 'Banner da Página de Vigilância Patrimonial',
        ]);

        DB::table('component_page')->insert([
            'id' => 10,
            'page_id' => 3,
            'component_id' => 10,
            'description' => 'Box da Página de Vigilância Patrimonial',
        ]);

        DB::table('component_page')->insert([
            'id' => 11,
            'page_id' => 4,
            'component_id' => 11,
            'description' => 'Banner da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('component_page')->insert([
            'id' => 12,
            'page_id' => 4,
            'component_id' => 12,
            'description' => 'Box da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('component_page')->insert([
            'id' => 13,
            'page_id' => 5,
            'component_id' => 13,
            'description' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('component_page')->insert([
            'id' => 14,
            'page_id' => 5,
            'component_id' => 14,
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('component_page')->insert([
            'id' => 15,
            'page_id' => 6,
            'component_id' => 15,
            'description' => 'Banner de Destaque da Página de Segurança Eletrônica',
        ]);

        DB::table('component_page')->insert([
            'id' => 16,
            'page_id' => 6,
            'component_id' => 16,
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
        ]);

        DB::table('component_page')->insert([
            'id' => 17,
            'page_id' => 6,
            'component_id' => 17,
            'description' => 'Box da Página de Segurança Eletrônica',
        ]);

        DB::table('component_page')->insert([
            'id' => 18,
            'page_id' => 7,
            'component_id' => 18,
            'description' => 'Banner de Destaque da Página de Monitoramento 24h',
        ]);
        
        DB::table('component_page')->insert([
            'id' => 19,
            'page_id' => 7,
            'component_id' => 19,
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
        ]);

        DB::table('component_page')->insert([
            'id' => 20,
            'page_id' => 7,
            'component_id' => 20,
            'description' => 'Box  da Página de Monitoramento 24h',
        ]);

        DB::table('component_page')->insert([
            'id' => 21,
            'page_id' => 8,
            'component_id' => 21,
            'description' => 'Banner de Destaque da Página de Pro Control',
        ]);
        
        DB::table('component_page')->insert([
            'id' => 22,
            'page_id' => 8,
            'component_id' => 22,
            'description' => 'Texto Introdutório da Página de Pro Control',
        ]);

        DB::table('component_page')->insert([
            'id' => 23,
            'page_id' => 8,
            'component_id' => 23,
            'description' => 'Box da Página de Pro Control',
        ]);

        DB::table('component_page')->insert([
            'id' => 24,
            'page_id' => 8,
            'component_id' => 24,
            'description' => 'Link da Página de Pro Control',
        ]);


        DB::table('component_page')->insert([
            'id' => 25,
            'page_id' => 9,
            'component_id' => 25,
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
        ]);

        DB::table('component_page')->insert([
            'id' => 26,
            'page_id' => 9,
            'component_id' => 26,
            'description' => 'Box da Página de Limpeza e Conservaçãol',
        ]);

        DB::table('component_page')->insert([
            'id' => 27,
            'page_id' => 10,
            'component_id' => 27,
            'description' => 'Banner de Destaque da Página de Serviços Gerais',
        ]);
        
        DB::table('component_page')->insert([
            'id' => 28,
            'page_id' => 10,
            'component_id' => 28,
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
        ]);

        DB::table('component_page')->insert([
            'id' => 29,
            'page_id' => 10,
            'component_id' => 29,
            'description' => 'Box da Página de Serviços Gerais',
        ]);

        DB::table('component_page')->insert([
            'id' => 30,
            'page_id' => 11,
            'component_id' => 30,
            'description' => 'Banner de Destaque da Página de Áreas de Atuação',
        ]);
        
        DB::table('component_page')->insert([
            'id' => 31,
            'page_id' => 11,
            'component_id' => 31,
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
        ]);

        DB::table('component_page')->insert([
            'id' => 32,
            'page_id' => 11,
            'component_id' => 32,
            'description' => 'Box da Página de Áreas de Atuação',
        ]);

        DB::table('component_page')->insert([
            'id' => 33,
            'page_id' => 12,
            'component_id' => 33,
            'description' => 'Banner de Destaque da Página do Grupo',
        ]);
        
        DB::table('component_page')->insert([
            'id' => 34,
            'page_id' => 12,
            'component_id' => 34,
            'description' => 'Texto Introdutório da Página do Grupo',
        ]);

        DB::table('component_page')->insert([
            'id' => 35,
            'page_id' => 12,
            'component_id' => 35,
            'description' => 'Links da Página do Grupo',
        ]);

        DB::table('component_page')->insert([
            'id' => 36,
            'page_id' => 13,
            'component_id' => 36,
            'description' => 'Banner de Destaque da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 37,
            'page_id' => 13,
            'component_id' => 37,
            'description' => 'Título da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 38,
            'page_id' => 13,
            'component_id' => 38,
            'description' => 'Box 1 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 39,
            'page_id' => 13,
            'component_id' => 39,
            'description' => 'Box 2 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 40,
            'page_id' => 13,
            'component_id' => 40,
            'description' => 'Título do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 41,
            'page_id' => 13,
            'component_id' => 41,
            'description' => 'Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_page')->insert([
            'id' => 42,
            'page_id' => 14,
            'component_id' => 42,
            'description' => 'Banner da Página Responsabilidade Social',
        ]);

        DB::table('component_page')->insert([
            'id' => 43,
            'page_id' => 14,
            'component_id' => 43,
            'description' => 'Texto Introdutório da Página Responsabilidade Social',
        ]);

        DB::table('component_page')->insert([
            'id' => 44,
            'page_id' => 14,
            'component_id' => 44,
            'description' => 'Box da Página Responsabilidade Social',
        ]);

        DB::table('component_page')->insert([
            'id' => 45,
            'page_id' => 15,
            'component_id' => 45,
            'description' => 'Banner da Página Pro Ação Criança',
        ]);

        DB::table('component_page')->insert([
            'id' => 46,
            'page_id' => 15,
            'component_id' => 46,
            'description' => 'Texto Introdutório da Página Pro Ação Criança',
        ]);

        DB::table('component_page')->insert([
            'id' => 47,
            'page_id' => 15,
            'component_id' => 47,
            'description' => 'Box da Página Pro Ação Criança',
        ]);

        DB::table('component_page')->insert([
            'id' => 48,
            'page_id' => 15,
            'component_id' => 48,
            'description' => 'Carrossel de Fotos da Página Pro Ação Criança',
        ]);

        DB::table('component_page')->insert([
            'id' => 49,
            'page_id' => 16,
            'component_id' => 49,
            'description' => 'Banner da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_page')->insert([
            'id' => 50,
            'page_id' => 16,
            'component_id' => 50,
            'description' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_page')->insert([
            'id' => 51,
            'page_id' => 16,
            'component_id' => 51,
            'description' => 'Box da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_page')->insert([
            'id' => 52,
            'page_id' => 17,
            'component_id' => 52,
            'description' => 'Banner da Página Clientes',
        ]);

        DB::table('component_page')->insert([
            'id' => 53,
            'page_id' => 17,
            'component_id' => 53,
            'description' => 'Texto Introdutório da Página Clientes',
        ]);

        DB::table('component_page')->insert([
            'id' => 54,
            'page_id' => 17,
            'component_id' => 54,
            'description' => 'Box da Página Clientes',
        ]);

        DB::table('component_page')->insert([
            'id' => 55,
            'page_id' => 18,
            'component_id' => 55,
            'description' => 'Banner da Página RH',
        ]);

        DB::table('component_page')->insert([
            'id' => 56,
            'page_id' => 18,
            'component_id' => 56,
            'description' => 'Texto Introdutório da Página RH',
        ]);

        DB::table('component_page')->insert([
            'id' => 57,
            'page_id' => 18,
            'component_id' => 57,
            'description' => 'Box da Página RH',
        ]);

        DB::table('component_page')->insert([
            'id' => 58,
            'page_id' => 19,
            'component_id' => 58,
            'description' => 'Banner da Página Fale Conosco',
        ]);

        DB::table('component_page')->insert([
            'id' => 59,
            'page_id' => 19,
            'component_id' => 59,
            'description' => 'Texto Introdutório da Página Fale Conosco',
        ]);

        DB::table('component_page')->insert([
            'id' => 60,
            'page_id' => 19,
            'component_id' => 60,
            'description' => 'Links da Página Fale Conosco',
        ]);

        DB::table('component_page')->insert([
            'id' => 61,
            'page_id' => 20,
            'component_id' => 61,
            'description' => 'Banner da Página SAC',
        ]);

        DB::table('component_page')->insert([
            'id' => 62,
            'page_id' => 20,
            'component_id' => 62,
            'description' => 'Texto Introdutório da Página SAC',
        ]);

        DB::table('component_page')->insert([
            'id' => 63,
            'page_id' => 21,
            'component_id' => 63,
            'description' => 'Banner da Página Trabalhe Conosco',
        ]);

        DB::table('component_page')->insert([
            'id' => 64,
            'page_id' => 21,
            'component_id' => 64,
            'description' => 'Texto Introdutório da Página Trabalhe Conosco',
        ]);

        DB::table('component_page')->insert([
            'id' => 65,
            'page_id' => 22,
            'component_id' => 65,
            'description' => 'Banner da Página Cadastro de Fornecedores',
        ]);

        DB::table('component_page')->insert([
            'id' => 66,
            'page_id' => 22,
            'component_id' => 66,
            'description' => 'Texto Introdutório da Página Cadastro de Fornecedores',
        ]);

        DB::table('component_page')->insert([
            'id' => 67,
            'page_id' => 23,
            'component_id' => 67,
            'description' => 'Banner da Página Endereços e Telefones',
        ]);

        DB::table('component_page')->insert([
            'id' => 68,
            'page_id' => 23,
            'component_id' => 68,
            'description' => 'Texto Introdutório da Página Endereços e Telefones',
        ]);

        DB::table('component_page')->insert([
            'id' => 69,
            'page_id' => 23,
            'component_id' => 69,
            'description' => 'Imagem do Texto Introdutório da Página Endereços e Telefones',
        ]);

        DB::table('component_page')->insert([
            'id' => 70,
            'page_id' => 23,
            'component_id' => 70,
            'description' => 'Box da Página Endereços e Telefones',
        ]);

        DB::table('component_page')->insert([
            'id' => 71,
            'page_id' => 24,
            'component_id' => 71,
            'description' => 'Banner da Página Proposta',
        ]);

        DB::table('component_page')->insert([
            'id' => 72,
            'page_id' => 24,
            'component_id' => 72,
            'description' => 'Texto Introdutório da Página Proposta',
        ]);
    }
}


