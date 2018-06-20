<?php

use Illuminate\Database\Seeder;

class SEOTagTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('s_e_o_tag_types')->insert([
            'id' => 1,
            'name' => 'Facebook Metatag',
            'description' => 'Metatags de cabeçalho do Facebook'
        ]);

        DB::table('s_e_o_tag_types')->insert([
            'id' => 2,
            'name' => 'Twitter Metatag',
            'description' => 'Metatags de cabeçalho do Twitter'
        ]);

        DB::table('s_e_o_tag_types')->insert([
            'id' => 3,
            'name' => 'Google Plus Metatag',
            'description' => 'Metatags de cabeçalho do Google Plus'
        ]);
    }

}
