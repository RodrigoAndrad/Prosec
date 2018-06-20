<?php

use Illuminate\Database\Seeder;

class ElementTextSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('element_text')->insert([
            'id' => 1,
            'element_id' => 4,
            'text_id' => 1,
            'description' => 'Título do Box 1 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 2,
            'element_id' => 5,
            'text_id' => 2,
            'description' => 'Título do Box 2 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 3,
            'element_id' => 6,
            'text_id' => 3,
            'description' => 'Título do Box 3 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 4,
            'element_id' => 7,
            'text_id' => 4,
            'description' => 'Título do Box 4 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 5,
            'element_id' => 8,
            'text_id' => 5,
            'description' => 'Título do Box 5 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 6,
            'element_id' => 9,
            'text_id' => 6,
            'description' => 'Título do Box 6 da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 7,
            'element_id' => 11,
            'text_id' => 7,
            'description' => 'Post 1 das noticias da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 8,
            'element_id' => 12,
            'text_id' => 8,
            'description' => 'Post 2 das noticias da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 9,
            'element_id' => 13,
            'text_id' => 9,
            'description' => 'Post 3 das noticias da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 10,
            'element_id' => 14,
            'text_id' => 10,
            'description' => 'Indicador 1 da área de Indicadores da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 11,
            'element_id' => 15,
            'text_id' => 11,
            'description' => 'Indicador 2 da área de Indicadores da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 12,
            'element_id' => 16,
            'text_id' => 12,
            'description' => 'Indicador 3 da área de Indicadores da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 13,
            'element_id' => 17,
            'text_id' => 13,
            'description' => 'Indicador 4 da área de Indicadores da Homepage',
        ]);

        DB::table('element_text')->insert([
            'id' => 14,
            'element_id' => 21,
            'text_id' => 14,
            'description' => 'Box 1 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 15,
            'element_id' => 22,
            'text_id' => 15,
            'description' => 'Box 2 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 16,
            'element_id' => 23,
            'text_id' => 16,
            'description' => 'Box 3 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 17,
            'element_id' => 24,
            'text_id' => 17,
            'description' => 'Box 4 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 18,
            'element_id' => 25,
            'text_id' => 18,
            'description' => 'Box 5 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 19,
            'element_id' => 26,
            'text_id' => 19,
            'description' => 'Box 6 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 20,
            'element_id' => 27,
            'text_id' => 20,
            'description' => 'Box 7 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 21,
            'element_id' => 28,
            'text_id' => 21,
            'description' => 'Box 8 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 22,
            'element_id' => 29,
            'text_id' => 22,
            'description' => 'Box 9 da Página de Serviços',
        ]);

        DB::table('element_text')->insert([
            'id' => 23,
            'element_id' => 31,
            'text_id' => 23,
            'description' => 'Box da Página de Vigilância Vigilância Patrimonial',
        ]);

        DB::table('element_text')->insert([
            'id' => 24,
            'element_id' => 33,
            'text_id' => 24,
            'description' => 'Box da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('element_text')->insert([
            'id' => 25,
            'element_id' => 35,
            'text_id' => 25,
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('element_text')->insert([
            'id' => 26,
            'element_id' => 37,
            'text_id' => 26,
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
        ]);

        DB::table('element_text')->insert([
            'id' => 27,
            'element_id' => 38,
            'text_id' => 27,
            'description' => 'Box 1 da Página de Segurança Eletrônica',
        ]);

        DB::table('element_text')->insert([
            'id' => 28,
            'element_id' => 39,
            'text_id' => 28,
            'description' => 'Box 2 da Página de Segurança Eletrônica',
        ]);

        DB::table('element_text')->insert([
            'id' => 29,
            'element_id' => 40,
            'text_id' => 29,
            'description' => 'Box 3 da Página de Segurança Eletrônica',
        ]);

        DB::table('element_text')->insert([
            'id' => 30,
            'element_id' => 41,
            'text_id' => 30,
            'description' => 'Box 4 da Página de Segurança Eletrônica',
        ]);

         DB::table('element_text')->insert([
            'id' => 31,
            'element_id' => 43,
            'text_id' => 31,
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 32,
            'element_id' => 44,
            'text_id' => 32,
            'description' => 'Box 1 da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 33,
            'element_id' => 45,
            'text_id' => 33,
            'description' => 'Box 2 da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 34,
            'element_id' => 46,
            'text_id' => 34,
            'description' => 'Box 3 da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 35,
            'element_id' => 47,
            'text_id' => 35,
            'description' => 'Box 4 da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 36,
            'element_id' => 48,
            'text_id' => 36,
            'description' => 'Box 5 da Página de Monitoramento 24h',
        ]);

        DB::table('element_text')->insert([
            'id' => 37,
            'element_id' => 50,
            'text_id' => 37,
            'description' => 'Texto Introdutório da Página de Pro Control',
        ]);

        DB::table('element_text')->insert([
            'id' => 38,
            'element_id' => 51,
            'text_id' => 38,
            'description' => 'Box 1 da Página de Pro Control',
        ]);

        DB::table('element_text')->insert([
            'id' => 39,
            'element_id' => 52,
            'text_id' => 39,
            'description' => 'Box 2 da Página de Pro Control',
        ]);

        DB::table('element_text')->insert([
            'id' => 40,
            'element_id' => 53,
            'text_id' => 40,
            'description' => 'Box 3 da Página de Pro Control',
        ]);

        DB::table('element_text')->insert([
            'id' => 41,
            'element_id' => 56,
            'text_id' => 41,
            'description' => 'Box da Página de Limpeza e Conservação',
        ]);

        DB::table('element_text')->insert([
            'id' => 42,
            'element_id' => 58,
            'text_id' => 42,
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
        ]);

        DB::table('element_text')->insert([
            'id' => 43,
            'element_id' => 59,
            'text_id' => 43,
            'description' => 'Box 1 da Página de Serviços Gerais',
        ]);

        DB::table('element_text')->insert([
            'id' => 44,
            'element_id' => 60,
            'text_id' => 44,
            'description' => 'Box 2 da Página de Serviços Gerais',
        ]);

        DB::table('element_text')->insert([
            'id' => 45,
            'element_id' => 61,
            'text_id' => 45,
            'description' => 'Box 3 da Página de Serviços Gerais',
        ]);

        DB::table('element_text')->insert([
            'id' => 46,
            'element_id' => 62,
            'text_id' => 46,
            'description' => 'Box 4 da Página de Serviços Gerais',
        ]);

        DB::table('element_text')->insert([
            'id' => 47,
            'element_id' => 64,
            'text_id' => 47,
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
        ]);
        DB::table('element_text')->insert([
            'id' => 48,
            'element_id' => 65,
            'text_id' => 48,
            'description' => 'Box 1 da Página de Áreas de Atuação',
        ]);
        DB::table('element_text')->insert([
            'id' => 49,
            'element_id' => 66,
            'text_id' => 49,
            'description' => 'Box 2 da Página de Áreas de Atuação',
        ]);
        DB::table('element_text')->insert([
            'id' => 50,
            'element_id' => 67,
            'text_id' => 50,
            'description' => 'Box 3 da Página de Áreas de Atuação',
        ]);
        DB::table('element_text')->insert([
            'id' => 51,
            'element_id' => 68,
            'text_id' => 51,
            'description' => 'Box 4 da Página de Áreas de Atuação',
        ]);

        DB::table('element_text')->insert([
            'id' => 52,
            'element_id' => 70,
            'text_id' => 52,
            'description' => 'Texto Introdutório da Página do Grupo',
        ]);

        DB::table('element_text')->insert([
            'id' => 53,
            'element_id' => 78,
            'text_id' => 53,
            'description' => 'Título da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('element_text')->insert([
            'id' => 54,
            'element_id' => 79,
            'text_id' => 54,
            'description' => 'Texto do Box 1 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 55,
            'element_id' => 80,
            'text_id' => 55,
            'description' => 'Texto 1 do Box 2 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 56,
            'element_id' => 81,
            'text_id' => 56,
            'description' => 'Texto 2 do Box 2 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 57,
            'element_id' => 82,
            'text_id' => 57,
            'description' => 'Texto 3 do Box 2 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 58,
            'element_id' => 83,
            'text_id' => 58,
            'description' => 'Texto do Título do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 59,
            'element_id' => 84,
            'text_id' => 59,
            'description' => 'Texto 1 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 60,
            'element_id' => 85,
            'text_id' => 60,
            'description' => 'Texto 2 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 61,
            'element_id' => 86,
            'text_id' => 61,
            'description' => 'Texto 3 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 62,
            'element_id' => 87,
            'text_id' => 62,
            'description' => 'Texto 4 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 63,
            'element_id' => 88,
            'text_id' => 63,
            'description' => 'Texto 5 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('element_text')->insert([
            'id' => 64,
            'element_id' => 89,
            'text_id' => 64,
            'description' => 'Texto 6 do Box 3 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('element_text')->insert([
            'id' => 65,
            'element_id' => 91,
            'text_id' => 65,
            'description' => 'Texto Introdutório da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 66,
            'element_id' => 92,
            'text_id' => 66,
            'description' => 'Texto do Box 1 da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 67,
            'element_id' => 93,
            'text_id' => 67,
            'description' => 'Texto do Box 2 da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 68,
            'element_id' => 94,
            'text_id' => 68,
            'description' => 'Texto do Box 3 da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 69,
            'element_id' => 95,
            'text_id' => 69,
            'description' => 'Texto do Box 4 da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 70,
            'element_id' => 96,
            'text_id' => 70,
            'description' => 'Texto do Box 5 da Página de Responsabilidade Social',
        ]);

        DB::table('element_text')->insert([
            'id' => 71,
            'element_id' => 98,
            'text_id' => 71,
            'description' => 'Texto Introdutório da Página do Pro Ação Criança',
        ]);

        DB::table('element_text')->insert([
            'id' => 72,
            'element_id' => 99,
            'text_id' => 72,
            'description' => 'Texto 1 do Box 1 da Página do Pro Ação Criança',
        ]);

        DB::table('element_text')->insert([
            'id' => 73,
            'element_id' => 99,
            'text_id' => 73,
            'description' => 'Texto 2 do Box 1 da Página do Pro Ação Criança',
        ]);

        DB::table('element_text')->insert([
            'id' => 74,
            'element_id' => 99,
            'text_id' => 74,
            'description' => 'Texto 3 do Box 1 da Página do Pro Ação Criança',
        ]);

        DB::table('element_text')->insert([
            'id' => 75,
            'element_id' => 100,
            'text_id' => 75,
            'description' => 'Texto 1 do Box 2 da Página do Pro Ação Criança',
        ]);

        DB::table('element_text')->insert([
            'id' => 76,
            'element_id' => 102,
            'text_id' => 76,
            'description' => 'Texto Introdutório da Página do Pro Ação Crinaça Campanha',
        ]);

        DB::table('element_text')->insert([
            'id' => 77,
            'element_id' => 105,
            'text_id' => 77,
            'description' => 'Texto Introdutório da Página Clientes',
        ]);

        DB::table('element_text')->insert([
            'id' => 78,
            'element_id' => 139,
            'text_id' => 78,
            'description' => 'Texto Introdutório da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 79,
            'element_id' => 140,
            'text_id' => 79,
            'description' => 'Texto do Box 1 da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 80,
            'element_id' => 141,
            'text_id' => 80,
            'description' => 'Texto do Box 2 da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 81,
            'element_id' => 142,
            'text_id' => 81,
            'description' => 'Texto do Box 3 da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 82,
            'element_id' => 143,
            'text_id' => 82,
            'description' => 'Texto do Box 4 da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 83,
            'element_id' => 144,
            'text_id' => 83,
            'description' => 'Texto do Box 5 da Página RH',
        ]);

        DB::table('element_text')->insert([
            'id' => 84,
            'element_id' => 146,
            'text_id' => 84,
            'description' => 'Texto Introdutório da Página Fale Conosco',
        ]);

        DB::table('element_text')->insert([
            'id' => 85,
            'element_id' => 149,
            'text_id' => 85,
            'description' => 'Texto Introdutório da Página SAC',
        ]);

        DB::table('element_text')->insert([
            'id' => 86,
            'element_id' => 151,
            'text_id' => 86,
            'description' => 'Texto Introdutório da Página Trabalhe Conosco',
        ]);

        DB::table('element_text')->insert([
            'id' => 87,
            'element_id' => 153,
            'text_id' => 87,
            'description' => 'Texto Introdutório da Página Fornecedores',
        ]);

        DB::table('element_text')->insert([
            'id' => 88,
            'element_id' => 156,
            'text_id' => 88,
            'description' => 'Texto Introdutório da Página Endereços e Telefones',
        ]);

        DB::table('element_text')->insert([
            'id' => 89,
            'element_id' => 157,
            'text_id' => 89,
            'description' => 'Texto do Box 1 da Página Endereços e Telefones',
        ]);

        DB::table('element_text')->insert([
            'id' => 90,
            'element_id' => 158,
            'text_id' => 90,
            'description' => 'Texto do Box 2 da Página Endereços e Telefones',
        ]);

        DB::table('element_text')->insert([
            'id' => 91,
            'element_id' => 159,
            'text_id' => 91,
            'description' => 'Texto do Box 3 da Página Endereços e Telefones',
        ]);

        DB::table('element_text')->insert([
            'id' => 92,
            'element_id' => 161,
            'text_id' => 92,
            'description' => 'Texto Introdutório da Página Proposta',
        ]);
    }
}
