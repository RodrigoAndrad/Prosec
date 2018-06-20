<?php

use Illuminate\Database\Seeder;

class SEOTagSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Home Meta Tags
        // Facebook Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 1,  
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'locale',
            'description' => 'Informações sobre localidade',
            'property_name' => 'property',
            'property_value' => 'og:locale',
            'content_name' => "content",
            'content_value' => 'pt_BR',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 2,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'title',
            'description' => 'Titulo',
            'property_name' => 'property',
            'property_value' => 'og:title',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security | Segurança e Serviços',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 3,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'site_name',
            'description' => 'Nome do Site',
            'property_name' => 'property',
            'property_value' => 'og:site_name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 4,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'type',
            'description' => 'Tipo de conteúdo',
            'property_name' => 'property',
            'property_value' => 'og:type',
            'content_name' => "content",
            'content_value' => 'website',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 5,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'description',
            'description' => 'Descrição',
            'property_name' => 'property',
            'property_value' => 'og:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 6,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'app_id',
            'description' => 'Facebook Application Idebtificator',
            'property_name' => 'property',
            'property_value' => 'fb:app_id',
            'content_name' => "content",
            'content_value' => '132834930721981',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 7,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'url',
            'description' => 'URL',
            'property_name' => 'property',
            'property_value' => 'og:url',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/',
            'priority' => 30
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 8,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'image',
            'description' => 'Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 25
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 9,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:type',
            'description' => 'Tipo de Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:type',
            'content_name' => "content",
            'content_value' => 'image/jpeg',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 10,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:width',
            'description' => 'Largura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:width',
            'content_name' => "content",
            'content_value' => '292',
            'priority' => 15
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 11,
            'page_id' => 1,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:height',
            'description' => 'Altura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:height',
            'content_name' => "content",
            'content_value' => '560',
            'priority' => 10
        ]);
        // Linkedin Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 12,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:card',
            'description' => 'Card do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:card',
            'content_name' => "content",
            'content_value' => 'summary',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 13,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:creator',
            'description' => 'Criador',
            'property_name' => 'name',
            'property_value' => 'twitter:creator',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 14,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:site',
            'description' => 'Site do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:site',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 15,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:domain',
            'description' => 'Dominio',
            'property_name' => 'name',
            'property_value' => 'twitter:domain',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 16,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:title',
            'description' => 'Título',
            'property_name' => 'name',
            'property_value' => 'twitter:title',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 17,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:description',
            'description' => 'Descrição do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 18,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:image',
            'description' => 'Imagem',
            'property_name' => 'name',
            'property_value' => 'twitter:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 30
        ]);
        // Google Plus Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 19,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'name',
            'description' => 'Nome no Google Plus',
            'property_name' => 'itemprop',
            'property_value' => 'name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 20,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Description',
            'description' => 'Descrição no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 10
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 21,
            'page_id' => 1,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Image',
            'description' => 'Imagem no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 10
        ]);

        // Serviços Meta Tags
        // Facebook Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 22,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'locale',
            'description' => 'Informações sobre localidade',
            'property_name' => 'property',
            'property_value' => 'og:locale',
            'content_name' => "content",
            'content_value' => 'pt_BR',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 23,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'title',
            'description' => 'Titulo',
            'property_name' => 'property',
            'property_value' => 'og:title',
            'content_name' => "content",
            'content_value' => 'Serviços | Grupo Pro Security',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 24,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'site_name',
            'description' => 'Nome do Site',
            'property_name' => 'property',
            'property_value' => 'og:site_name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 25,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'type',
            'description' => 'Tipo de conteúdo',
            'property_name' => 'property',
            'property_value' => 'og:type',
            'content_name' => "content",
            'content_value' => 'website',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 26,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'description',
            'description' => 'Descrição',
            'property_name' => 'property',
            'property_value' => 'og:description',
            'content_name' => "content",
            'content_value' => 'O Grupo Pro Security tem uma grande variedades de serviços para sua casa, condomínio e/ou empresa.',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 27,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'app_id',
            'description' => 'Facebook Application Idebtificator',
            'property_name' => 'property',
            'property_value' => 'fb:app_id',
            'content_name' => "content",
            'content_value' => '132834930721981',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 28,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'url',
            'description' => 'URL',
            'property_name' => 'property',
            'property_value' => 'og:url',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/servicos',
            'priority' => 30
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 29,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'image',
            'description' => 'Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 25
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 30,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:type',
            'description' => 'Tipo de Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:type',
            'content_name' => "content",
            'content_value' => 'image/jpeg',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 31,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:width',
            'description' => 'Largura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:width',
            'content_name' => "content",
            'content_value' => '292',
            'priority' => 15
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 32,
            'page_id' => 2,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:height',
            'description' => 'Altura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:height',
            'content_name' => "content",
            'content_value' => '560',
            'priority' => 10
        ]);
        // Linkedin Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 33,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:card',
            'description' => 'Card do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:card',
            'content_name' => "content",
            'content_value' => 'summary',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 34,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:creator',
            'description' => 'Criador',
            'property_name' => 'name',
            'property_value' => 'twitter:creator',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 35,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:site',
            'description' => 'Site do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:site',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 36,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:domain',
            'description' => 'Dominio',
            'property_name' => 'name',
            'property_value' => 'twitter:domain',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/servicos.html',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 37,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:title',
            'description' => 'Título',
            'property_name' => 'name',
            'property_value' => 'twitter:title',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security - Serviços',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 38,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:description',
            'description' => 'Descrição do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:description',
            'content_name' => "content",
            'content_value' => 'O Grupo Pro Security tem uma grande variedades de serviços para sua casa, condomínio e/ou empresa.',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 39,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:image',
            'description' => 'Imagem',
            'property_name' => 'name',
            'property_value' => 'twitter:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 30
        ]);
        // Google Plus Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 40,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'name',
            'description' => 'Nome no Google Plus',
            'property_name' => 'itemprop',
            'property_value' => 'name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 41,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Description',
            'description' => 'Descrição no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'description',
            'content_name' => "content",
            'content_value' => 'O Grupo Pro Security tem uma grande variedades de serviços para sua casa, condomínio e/ou empresa.',
            'priority' => 10
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 42,
            'page_id' => 2,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Image',
            'description' => 'Imagem no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 10
        ]);

        // Vigilância Pessoal e Escolta Meta Tags
        // Facebook Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 43,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'locale',
            'description' => 'Informações sobre localidade',
            'property_name' => 'property',
            'property_value' => 'og:locale',
            'content_name' => "content",
            'content_value' => 'pt_BR',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 44,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'title',
            'description' => 'Titulo',
            'property_name' => 'property',
            'property_value' => 'og:title',
            'content_name' => "content",
            'content_value' => 'Vigilância Pessoal e Escolta - Grupo Pro Security',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 45,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'site_name',
            'description' => 'Nome do Site',
            'property_name' => 'property',
            'property_value' => 'og:site_name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 46,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'type',
            'description' => 'Tipo de conteúdo',
            'property_name' => 'property',
            'property_value' => 'og:type',
            'content_name' => "content",
            'content_value' => 'website',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 47,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'description',
            'description' => 'Descrição',
            'property_name' => 'property',
            'property_value' => 'og:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 48,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'app_id',
            'description' => 'Facebook Application Idebtificator',
            'property_name' => 'property',
            'property_value' => 'fb:app_id',
            'content_name' => "content",
            'content_value' => '132834930721981',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 49,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'url',
            'description' => 'URL',
            'property_name' => 'property',
            'property_value' => 'og:url',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/vig-pessoal-escolta.html',
            'priority' => 30
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 50,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'image',
            'description' => 'Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 25
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 51,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:type',
            'description' => 'Tipo de Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:type',
            'content_name' => "content",
            'content_value' => 'image/jpeg',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 54,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:width',
            'description' => 'Largura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:width',
            'content_name' => "content",
            'content_value' => '292',
            'priority' => 15
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 55,
            'page_id' => 3,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:height',
            'description' => 'Altura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:height',
            'content_name' => "content",
            'content_value' => '560',
            'priority' => 10
        ]);
        // Linkedin Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 56,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:card',
            'description' => 'Card do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:card',
            'content_name' => "content",
            'content_value' => 'summary',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 57,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:creator',
            'description' => 'Criador',
            'property_name' => 'name',
            'property_value' => 'twitter:creator',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 58,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:site',
            'description' => 'Site do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:site',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 59,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:domain',
            'description' => 'Dominio',
            'property_name' => 'name',
            'property_value' => 'twitter:domain',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/vig-pessoal-escolta.html',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 60,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:title',
            'description' => 'Título',
            'property_name' => 'name',
            'property_value' => 'twitter:title',
            'content_name' => "content",
            'content_value' => 'Vigilância Pessoal e Escolta - Grupo Pro Security',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 61,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:description',
            'description' => 'Descrição do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 62,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:image',
            'description' => 'Imagem',
            'property_name' => 'name',
            'property_value' => 'twitter:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 30
        ]);
        // Google Plus Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 63,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'name',
            'description' => 'Nome no Google Plus',
            'property_name' => 'itemprop',
            'property_value' => 'name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 64,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Description',
            'description' => 'Descrição no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 10
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 65,
            'page_id' => 3,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Image',
            'description' => 'Imagem no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 10
        ]);

        // Home Meta Tags
        // Facebook Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 66,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'locale',
            'description' => 'Informações sobre localidade',
            'property_name' => 'property',
            'property_value' => 'og:locale',
            'content_name' => "content",
            'content_value' => 'pt_BR',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 67,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'title',
            'description' => 'Titulo',
            'property_name' => 'property',
            'property_value' => 'og:title',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security | Segurança e Serviços',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 68,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'site_name',
            'description' => 'Nome do Site',
            'property_name' => 'property',
            'property_value' => 'og:site_name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 69,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'type',
            'description' => 'Tipo de conteúdo',
            'property_name' => 'property',
            'property_value' => 'og:type',
            'content_name' => "content",
            'content_value' => 'website',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 70,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'description',
            'description' => 'Descrição',
            'property_name' => 'property',
            'property_value' => 'og:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 71,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'app_id',
            'description' => 'Facebook Application Idebtificator',
            'property_name' => 'property',
            'property_value' => 'fb:app_id',
            'content_name' => "content",
            'content_value' => '132834930721981',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 72,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'url',
            'description' => 'URL',
            'property_name' => 'property',
            'property_value' => 'og:url',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/',
            'priority' => 30
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 73,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'image',
            'description' => 'Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 25
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 74,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:type',
            'description' => 'Tipo de Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:type',
            'content_name' => "content",
            'content_value' => 'image/jpeg',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 75,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:width',
            'description' => 'Largura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:width',
            'content_name' => "content",
            'content_value' => '292',
            'priority' => 15
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 76,
            'page_id' => 4,
            's_e_o_tag_type_id' => 1,
            'name' => 'image:height',
            'description' => 'Altura da Imagem',
            'property_name' => 'property',
            'property_value' => 'og:image:height',
            'content_name' => "content",
            'content_value' => '560',
            'priority' => 10
        ]);
        // Linkedin Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 77,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:card',
            'description' => 'Card do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:card',
            'content_name' => "content",
            'content_value' => 'summary',
            'priority' => 60
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 78,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:creator',
            'description' => 'Criador',
            'property_name' => 'name',
            'property_value' => 'twitter:creator',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 55
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 79,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:site',
            'description' => 'Site do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:site',
            'content_name' => "content",
            'content_value' => '@prosecurityplus',
            'priority' => 50
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 80,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:domain',
            'description' => 'Dominio',
            'property_name' => 'name',
            'property_value' => 'twitter:domain',
            'content_name' => "content",
            'content_value' => 'http://prosecurity.com.br/',
            'priority' => 45
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 81,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:title',
            'description' => 'Título',
            'property_name' => 'name',
            'property_value' => 'twitter:title',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 40
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 82,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:description',
            'description' => 'Descrição do Twitter',
            'property_name' => 'name',
            'property_value' => 'twitter:description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 35
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 83,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'twitter:image',
            'description' => 'Imagem',
            'property_name' => 'name',
            'property_value' => 'twitter:image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 30
        ]);
        // Google Plus Metatags - Defaults
        DB::table('s_e_o_tags')->insert([
            'id' => 84,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'name',
            'description' => 'Nome no Google Plus',
            'property_name' => 'itemprop',
            'property_value' => 'name',
            'content_name' => "content",
            'content_value' => 'Grupo Pro Security',
            'priority' => 20
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 85,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Description',
            'description' => 'Descrição no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'description',
            'content_name' => "content",
            'content_value' => 'Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.',
            'priority' => 10
        ]);
        DB::table('s_e_o_tags')->insert([
            'id' => 86,
            'page_id' => 4,
            's_e_o_tag_type_id' => 2,
            'name' => 'Google Plus Image',
            'description' => 'Imagem no Google+',
            'property_name' => 'itemprop',
            'property_value' => 'image',
            'content_name' => "content",
            'content_value' => 'http://www.prosecurity.com.br/imgs/share.jpg',
            'priority' => 10
        ]);
    }

}
