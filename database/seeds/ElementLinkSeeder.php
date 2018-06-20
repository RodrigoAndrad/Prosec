<?php

use Illuminate\Database\Seeder;

class ElementLinkSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('element_link')->insert([
            'id' => 1,
            'element_id' => 1,
            'link_id' => 1,
            'description' => 'Link do Banner 1 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 2,
            'element_id' => 2,
            'link_id' => 2,
            'description' => 'Link do Banner 2 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 3,
            'element_id' => 3,
            'link_id' => 3,
            'description' => 'Link do Banner 3 da Homepage',
        ]);
        DB::table('element_link')->insert([
            'id' => 4,
            'element_id' => 4,
            'link_id' => 4,
            'description' => 'Link do Box 1 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 5,
            'element_id' => 5,
            'link_id' => 5,
            'description' => 'Link do Box 2 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 6,
            'element_id' => 6,
            'link_id' => 6,
            'description' => 'Link do Box 3 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 7,
            'element_id' => 7,
            'link_id' => 7,
            'description' => 'Link do Box 4 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 8,
            'element_id' => 8,
            'link_id' => 8,
            'description' => 'Link do Box 5 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 9,
            'element_id' => 9,
            'link_id' => 9,
            'description' => 'Link do Box 6 da Homepage',
        ]);
        
        DB::table('element_link')->insert([
            'id' => 10,
            'element_id' => 10,
            'link_id' => 5,
            'description' => 'Link do Destaque da Homepage',
        ]);
        
        DB::table('element_link')->insert([
            'id' => 11,
            'element_id' => 11,
            'link_id' => 10,
            'description' => 'Link da Noticia 1 da Homepage',
        ]);
        
        DB::table('element_link')->insert([
            'id' => 12,
            'element_id' => 12,
            'link_id' => 11,
            'description' => 'Link da Noticia 2 da Homepage',
        ]);
        DB::table('element_link')->insert([
            'id' => 13,
            'element_id' => 13,
            'link_id' => 12,
            'description' => 'Link da Noticia 3 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 14,
            'element_id' => 18,
            'link_id' => 13,
            'description' => 'Link do Video 1 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 15,
            'element_id' => 19,
            'link_id' => 14,
            'description' => 'Link do Video 1 da Homepage',
        ]);

        DB::table('element_link')->insert([
            'id' => 16,
            'element_id' => 21,
            'link_id' => 6,
            'description' => 'Link do Box 1 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 17,
            'element_id' => 22,
            'link_id' => 7,
            'description' => 'Link do Box 2 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 18,
            'element_id' => 23,
            'link_id' => 5,
            'description' => 'Link do Box 3 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 19,
            'element_id' => 24,
            'link_id' => 8,
            'description' => 'Link do Box 4 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 20,
            'element_id' => 25,
            'link_id' => 9,
            'description' => 'Link do Box 5 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 21,
            'element_id' => 26,
            'link_id' => 10,
            'description' => 'Link do Box 6 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 22,
            'element_id' => 27,
            'link_id' => 11,
            'description' => 'Link do Box 7 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 23,
            'element_id' => 28,
            'link_id' => 12,
            'description' => 'Link do Box 8 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 24,
            'element_id' => 29,
            'link_id' => 13,
            'description' => 'Link do Box 9 da Pagina de Serviços',
        ]);

        DB::table('element_link')->insert([
            'id' => 25,
            'element_id' => 54,
            'link_id' => 15,
            'description' => 'Link do PDF do Pro Control',
        ]);
//*******
        DB::table('element_link')->insert([
            'id' => 26,
            'element_id' => 71,
            'link_id' => 17,
            'description' => 'Link 1 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 27,
            'element_id' => 72,
            'link_id' => 18,
            'description' => 'Link 2 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 28,
            'element_id' => 73,
            'link_id' => 19,
            'description' => 'Link 3 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 29,
            'element_id' => 74,
            'link_id' => 20,
            'description' => 'Link 4 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 30,
            'element_id' => 75,
            'link_id' => 21,
            'description' => 'Link 5 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 31,
            'element_id' => 76,
            'link_id' => 22,
            'description' => 'Link 6 da Página de Áreas do Grupo',
        ]);
        DB::table('element_link')->insert([
            'id' => 32,
            'element_id' => 147,
            'link_id' => 23,
            'description' => 'Link 1 da Página de Fale Conosco',
        ]);
        DB::table('element_link')->insert([
            'id' => 33,
            'element_id' => 147,
            'link_id' => 24,
            'description' => 'Link 2 da Página de Fale Conosco',
        ]);
        DB::table('element_link')->insert([
            'id' => 34,
            'element_id' => 147,
            'link_id' => 25,
            'description' => 'Link 3 da Página de Fale Conosco',
        ]);
        DB::table('element_link')->insert([
            'id' => 35,
            'element_id' => 147,
            'link_id' => 26,
            'description' => 'Link 4 da Página de Fale Conosco',
        ]);
        DB::table('element_link')->insert([
            'id' => 36,
            'element_id' => 147,
            'link_id' => 27,
            'description' => 'Link 5 da Página de Fale Conosco',
        ]);
    }

}
