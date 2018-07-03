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
            'priority' => 1,
            'order' => 1,
        ]);

        DB::table('components')->insert([
            'id' => 2,
            'name' => 'Box da Homepage',
            'description' => 'Box de navegação em destaque na Homepage',
            'priority' => 2,
            'order' => 2,
        ]);

        DB::table('components')->insert([
            'id' => 3,
            'name' => 'Destaque da Homepage',
            'description' => 'Imagem ou video em destaque na Homepage',
            'priority' => 3,
            'order' => 3,
        ]);

        DB::table('components')->insert([
            'id' => 4,
            'name' => 'Notícias da Homepage',
            'description' => 'Últimas notícias da Homepage',
            'priority' => 4,
            'order' => 4,
        ]);

        DB::table('components')->insert([
            'id' => 5,
            'name' => 'Indicadores da Homepage',
            'description' => 'Indicadores da Homepage',
            'priority' => 5,
            'order' => 5,
        ]);

        DB::table('components')->insert([
            'id' => 6,
            'name' => 'Videos da Homepage',
            'description' => 'Videos da Homepage',
            'priority' => 6,
            'order' => 6,
        ]);

        DB::table('components')->insert([
            'id' => 7,
            'name' => 'Banner da Página de Serviços',
            'description' => 'Banner da Página de Serviços',
            'priority' => 7,
            'order' => 7,
        ]);

        DB::table('components')->insert([
            'id' => 8,
            'name' => 'Boxes da Página de Serviços',
            'description' => 'Boxes da Página de Serviços',
            'priority' => 8,
            'order' => 8,
        ]);

        DB::table('components')->insert([
            'id' => 9,
            'name' => 'Banner da Página de Vigilância Patrimonial',
            'description' => 'Banner da Página de Vigilância Patrimonial',
            'priority' => 9,
            'order' => 9,
        ]);

        DB::table('components')->insert([
            'id' => 10,
            'name' => 'Box da Página de Vigilância Patrimonial',
            'description' => 'Box da Página de Vigilância Patrimonial',
            'priority' => 10,
            'order' => 10,
        ]);

        DB::table('components')->insert([
            'id' => 11,
            'name' => 'Banner da Página de Vigilância Pessoal e Escolta',
            'description' => 'Banner da Página de Vigilância Pessoal e Escolta',
            'priority' => 11,
            'order' => 11,
        ]);

        DB::table('components')->insert([
            'id' => 12,
            'name' => 'Box da Página de Vigilância Pessoal e Escolta',
            'description' => 'Box da Página de Vigilância Pessoal e Escolta',
            'priority' => 12,
            'order' => 12,
        ]);

        DB::table('components')->insert([
            'id' => 13,
            'name' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
            'priority' => 13,
            'order' => 13,
        ]);

        DB::table('components')->insert([
            'id' => 14,
            'name' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'priority' => 14,
            'order' => 14,
        ]);

        DB::table('components')->insert([
            'id' => 15,
            'name' => 'Banner da Página de Segurança Eletrônica',
            'description' => 'Banner da Página de Segurança Eletrônica',
            'priority' => 15,
            'order' => 15,
        ]);

        DB::table('components')->insert([
            'id' => 16,
            'name' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'priority' => 16,
            'order' => 16,
        ]);

        DB::table('components')->insert([
            'id' => 17,
            'name' => 'Box da Página de Segurança Eletrônica',
            'description' => 'Box da Página de Segurança Eletrônica',
            'priority' => 17,
            'order' => 17,
        ]);

        DB::table('components')->insert([
            'id' => 18,
            'name' => 'Banner da Página de Monitoramento 24h',
            'description' => 'Banner da Página de Monitoramento 24h',
            'priority' => 18,
            'order' => 18,
        ]);

        DB::table('components')->insert([
            'id' => 19,
            'name' => 'Texto Introdutório da Página de Monitoramento 24h',
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
            'priority' => 19,
            'order' => 19,
        ]);

        DB::table('components')->insert([
            'id' => 20,
            'name' => 'Box da Página de Monitoramento 24h',
            'description' => 'Box da Página de Monitoramento 24h',
            'priority' => 20,
            'order' => 20,
        ]);

         DB::table('components')->insert([
            'id' => 21,
            'name' => 'Banner de Destaque de Página de Pro Control',
            'description' => 'Banner de Destaque da Página de Pro Control',
            'priority' => 21,
            'order' => 21,
        ]);
        
        DB::table('components')->insert([
            'id' => 22,
            'name' => 'Texto Introdutório da Página de Pro Control',
            'description' => 'Texto Introdutório da Página de Pro Control',
            'priority' => 22,
            'order' => 22,
        ]);

        DB::table('components')->insert([
            'id' => 23,
            'name' => 'Banner de Destaque da Página de Pro Control',
            'description' => 'Banner de Destaque da Página de Pro Control',
            'priority' => 23,
            'order' => 23,
        ]);

        DB::table('components')->insert([
            'id' => 24,
            'name' => 'Link da Página de Pro Control',
            'description' => 'Link da Página de Pro Control',
            'priority' => 24,
            'order' => 24,
        ]);

        DB::table('components')->insert([
            'id' => 25,
            'name' => 'Banner de Destaque da Página de Limpeza e Conservação',
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
            'priority' => 25,
            'order' => 25,
        ]);

        DB::table('components')->insert([
            'id' => 26,
            'name' => 'Box da Página de Limpeza e Conservação',
            'description' => 'Box da Página de Limpeza e Conservaçãol',
            'priority' => 26,
            'order' => 26,
        ]);

        DB::table('components')->insert([
            'id' => 27,
            'name' => 'Banner da Página de Limpeza e Conservação',
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
            'priority' => 27,
            'order' => 27,
        ]);
        
        DB::table('components')->insert([
            'id' => 28,
            'name' => 'Texto Introdutório da Página de Serviços Gerais',
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
            'priority' => 28,
            'order' => 28,
        ]);

        DB::table('components')->insert([
            'id' => 29,
            'name' => 'Box da Página de Serviços Gerais',
            'description' => 'Box da Página de Serviços Gerais',
            'priority' => 29,
            'order' => 29,
        ]);

        DB::table('components')->insert([
            'id' => 30,
            'name' => 'Banner da Página de Áreas de Atuação',
            'description' => 'Banner de Destaque da Página de Áreas de Atuação',
            'priority' => 30,
            'order' => 30,
        ]);
        
        DB::table('components')->insert([
            'id' => 31,
            'name' => 'Texto Introdutório da Página de Áreas de Atuação',
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
            'priority' => 31,
            'order' => 31,
        ]);

        DB::table('components')->insert([
            'id' => 32,
            'name' => 'Box da Página de Áreas de Atuação',
            'description' => 'Box da Página de Áreas de Atuação',
            'priority' => 32,
            'order' => 32,
        ]);

        DB::table('components')->insert([
            'id' => 33,
            'name' => 'Banner de Destaque da Página do Grupo',
            'description' => 'Banner de Destaque da Página do Grupo',
            'priority' => 33,
            'order' => 33,
        ]);
        
        DB::table('components')->insert([
            'id' => 34,
            'name' => 'Texto Introdutório da Página do Grupo',
            'description' => 'Texto Introdutório da Página do Grupo',
            'priority' => 34,
            'order' => 34,
        ]);

        DB::table('components')->insert([
            'id' => 35,
            'name' => 'Links da Página do Grupo',
            'description' => 'Links da Página do Grupo',
            'priority' => 35,
            'order' => 35,
        ]);

        DB::table('components')->insert([
            'id' => 36,
            'name' => 'Banner de Destaque da Página Conheça o Grupo Pro Security',
            'description' => 'Banner de Destaque da Página Conheça o Grupo Pro Security',
            'priority' => 36,
            'order' => 36,
        ]);
        
        DB::table('components')->insert([
            'id' => 37,
            'name' => 'Título da Página Conheça o Grupo Pro Security',
            'description' => 'Título da Página Conheça o Grupo Pro Security',
            'priority' => 37,
            'order' => 37,
        ]);

        DB::table('components')->insert([
            'id' => 38,
            'name' => 'Box 1 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 1 da Página Conheça o Grupo Pro Security',
            'priority' => 38,
            'order' => 38,
        ]);

        DB::table('components')->insert([
            'id' => 39,
            'name' => 'Box 2 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 2 da Página Conheça o Grupo Pro Security',
            'priority' => 39,
            'order' => 39,
        ]);

        DB::table('components')->insert([
            'id' => 40,
            'name' => 'Título do Box 3 da Página Conheça o Grupo Pro Security',
            'description' => 'Título do Box 3 da Página Conheça o Grupo Pro Security',
            'priority' => 40,
            'order' => 40,
        ]);

        DB::table('components')->insert([
            'id' => 41,
            'name' => 'Box 3 da Página Conheça o Grupo Pro Security',
            'description' => 'Box 3 da Página Conheça o Grupo Pro Security',
            'priority' => 41,
            'order' => 41,
        ]);

        DB::table('components')->insert([
            'id' => 42,
            'name' => 'Banner da Página Responsabilidade Social',
            'description' => 'Banner da Página Responsabilidade Social',
            'priority' => 42,
            'order' => 42,
        ]);

        DB::table('components')->insert([
            'id' => 43,
            'name' => 'Texto Introdutório da Página Responsabilidade Social',
            'description' => 'Texto Introdutório da Página Responsabilidade Social',
            'priority' => 43,
            'order' => 43,
        ]);

        DB::table('components')->insert([
            'id' => 44,
            'name' => 'Box da Página Responsabilidade Social',
            'description' => 'Box da Página Responsabilidade Social',
            'priority' => 44,
            'order' => 44,
        ]);

        DB::table('components')->insert([
            'id' => 45,
            'name' => 'Banner da Página Pro Ação Criança',
            'description' => 'Banner da Página Pro Ação Criança',
            'priority' => 45,
            'order' => 45,
        ]);

        DB::table('components')->insert([
            'id' => 46,
            'name' => 'Texto Introdutório da Página Pro Ação Criança',
            'description' => 'Texto Introdutório da Página Pro Ação Criança',
            'priority' => 46,
            'order' => 46,
        ]);

        DB::table('components')->insert([
            'id' => 47,
            'name' => 'Box da Página Pro Ação Criança',
            'description' => 'Box da Página Pro Ação Criança',
            'priority' => 47,
            'order' => 47,
        ]);

        DB::table('components')->insert([
            'id' => 48,
            'name' => 'Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Carrossel de Fotos da Pro Ação Criança',
            'priority' => 48,
            'order' => 48,
        ]);

        DB::table('components')->insert([
            'id' => 49,
            'name' => 'Banner da Página Pro Ação Criança Campanha',
            'description' => 'Banner da Página Pro Ação Criança Campanha',
            'priority' => 49,
            'order' => 49,
        ]);

        DB::table('components')->insert([
            'id' => 50,
            'name' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
            'description' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
            'priority' => 50,
            'order' => 50,
        ]);

        DB::table('components')->insert([
            'id' => 51,
            'name' => 'Box da Página Pro Ação Criança Campanha',
            'description' => 'Box da Página Pro Ação Criança Campanha',
            'priority' => 51,
            'order' => 51,
        ]);

        DB::table('components')->insert([
            'id' => 52,
            'name' => 'Banner da Página Clientes',
            'description' => 'Banner da Página Clientes',
            'priority' => 52,
            'order' => 52,
        ]);

        DB::table('components')->insert([
            'id' => 53,
            'name' => 'Texto Introdutório da Página Clientes',
            'description' => 'Texto Introdutório da Página Clientes',
            'priority' => 53,
            'order' => 53,
        ]);

        DB::table('components')->insert([
            'id' => 54,
            'name' => 'Box da Página Clientes',
            'description' => 'Box da Página Clientes',
            'priority' => 54,
            'order' => 54,
        ]);

        DB::table('components')->insert([
            'id' => 55,
            'name' => 'Banner da Página RH',
            'description' => 'Banner da Página RH',
            'priority' => 55,
            'order' => 55,
        ]);

        DB::table('components')->insert([
            'id' => 56,
            'name' => 'Texto Introdutório da Página RH',
            'description' => 'Texto Introdutório da Página RH',
            'priority' => 56,
            'order' => 56,
        ]);

        DB::table('components')->insert([
            'id' => 57,
            'name' => 'Box da Página RH',
            'description' => 'Box da Página RH',
            'priority' => 57,
            'order' => 57,
        ]);

        DB::table('components')->insert([
            'id' => 58,
            'name' => 'Banner da Página Fale Conosco',
            'description' => 'Banner da Página Fale Conosco',
            'priority' => 58,
            'order' => 58,
        ]);

        DB::table('components')->insert([
            'id' => 59,
            'name' => 'Texto Introdutório da Página Fale Conosco',
            'description' => 'Texto Introdutório da Página Fale Conosco',
            'priority' => 59,
            'order' => 59,
        ]);

        DB::table('components')->insert([
            'id' => 60,
            'name' => 'Links da Página Fale Conosco',
            'description' => 'Links da Página Fale Conosco',
            'priority' => 60,
            'order' => 60,
        ]);

        DB::table('components')->insert([
            'id' => 61,
            'name' => 'Banner da Página SAC',
            'description' => 'Banner da Página SAC',
            'priority' => 61,
            'order' => 61,
        ]);

        DB::table('components')->insert([
            'id' => 62,
            'name' => 'Texto Introdutório da Página SAC',
            'description' => 'Texto Introdutório da Página SAC',
            'priority' => 62,
            'order' => 62,
        ]);

        DB::table('components')->insert([
            'id' => 63,
            'name' => 'Banner da Página Trabalhe  Conosco',
            'description' => 'Banner da Página Trabalhe  Conosco',
            'priority' => 63,
            'order' => 63,
        ]);

        DB::table('components')->insert([
            'id' => 64,
            'name' => 'Texto Introdutório da Página Trabalhe  Conosco',
            'description' => 'Texto Introdutório da Página Trabalhe  Conosco',
            'priority' => 64,
            'order' => 64,
        ]);
        
        DB::table('components')->insert([
            'id' => 65,
            'name' => 'Banner da Página Cadastro de Fornecedores',
            'description' => 'Banner da Página Cadastro de Fornecedores',
            'priority' => 65,
            'order' => 65,
        ]);

        DB::table('components')->insert([
            'id' => 66,
            'name' => 'Texto Introdutório da Página Cadastro de Fornecedores',
            'description' => 'Texto Introdutório da Página Cadastro de Fornecedores',
            'priority' => 66,
            'order' => 66,
        ]);

        DB::table('components')->insert([
            'id' => 67,
            'name' => 'Banner da Página Endereços e Telefones',
            'description' => 'Banner da Página Endereços e Telefones',
            'priority' => 67,
            'order' => 67,
        ]);

        DB::table('components')->insert([
            'id' => 68,
            'name' => 'Imagem do Texto Introdutório da Página Endereços e Telefones',
            'description' => 'Imagem do Texto Introdutório da Página Endereços e Telefones',
            'priority' => 68,
            'order' => 68,
        ]);

        DB::table('components')->insert([
            'id' => 69,
            'name' => 'Texto Introdutório da Página Endereços e Telefones',
            'description' => 'Texto Introdutório da Página Endereços e Telefones',
            'priority' => 69,
            'order' => 69,
        ]);

        DB::table('components')->insert([
            'id' => 70,
            'name' => 'Box da Página Endereços e Telefones',
            'description' => 'Box da Página Endereços e Telefones',
            'priority' => 70,
            'order' => 70,
        ]);

        DB::table('components')->insert([
            'id' => 71,
            'name' => 'Banner da Página Solicite uma Proposta',
            'description' => 'Banner da Página Solicite uma Proposta',
            'priority' => 71,
            'order' => 71,
        ]);

        DB::table('components')->insert([
            'id' => 72,
            'name' => 'Texto Introdutório da Página Solicite uma Proposta',
            'description' => 'Texto Introdutório da Página Solicite uma Proposta',
            'priority' => 72,
            'order' => 72,
        ]);

    }
}
