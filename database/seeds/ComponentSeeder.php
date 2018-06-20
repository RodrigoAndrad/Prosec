<?php

use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('components')->insert([
            'id' => 1,
            'name' => 'Banner da Homepage',
            'description' => 'Banner Rotativo da Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 2,
            'name' => 'Box da Homepage',
            'description' => 'Box de navegação em destaque na Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 3,
            'name' => 'Destaque da Homepage',
            'description' => 'Imagem ou video em destaque na Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 4,
            'name' => 'Notícias da Homepage',
            'description' => 'Últimas notícias da Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 5,
            'name' => 'Indicadores da Homepage',
            'description' => 'Indicadores da Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 6,
            'name' => 'Videos da Homepage',
            'description' => 'Videos da Homepage',
        ]);

        DB::table('components')->insert([
            'id' => 7,
            'name' => 'Banner da Página de Serviços',
            'description' => 'Banner da Página de Serviços',
        ]);

        DB::table('components')->insert([
            'id' => 8,
            'name' => 'Boxes da Página de Serviços',
            'description' => 'Boxes da Página de Serviços',
        ]);

        DB::table('components')->insert([
            'id' => 9,
            'name' => 'Banner da Página de Vigilância Patrimonial',
            'description' => 'Banner da Página de Vigilância Patrimonial',
        ]);

        DB::table('components')->insert([
            'id' => 10,
            'name' => 'Box da Página de Vigilância Patrimonial',
            'description' => 'Box da Página de Vigilância Patrimonial',
        ]);

        DB::table('components')->insert([
            'id' => 11,
            'name' => 'Banner da Página de Vigilância Pessoal e Escolta',
            'description' => 'Banner da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('components')->insert([
            'id' => 12,
            'name' => 'Box da Página de Vigilância Pessoal e Escolta',
            'description' => 'Box da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('components')->insert([
            'id' => 13,
            'name' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('components')->insert([
            'id' => 14,
            'name' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('components')->insert([
            'id' => 15,
            'name' => 'Banner da Página de Segurança Eletrônica',
            'description' => 'Banner da Página de Segurança Eletrônica',
        ]);

        DB::table('components')->insert([
            'id' => 16,
            'name' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
        ]);

        DB::table('components')->insert([
            'id' => 17,
            'name' => 'Box da Página de Segurança Eletrônica',
            'description' => 'Box da Página de Segurança Eletrônica',
        ]);

        DB::table('components')->insert([
            'id' => 18,
            'name' => 'Banner da Página de Monitoramento 24h',
            'description' => 'Banner da Página de Monitoramento 24h',
        ]);

        DB::table('components')->insert([
            'id' => 19,
            'name' => 'Texto Introdutório da Página de Monitoramento 24h',
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
        ]);

        DB::table('components')->insert([
            'id' => 20,
            'name' => 'Box da Página de Monitoramento 24h',
            'description' => 'Box da Página de Monitoramento 24h',
        ]);

         DB::table('components')->insert([
            'id' => 21,
            'name' => 'Banner de Destaque de Página de Pro Control',
            'description' => 'Banner de Destaque da Página de Pro Control',
        ]);
        
        DB::table('components')->insert([
            'id' => 22,
            'name' => 'Texto Introdutório da Página de Pro Control',
            'description' => 'Texto Introdutório da Página de Pro Control',
        ]);

        DB::table('components')->insert([
            'id' => 23,
            'name' => 'Banner de Destaque da Página de Pro Control',
            'description' => 'Banner de Destaque da Página de Pro Control',
        ]);

        DB::table('components')->insert([
            'id' => 24,
            'name' => 'Link da Página de Pro Control',
            'description' => 'Link da Página de Pro Control',
        ]);

        DB::table('components')->insert([
            'id' => 25,
            'name' => 'Banner de Destaque da Página de Limpeza e Conservação',
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
        ]);

        DB::table('components')->insert([
            'id' => 26,
            'name' => 'Box da Página de Limpeza e Conservação',
            'description' => 'Box da Página de Limpeza e Conservaçãol',
        ]);

        DB::table('components')->insert([
            'id' => 27,
            'name' => 'Banner da Página de Limpeza e Conservação',
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
        ]);
        
        DB::table('components')->insert([
            'id' => 28,
            'name' => 'Texto Introdutório da Página de Serviços Gerais',
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
        ]);

        DB::table('components')->insert([
            'id' => 29,
            'name' => 'Box da Página de Serviços Gerais',
            'description' => 'Box da Página de Serviços Gerais',
        ]);

        DB::table('components')->insert([
            'id' => 30,
            'name' => 'Banner da Página de Áreas de Atuação',
            'description' => 'Banner de Destaque da Página de Áreas de Atuação',
        ]);
        
        DB::table('components')->insert([
            'id' => 31,
            'name' => 'Texto Introdutório da Página de Áreas de Atuação',
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
        ]);

        DB::table('components')->insert([
            'id' => 32,
            'name' => 'Box da Página de Áreas de Atuação',
            'description' => 'Box da Página de Áreas de Atuação',
        ]);

        DB::table('components')->insert([
            'id' => 33,
            'name' => 'Banner de Destaque da Página do Grupo',
            'description' => 'Banner de Destaque da Página do Grupo',
        ]);
        
        DB::table('components')->insert([
            'id' => 34,
            'name' => 'Texto Introdutório da Página do Grupo',
            'description' => 'Texto Introdutório da Página do Grupo',
        ]);

        DB::table('components')->insert([
            'id' => 35,
            'name' => 'Links da Página do Grupo',
            'description' => 'Links da Página do Grupo',
        ]);

        DB::table('components')->insert([
            'id' => 36,
            'name' => 'Banner de Destaque da Página Conheça o Grupo Pro Security',
            'description' => 'Banner de Destaque da Página Conheça o Grupo Pro Security',
        ]);
        
        DB::table('components')->insert([
            'id' => 37,
            'name' => 'Título da Página Conheça o Grupo Pro Security',
            'description' => 'Título da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('components')->insert([
            'id' => 38,
            'name' => 'Box 1 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 1 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('components')->insert([
            'id' => 39,
            'name' => 'Box 2 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 2 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('components')->insert([
            'id' => 40,
            'name' => 'Título do Box 3 da Página Conheça o Grupo Pro Security',
            'description' => 'Título do Box 3 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('components')->insert([
            'id' => 41,
            'name' => 'Box 3 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 3 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('components')->insert([
            'id' => 42,
            'name' => 'Banner da Página Responsabilidade Social',
            'description' => 'Banner da Página Responsabilidade Social',
        ]);

        DB::table('components')->insert([
            'id' => 43,
            'name' => 'Texto Introdutório da Página Responsabilidade Social',
            'description' => 'Texto Introdutório da Página Responsabilidade Social',
        ]);

        DB::table('components')->insert([
            'id' => 44,
            'name' => 'Box da Página Responsabilidade Social',
            'description' => 'Box da Página Responsabilidade Social',
        ]);

        DB::table('components')->insert([
            'id' => 45,
            'name' => 'Banner da Página Pro Ação Criança',
            'description' => 'Banner da Página Pro Ação Criança',
        ]);

        DB::table('components')->insert([
            'id' => 46,
            'name' => 'Texto Introdutório da Página Pro Ação Criança',
            'description' => 'Texto Introdutório da Página Pro Ação Criança',
        ]);

        DB::table('components')->insert([
            'id' => 47,
            'name' => 'Box da Página Pro Ação Criança',
            'description' => 'Box da Página Pro Ação Criança',
        ]);

        DB::table('components')->insert([
            'id' => 48,
            'name' => 'Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Carrossel de Fotos da Pro Ação Criança',
        ]);

        DB::table('components')->insert([
            'id' => 49,
            'name' => 'Banner da Página Pro Ação Criança Campanha',
            'description' => 'Banner da Página Pro Ação Criança Campanha',
        ]);

        DB::table('components')->insert([
            'id' => 50,
            'name' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
            'description' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
        ]);

        DB::table('components')->insert([
            'id' => 51,
            'name' => 'Box da Página Pro Ação Criança Campanha',
            'description' => 'Box da Página Pro Ação Criança Campanha',
        ]);

        DB::table('components')->insert([
            'id' => 52,
            'name' => 'Banner da Página Clientes',
            'description' => 'Banner da Página Clientes',
        ]);

        DB::table('components')->insert([
            'id' => 53,
            'name' => 'Texto Introdutório da Página Clientes',
            'description' => 'Texto Introdutório da Página Clientes',
        ]);

        DB::table('components')->insert([
            'id' => 54,
            'name' => 'Box da Página Clientes',
            'description' => 'Box da Página Clientes',
        ]);

        DB::table('components')->insert([
            'id' => 55,
            'name' => 'Banner da Página RH',
            'description' => 'Banner da Página RH',
        ]);

        DB::table('components')->insert([
            'id' => 56,
            'name' => 'Texto Introdutório da Página RH',
            'description' => 'Texto Introdutório da Página RH',
        ]);

        DB::table('components')->insert([
            'id' => 57,
            'name' => 'Box da Página RH',
            'description' => 'Box da Página RH',
        ]);

        DB::table('components')->insert([
            'id' => 58,
            'name' => 'Banner da Página Fale Conosco',
            'description' => 'Banner da Página Fale Conosco',
        ]);

        DB::table('components')->insert([
            'id' => 59,
            'name' => 'Texto Introdutório da Página Fale Conosco',
            'description' => 'Texto Introdutório da Página Fale Conosco',
        ]);

        DB::table('components')->insert([
            'id' => 60,
            'name' => 'Links da Página Fale Conosco',
            'description' => 'Links da Página Fale Conosco',
        ]);

        DB::table('components')->insert([
            'id' => 61,
            'name' => 'Banner da Página SAC',
            'description' => 'Banner da Página SAC',
        ]);

        DB::table('components')->insert([
            'id' => 62,
            'name' => 'Texto Introdutório da Página SAC',
            'description' => 'Texto Introdutório da Página SAC',
        ]);

        DB::table('components')->insert([
            'id' => 63,
            'name' => 'Banner da Página Trabalhe  Conosco',
            'description' => 'Banner da Página Trabalhe  Conosco',
        ]);

        DB::table('components')->insert([
            'id' => 64,
            'name' => 'Texto Introdutório da Página Trabalhe  Conosco',
            'description' => 'Texto Introdutório da Página Trabalhe  Conosco',
        ]);
        
        DB::table('components')->insert([
            'id' => 65,
            'name' => 'Banner da Página Cadastro de Fornecedores',
            'description' => 'Banner da Página Cadastro de Fornecedores',
        ]);

        DB::table('components')->insert([
            'id' => 66,
            'name' => 'Texto Introdutório da Página Cadastro de Fornecedores',
            'description' => 'Texto Introdutório da Página Cadastro de Fornecedores',
        ]);

        DB::table('components')->insert([
            'id' => 67,
            'name' => 'Banner da Página Endereços e Telefones',
            'description' => 'Banner da Página Endereços e Telefones',
        ]);

        DB::table('components')->insert([
            'id' => 68,
            'name' => 'Imagem do Texto Introdutório da Página Endereços e Telefones',
            'description' => 'Imagem do Texto Introdutório da Página Endereços e Telefones',
        ]);

        DB::table('components')->insert([
            'id' => 69,
            'name' => 'Texto Introdutório da Página Endereços e Telefones',
            'description' => 'Texto Introdutório da Página Endereços e Telefones',
        ]);

        DB::table('components')->insert([
            'id' => 70,
            'name' => 'Box da Página Endereços e Telefones',
            'description' => 'Box da Página Endereços e Telefones',
        ]);

        DB::table('components')->insert([
            'id' => 71,
            'name' => 'Banner da Página Solicite uma Proposta',
            'description' => 'Banner da Página Solicite uma Proposta',
        ]);

        DB::table('components')->insert([
            'id' => 72,
            'name' => 'Texto Introdutório da Página Solicite uma Proposta',
            'description' => 'Texto Introdutório da Página Solicite uma Proposta',
        ]);

    }
}
