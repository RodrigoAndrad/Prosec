<?php

use Illuminate\Database\Seeder;

class ComponentElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_element')->insert([
            'id' => 1,
            'component_id' => 1,
            'element_id' => 1,
            'name' => 'Slide 1 do Banner da Homepage',
            'description' => 'Slide 1 Banner Rotativo da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 2,
            'component_id' => 1,
            'element_id' => 2,
            'name' => 'Slide 2 do Banner da Homepage',
            'description' => 'Slide 2 Banner Rotativo da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 3,
            'component_id' => 1,
            'element_id' => 3,
            'name' => 'Slide 3 do Banner da Homepage',
            'description' => 'Slide 3 Banner Rotativo da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 4,
            'component_id' => 2,
            'element_id' => 4,
            'name' => 'Box 1 da Homepage',
            'description' => 'Box 1 da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 5,
            'component_id' => 2,
            'element_id' => 5,
            'name' => 'Box 2 da Homepage',
            'description' => 'Box 2 da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 6,
            'component_id' => 2,
            'element_id' => 6,
            'name' => 'Box 3 da Homepage',
            'description' => 'Box 3 da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 7,
            'component_id' => 2,
            'element_id' => 7,
            'name' => 'Box 4 da Homepage',
            'description' => 'Box 4 da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 8,
            'component_id' => 2,
            'element_id' => 8,
            'name' => 'Box 5 da Homepage',
            'description' => 'Box 5 da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 9,
            'component_id' => 2,
            'element_id' => 9,
            'name' => 'Box 6 da Homepage',
            'description' => 'Box 6 da Homepage',
        ]);
        DB::table('component_element')->insert([
            'id' => 10,
            'component_id' => 3,
            'element_id' => 10,
            'name' => 'Destaque da Homepage',
            'description' => 'Destaque da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 11,
            'component_id' => 4,
            'element_id' => 11,
            'name' => 'Post 1 das Notícias da Homepage',
            'description' => 'Post 1 das Últimas notícias da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 12,
            'component_id' => 4,
            'element_id' => 12,
            'name' => 'Post 2 das Notícias da Homepage',
            'description' => 'Post 2 das Últimas notícias da Homepage',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 13,
            'component_id' => 4,
            'element_id' => 13,
            'name' => 'Post 3 das Notícias da Homepage',
            'description' => 'Post 3 das Últimas notícias da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 14,
            'component_id' => 5,
            'element_id' => 14,
            'name' => 'Indicador 1 da Homepage',
            'description' => 'Indicador 1 da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 15,
            'component_id' => 5,
            'element_id' => 15,
            'name' => 'PIndicador 2 da Homepage',
            'description' => 'Indicador 2 da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 16,
            'component_id' => 5,
            'element_id' => 16,
            'name' => 'Indicador 3 da Homepage',
            'description' => 'Indicador 3 da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 17,
            'component_id' => 5,
            'element_id' => 17,
            'name' => 'Indicador 4 da Homepage',
            'description' => 'Indicador 4 da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 18,
            'component_id' => 6,
            'element_id' => 18,
            'name' => 'Video 1  da Homepage',
            'description' => 'Video  1 da Homepage',
        ]);

        DB::table('component_element')->insert([
            'id' => 19,
            'component_id' => 6,
            'element_id' => 19,
            'name' => 'Video 2 da Homepage',
            'description' => 'Video 2 da Homepage',
        ]);
        DB::table('component_element')->insert([
            'id' => 20,
            'component_id' => 7,
            'element_id' => 20,
            'name' => 'Banner da Página de Serviços',
            'description' => 'Banner da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 21,
            'component_id' => 8,
            'element_id' => 21,
            'name' => 'Box 1 da Página de Serviços',
            'description' => 'Box 1 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 22,
            'component_id' => 8,
            'element_id' => 22,
            'name' => 'Box 2 da Página de Serviços',
            'description' => 'Box 2 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 23,
            'component_id' => 8,
            'element_id' => 23,
            'name' => 'Box 3 da Página de Serviços',
            'description' => 'Box 3 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 24,
            'component_id' => 8,
            'element_id' => 24,
            'name' => 'Box 4 da Página de Serviços',
            'description' => 'Box 4 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 25,
            'component_id' => 8,
            'element_id' => 25,
            'name' => 'Box 5 da Página de Serviços',
            'description' => 'Box 5 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 26,
            'component_id' => 8,
            'element_id' => 26,
            'name' => 'Box 6 da Página de Serviços',
            'description' => 'Box 6 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 27,
            'component_id' => 8,
            'element_id' => 27,
            'name' => 'Box 7 da Página de Serviços',
            'description' => 'Box 7 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 28,
            'component_id' => 8,
            'element_id' => 28,
            'name' => 'Box 8 da Página de Serviços',
            'description' => 'Box 8 da Página de Serviços',
        ]);
        DB::table('component_element')->insert([
            'id' => 29,
            'component_id' => 8,
            'element_id' => 29,
            'name' => 'Box 9 da Página de Serviços',
            'description' => 'Box 9 da Página de Serviços',
        ]); 

        DB::table('component_element')->insert([
            'id' => 30,
            'component_id' => 9,
            'element_id' => 30,
            'name' => 'Banner da Página de Serviços',
            'description' => 'Banner da Página de Vigilância Pessoal e Escolta',
        ]);
        DB::table('component_element')->insert([
            'id' => 31,
            'component_id' => 10,
            'element_id' => 31,
            'name' => 'Box da Página de Vigilância Patrimonial',
            'description' => 'Box da Página de Vigilância Patrimonial',
        ]);

        DB::table('component_element')->insert([
            'id' => 32,
            'component_id' => 11,
            'element_id' => 32,
            'name' => 'Banner da Página de Serviços',
            'description' => 'Banner da Página de Vigilância Pessoal e Escolta',
        ]);
        DB::table('component_element')->insert([
            'id' => 33,
            'component_id' => 12,
            'element_id' => 33,
            'name' => 'Box da Página de Vigilância Pessoal e Escolta',
            'description' => 'Box da Página de Vigilância Pessoal e Escolta',
        ]);

        DB::table('component_element')->insert([
            'id' => 34,
            'component_id' => 13,
            'element_id' => 34,
            'name' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
        ]);
        DB::table('component_element')->insert([
            'id' => 35,
            'component_id' => 14,
            'element_id' => 35,
            'name' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Box da Página de Portaria, Controlador de Acesso e Recepção',
        ]);

        DB::table('component_element')->insert([
            'id' => 36,
            'component_id' => 15,
            'element_id' => 36,
            'name' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Banner da Página de Portaria, Controlador de Acesso e Recepção',
        ]);
        DB::table('component_element')->insert([
            'id' => 37,
            'component_id' => 16,
            'element_id' => 37,
            'name' => 'Texto Introdutório da Página de Segurança Eletrônica',
            'description' => 'Texto Introdutório da Página de Segurança Eletrônica',
        ]);
        DB::table('component_element')->insert([
            'id' => 38,
            'component_id' => 17,
            'element_id' => 38,
            'name' => 'Box 1 da Página de Segurança Eletrônica',
            'description' => 'Box 1 da Página de Segurança Eletrônica',
        ]);
        DB::table('component_element')->insert([
            'id' => 39,
            'component_id' => 17,
            'element_id' => 39,
            'name' => 'Box 2 da Página de Segurança Eletrônica',
            'description' => 'Box 2 da Página de Segurança Eletrônica',
        ]);
        DB::table('component_element')->insert([
            'id' => 40,
            'component_id' => 17,
            'element_id' => 40,
            'name' => 'Box 3 da Página de Segurança Eletrônica',
            'description' => 'Box 3 da Página de Segurança Eletrônica',
        ]);
        DB::table('component_element')->insert([
            'id' => 41,
            'component_id' => 17,
            'element_id' => 41,
            'name' => 'Box 4 da Página de Segurança Eletrônica',
            'description' => 'Box 4 da Página de Segurança Eletrônica',
        ]);

        DB::table('component_element')->insert([
            'id' => 42,
            'component_id' => 18,
            'element_id' => 42,
            'name' => 'Banner de Destaque da Página de Monitoramento 24h',
            'description' => 'Banner de Destaque da Página de Monitoramento 24h',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 43,
            'component_id' => 19,
            'element_id' => 43,
            'name' => 'Texto Introdutório da Página de Monitoramento 24h',
            'description' => 'Texto Introdutório da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 44,
            'component_id' => 20,
            'element_id' => 44,
            'name' => 'Box 1 da Página de Monitoramento 24h',
            'description' => 'Box 1 da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 45,
            'component_id' => 20,
            'element_id' => 45,
            'name' => 'Box 2 da Página de Monitoramento 24h',
            'description' => 'Box 2 da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 46,
            'component_id' => 20,
            'element_id' => 46,
            'name' => 'Box 3 da Página de Monitoramento 24h',
            'description' => 'Box 3 da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 47,
            'component_id' => 20,
            'element_id' => 47,
            'name' => 'Box 4 da Página de Monitoramento 24h',
            'description' => 'Box 4 da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 48,
            'component_id' => 20,
            'element_id' => 48,
            'name' => 'Box 5 da Página de Monitoramento 24h',
            'description' => 'Box 5 da Página de Monitoramento 24h',
        ]);

        DB::table('component_element')->insert([
            'id' => 49,
            'component_id' => 21,
            'element_id' => 49,
            'name' => 'Banner de Destaque da Página de Pro Control',
            'description' => 'Banner de Destaque da Página de Pro Control',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 50,
            'component_id' => 22,
            'element_id' => 50,
            'name' => 'Texto Introdutório da Página de Pro Control',
            'description' => 'Texto Introdutório da Página de Pro Control',
        ]);

        DB::table('component_element')->insert([
            'id' => 51,
            'component_id' => 23,
            'element_id' => 51,
            'name' => 'Box 1 da Página de Pro Control',
            'description' => 'Box 1 da Página de Pro Control',
        ]);

        DB::table('component_element')->insert([
            'id' => 52,
            'component_id' => 23,
            'element_id' => 52,
            'name' => 'Box 2 da Página de Pro Control',
            'description' => 'Box 2 da Página de Pro Control',
        ]);

        DB::table('component_element')->insert([
            'id' => 53,
            'component_id' => 23,
            'element_id' => 53,
            'name' => 'Box 3 da Página de Pro Control',
            'description' => 'Box 3 da Página de Pro Control',
        ]);

        DB::table('component_element')->insert([
            'id' => 54,
            'component_id' => 24,
            'element_id' => 54,
            'name' => 'Link da Página de Pro Control',
            'description' => 'Link da Página de Pro Control',
        ]);

        DB::table('component_element')->insert([
            'id' => 55,
            'component_id' => 25,
            'element_id' => 55,
            'name' => 'Banner de Destaque da Página de Limpeza e Conservação',
            'description' => 'Banner de Destaque da Página de Limpeza e Conservação',
        ]);

        DB::table('component_element')->insert([
            'id' => 56,
            'component_id' => 26,
            'element_id' => 56,
            'name' => 'Box da Página de Limpeza e Conservaçãol',
            'description' => 'Box da Página de Limpeza e Conservaçãol',
        ]);

        DB::table('component_element')->insert([
            'id' => 57,
            'component_id' => 27,
            'element_id' => 57,
            'name' => 'Banner de Destaque da Página de Serviços Gerais',
            'description' => 'Banner de Destaque da Página de Serviços Gerais',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 58,
            'component_id' => 28,
            'element_id' => 58,
            'name' => 'Texto Introdutório da Página de Serviços Gerais',
            'description' => 'Texto Introdutório da Página de Serviços Gerais',
        ]);

        DB::table('component_element')->insert([
            'id' => 59,
            'component_id' => 29,
            'element_id' => 59,
            'name' => 'Box 1 da Página de Serviços Gerais',
            'description' => 'Box 1 da Página de Serviços Gerais',
        ]);

        DB::table('component_element')->insert([
            'id' => 60,
            'component_id' => 29,
            'element_id' => 60,
            'name' => 'Box 2 da Página de Serviços Gerais',
            'description' => 'Box 2 da Página de Serviços Gerais',
        ]);

        DB::table('component_element')->insert([
            'id' => 61,
            'component_id' => 29,
            'element_id' => 61,
            'name' => 'Box 3 da Página de Serviços Gerais',
            'description' => 'Box 3 da Página de Serviços Gerais',
        ]);

        DB::table('component_element')->insert([
            'id' => 62,
            'component_id' => 29,
            'element_id' => 62,
            'name' => 'Box 4 da Página de Serviços Gerais',
            'description' => 'Box 4 da Página de Serviços Gerais',
        ]);

        DB::table('component_element')->insert([
            'id' => 63,
            'component_id' => 30,
            'element_id' => 63,
            'name' => 'Banner de Destaque da Página de Áreas de Atuação',
            'description' => 'Banner de Destaque da Página de Áreas de Atuação',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 64,
            'component_id' => 31,
            'element_id' => 64,
            'name' => 'Texto Introdutório da Página de Áreas de Atuação',
            'description' => 'Texto Introdutório da Página de Áreas de Atuação',
        ]);

        DB::table('component_element')->insert([
            'id' => 65,
            'component_id' => 32,
            'element_id' => 65,
            'name' => 'Box 1 da Página de Áreas de Atuação',
            'description' => 'Box 1 da Página de Áreas de Atuação',
        ]);

        DB::table('component_element')->insert([
            'id' => 66,
            'component_id' => 32,
            'element_id' => 66,
            'name' => 'Box 2 da Página de Áreas de Atuação',
            'description' => 'Box 2 da Página de Áreas de Atuação',
        ]);

        DB::table('component_element')->insert([
            'id' => 67,
            'component_id' => 32,
            'element_id' => 67,
            'name' => 'Box 3 da Página de Áreas de Atuação',
            'description' => 'Box 3 da Página de Áreas de Atuação',
        ]);

        DB::table('component_element')->insert([
            'id' => 68,
            'component_id' => 32,
            'element_id' => 68,
            'name' => 'Box 4 da Página de Áreas de Atuação',
            'description' => 'Box 4 da Página de Áreas de Atuação',
        ]);

        DB::table('component_element')->insert([
            'id' => 69,
            'component_id' => 33,
            'element_id' => 69,
            'name' => 'Banner de Destaque do Grupo',
            'description' => 'Banner de Destaque da Página do Grupo',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 70,
            'component_id' => 34,
            'element_id' => 70,
            'name' => 'Texto Introdutório da Página do Grupo',
            'description' => 'Texto Introdutório da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 71,
            'component_id' => 35,
            'element_id' => 71,
            'name' => 'Link 1 da Página de Áreas do Grupo',
            'description' => 'Link 1 da Página de Áreas do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 72,
            'component_id' => 35,
            'element_id' => 72,
            'name' => 'Link 2 da Página de Áreas do Grupo',
            'description' => 'Link 2 da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 73,
            'component_id' => 35,
            'element_id' => 73,
            'name' => 'Link 3 da Página do Grupo',
            'description' => 'Link 3 da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 74,
            'component_id' => 35,
            'element_id' => 74,
            'name' => 'Link 4 da Página do Grupo',
            'description' => 'Link 4 da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 75,
            'component_id' => 35,
            'element_id' => 75,
            'name' => 'Link 5 da Página do Grupo',
            'description' => 'Link 5 da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 76,
            'component_id' => 35,
            'element_id' => 76,
            'name' => 'Link 6 da Página do Grupo',
            'description' => 'Link 6 da Página do Grupo',
        ]);

        DB::table('component_element')->insert([
            'id' => 77,
            'component_id' => 36,
            'element_id' => 77,
            'name' => 'Banner da Página Conheça o Grupo Pro Security',
            'description' => 'Banner da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 78,
            'component_id' => 37,
            'element_id' => 78,
            'name' => 'Texto do Título da Página Conheça o Grupo Pro Security',
            'description' => 'Texto do Título da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 79,
            'component_id' => 38,
            'element_id' => 79,
            'name' => 'Texto do Box 1 da Página Conheça o Grupo Pro Security',
            'description' => 'Texto do Box 1 da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 80,
            'component_id' => 39,
            'element_id' => 80,
            'name' => 'Texto 1 do Box 2 Página Conheça o Grupo Pro Security',
            'description' => 'Texto 1 do Box 2  da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 81,
            'component_id' => 39,
            'element_id' => 81,
            'name' => 'Texto 2 do Box 2 Página Conheça o Grupo Pro Security',
            'description' => 'Texto 2 do Box 2  da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 82,
            'component_id' => 39,
            'element_id' => 82,
            'name' => 'Texto 3 do Box 2 Página Conheça o Grupo Pro Security',
            'description' => 'Texto 3 do Box 2  da Página Conheça o Grupo Pro Security',
        ]);

        DB::table('component_element')->insert([
            'id' => 83,
            'component_id' => 40,
            'element_id' => 83,
            'name' => 'Texto do Título do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Texto do Título do Box 3 da Página Conheça o Grupo Pro Security',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 84,
            'component_id' => 41,
            'element_id' => 84,
            'name' => 'Conteúdo 1 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 1 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 85,
            'component_id' => 41,
            'element_id' => 85,
            'name' => 'Conteúdo 2 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 2 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 86,
            'component_id' => 41,
            'element_id' => 86,
            'name' => 'Conteúdo 3 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 3 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 87,
            'component_id' => 41,
            'element_id' => 87,
            'name' => 'Conteúdo 4 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 4 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 88,
            'component_id' => 41,
            'element_id' => 88,
            'name' => 'Conteúdo 5 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 5 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 89,
            'component_id' => 41,
            'element_id' => 89,
            'name' => 'Conteúdo 6 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Conteúdo 6 do Box 3  da Página Conheça o Grupo Pro Security',
        ]);
        DB::table('component_element')->insert([
            'id' => 90,
            'component_id' => 42,
            'element_id' => 90,
            'name' => 'Banner da Página Responsabilidade Social',
            'description' => 'Banner da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 91,
            'component_id' => 43,
            'element_id' => 91,
            'name' => 'Texto do Título da Página Responsabilidade Social',
            'description' => 'Texto do Título da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 92,
            'component_id' => 44,
            'element_id' => 92,
            'name' => 'Box 1 da Página Responsabilidade Social',
            'description' => 'Box 1 da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 93,
            'component_id' => 44,
            'element_id' => 93,
            'name' => 'Box 2 da Página Responsabilidade Social',
            'description' => 'Box 2 da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 94,
            'component_id' => 44,
            'element_id' => 94,
            'name' => 'Box 3 da Página Responsabilidade Social',
            'description' => 'Box 3 da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 95,
            'component_id' => 44,
            'element_id' => 95,
            'name' => 'Box 4 da Página Responsabilidade Social',
            'description' => 'Box 4 da Página Responsabilidade Social',
        ]);

        DB::table('component_element')->insert([
            'id' => 96,
            'component_id' => 44,
            'element_id' => 96,
            'name' => 'Box 5 da Página Responsabilidade Social',
            'description' => 'Box 5 da Página Responsabilidade Social',
        ]);
        
        DB::table('component_element')->insert([
            'id' => 97,
            'component_id' => 45,
            'element_id' => 97,
            'name' => 'Banner da Página Pro Ação Criança',
            'description' => 'Banner da Página Pro Ação Criança',
        ]);

        DB::table('component_element')->insert([
            'id' => 98,
            'component_id' => 46,
            'element_id' => 98,
            'name' => 'Texto Introdutório da Página Pro Ação Criança',
            'description' => 'Texto Introdutório da Página Pro Ação Criança',
        ]);

        DB::table('component_element')->insert([
            'id' => 99,
            'component_id' => 47,
            'element_id' => 99,
            'name' => 'Box da Página Pro Ação Criança',
            'description' => 'Box da Página Pro Ação Criança',
        ]);

        DB::table('component_element')->insert([
            'id' => 100,
            'component_id' => 48,
            'element_id' => 100,
            'name' => 'Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Carrossel de Fotos da Página Pro Ação Criança',
        ]);

        DB::table('component_element')->insert([
            'id' => 101,
            'component_id' => 49,
            'element_id' => 101,
            'name' => 'Banner da Página Pro Ação Criança Campanha',
            'description' => 'Banner da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_element')->insert([
            'id' => 102,
            'component_id' => 50,
            'element_id' => 102,
            'name' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
            'description' => 'Texto Introdutório da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_element')->insert([
            'id' => 103,
            'component_id' => 51,
            'element_id' => 103,
            'name' => 'Box da Página Pro Ação Criança Campanha',
            'description' => 'Box da Página Pro Ação Criança Campanha',
        ]);

        DB::table('component_element')->insert([
            'id' => 104,
            'component_id' => 52,
            'element_id' => 104,
            'name' => 'Banner da Página Clientes',
            'description' => 'Banner da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 105,
            'component_id' => 53,
            'element_id' => 105,
            'name' => 'Texto Introdutório da Página Clientes',
            'description' => 'Texto Introdutório da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 106,
            'component_id' => 54,
            'element_id' => 106,
            'name' => 'Box 1 da Página Clientes',
            'description' => 'Box 1 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 107,
            'component_id' => 54,
            'element_id' => 107,
            'name' => 'Box 2 da Página Clientes',
            'description' => 'Box 2 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 108,
            'component_id' => 54,
            'element_id' => 108,
            'name' => 'Box 3 da Página Clientes',
            'description' => 'Box 3 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 109,
            'component_id' => 54,
            'element_id' => 109,
            'name' => 'Box 4 da Página Clientes',
            'description' => 'Box 4 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 110,
            'component_id' => 54,
            'element_id' => 110,
            'name' => 'Box 5 da Página Clientes',
            'description' => 'Box 5 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 111,
            'component_id' => 54,
            'element_id' => 111,
            'name' => 'Box 6 da Página Clientes',
            'description' => 'Box 6 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 112,
            'component_id' => 54,
            'element_id' => 112,
            'name' =>  'Box 7 da Página Clientes',
            'description' => 'Box 7 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 113,
            'component_id' => 54,
            'element_id' => 113,
            'name' => 'Box 8 da Página Clientes',
            'description' => 'Box 8 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 114,
            'component_id' => 54,
            'element_id' => 114,
            'name' => 'Box 9 da Página Clientes',
            'description' => 'Box 9 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 115,
            'component_id' => 54,
            'element_id' => 115,
            'name' => 'Box 10 da Página Clientes',
            'description' => 'Box 10 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 116,
            'component_id' => 54,
            'element_id' => 116,
            'name' => 'Box 11 da Página Clientes',
            'description' => 'Box 11 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 117,
            'component_id' => 54,
            'element_id' => 117,
            'name' => 'Box 12 da Página Clientes',
            'description' => 'Box 12 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 118,
            'component_id' => 54,
            'element_id' => 118,
            'name' => 'Box 13 da Página Clientes',
            'description' => 'Box 13 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 119,
            'component_id' => 54,
            'element_id' => 119,
            'name' => 'Box 14 da Página Clientes',
            'description' => 'Box 14 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 120,
            'component_id' => 54,
            'element_id' => 120,
            'name' => 'Box 15 da Página Clientes',
            'description' => 'Box 15 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 121,
            'component_id' => 54,
            'element_id' => 121,
            'name' => 'Box 16 da Página Clientes',
            'description' => 'Box 16 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 122,
            'component_id' => 54,
            'element_id' => 122,
            'name' => 'Box 17 da Página Clientes',
            'description' => 'Box 17 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 123,
            'component_id' => 54,
            'element_id' => 123,
            'name' => 'Box 18 da Página Clientes',
            'description' => 'Box 18 da Página Clientes',
        ]);

        DB::table('component_element')->insert([
            'id' => 124,
            'component_id' => 54,
            'element_id' => 124,
            'name' => 'Box 19 da Página Clientes',
            'description' => 'Box 19 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 125,
            'component_id' => 54,
            'element_id' => 125,
            'name' => 'Box 20 da Página Clientes',
            'description' => 'Box 20 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 126,
            'component_id' => 54,
            'element_id' => 126,
            'name' => 'Box 21 da Página Clientes',
            'description' => 'Box 21 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 127,
            'component_id' => 54,
            'element_id' => 127,
            'name' => 'Box 22 da Página Clientes',
            'description' => 'Box 22 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 128,
            'component_id' => 54,
            'element_id' => 128,
            'name' => 'Box 23 da Página Clientes',
            'description' => 'Box 23 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 129,
            'component_id' => 54,
            'element_id' => 129,
            'name' => 'Box 24 da Página Clientes',
            'description' => 'Box 24 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 130,
            'component_id' => 54,
            'element_id' => 130,
            'name' => 'Box 25 da Página Clientes',
            'description' => 'Box 25 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 131,
            'component_id' => 54,
            'element_id' => 131,
            'name' => 'Box 26 da Página Clientes',
            'description' => 'Box 26 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 132,
            'component_id' => 54,
            'element_id' => 132,
            'name' => 'Box 27 da Página Clientes',
            'description' => 'Box 27 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 133,
            'component_id' => 54,
            'element_id' => 133,
            'name' => 'Box 28 da Página Clientes',
            'description' => 'Box 28 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 134,
            'component_id' => 54,
            'element_id' => 134,
            'name' => 'Box 29 da Página Clientes',
            'description' => 'Box 29 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 135,
            'component_id' => 54,
            'element_id' => 135,
            'name' => 'Box 30 da Página Clientes',
            'description' => 'Box 30 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 136,
            'component_id' => 54,
            'element_id' => 136,
            'name' => 'Box 31 da Página Clientes',
            'description' => 'Box 31 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 137,
            'component_id' => 54,
            'element_id' => 137,
            'name' => 'Box 32 da Página Clientes',
            'description' => 'Box 32 da Página Clientes',
        ]);
        DB::table('component_element')->insert([
            'id' => 138,
            'component_id' => 55,
            'element_id' => 138,
            'name' => 'Banner da Página RH',
            'description' => 'Banner da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 139,
            'component_id' => 56,
            'element_id' => 139,
            'name' => 'Texto Introdutório da Página RH',
            'description' => 'Texto Introdutório da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 140,
            'component_id' => 57,
            'element_id' => 140,
            'name' => 'Box 1 da Página RH',
            'description' => 'Box 1 da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 141,
            'component_id' => 57,
            'element_id' => 141,
            'name' => 'Box 2 da Página RH',
            'description' => 'Box 2 da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 142,
            'component_id' => 57,
            'element_id' => 142,
            'name' => 'Box 3 da Página RH',
            'description' => 'Box 3 da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 143,
            'component_id' => 57,
            'element_id' => 143,
            'name' => 'Box 4 da Página RH',
            'description' => 'Box 4 da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 144,
            'component_id' => 57,
            'element_id' => 144,
            'name' => 'Box 5 da Página RH',
            'description' => 'Box 5 da Página RH',
        ]);
        DB::table('component_element')->insert([
            'id' => 145,
            'component_id' => 58,
            'element_id' => 145,
            'name' => 'Banner da Página Fale Conosco',
            'description' => 'Banner da Página Fale Conosco',
        ]);
        DB::table('component_element')->insert([
            'id' => 146,
            'component_id' => 59,
            'element_id' => 146,
            'name' => 'Texto Introdutório da Página Fale Conosco',
            'description' => 'Texto Introdutório da Página Fale Conosco',
        ]);
        DB::table('component_element')->insert([
            'id' => 147,
            'component_id' => 60,
            'element_id' => 147,
            'name' => 'Links da Página Fale Conosco',
            'description' => 'Links da Página Fale Conosco',
        ]);
        DB::table('component_element')->insert([
            'id' => 148,
            'component_id' => 61,
            'element_id' => 148,
            'name' => 'Banner da Página SAC',
            'description' => 'Banner da Página SAC',
        ]);
        DB::table('component_element')->insert([
            'id' => 149,
            'component_id' => 62,
            'element_id' => 149,
            'name' => 'Texto Introdutório da Página SAC',
            'description' => 'Texto Introdutório da Página SAC',
        ]);
        DB::table('component_element')->insert([
            'id' => 150,
            'component_id' => 63,
            'element_id' => 150,
            'name' => 'Banner da Página Trabalhe Conosco',
            'description' => 'Banner da Página Trabalhe Conosco',
        ]);
        DB::table('component_element')->insert([
            'id' => 151,
            'component_id' => 64,
            'element_id' => 151,
            'name' => 'Texto Introdutório da Página Trabalhe Conosco',
            'description' => 'Texto Introdutório da Página Trabalhe Conosco',
        ]);
        DB::table('component_element')->insert([
            'id' => 152,
            'component_id' => 65,
            'element_id' => 152,
            'name' => 'Banner da Página Cadastro de Fornecedores',
            'description' => 'Banner da Página Cadastro de Fornecedores',
        ]);
        DB::table('component_element')->insert([
            'id' => 153,
            'component_id' => 66,
            'element_id' => 153,
            'name' => 'Texto Introdutório da Página Cadastro de Fornecedores',
            'description' => 'Texto Introdutório da Página Cadastro de Fornecedores',
        ]);
        DB::table('component_element')->insert([
            'id' => 154,
            'component_id' => 67,
            'element_id' => 154,
            'name' => 'Banner da Página Endereços e Telefones',
            'description' => 'Banner da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 155,
            'component_id' => 68,
            'element_id' => 155,
            'name' => 'Imagem da Página Endereços e Telefones',
            'description' => 'Imagem da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 156,
            'component_id' => 69,
            'element_id' => 156,
            'name' => 'Texto Introdutório da Página Endereços e Telefones',
            'description' => 'Texto Introdutório da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 157,
            'component_id' => 70,
            'element_id' => 157,
            'name' => 'Box 1 da Página Endereços e Telefones',
            'description' => 'Box 1 da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 158,
            'component_id' => 70,
            'element_id' => 158,
            'name' => 'Box 2 da Página Endereços e Telefones',
            'description' => 'Box 2 da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 159,
            'component_id' => 70,
            'element_id' => 159,
            'name' => 'Box 3 da Página Endereços e Telefones',
            'description' => 'Box 3 da Página Endereços e Telefones',
        ]);
        DB::table('component_element')->insert([
            'id' => 160,
            'component_id' => 71,
            'element_id' => 160,
            'name' => 'Banner da Página Proposta',
            'description' => 'Banner da Página Proposta',
        ]);
        DB::table('component_element')->insert([
            'id' => 161,
            'component_id' => 72,
            'element_id' => 161,
            'name' => 'Texto Introdutório da Página Proposta',
            'description' => 'Texto Introdutório da Página Proposta',
        ]);
    }
}
