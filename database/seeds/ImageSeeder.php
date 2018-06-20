<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('images')->insert([
            'id' => 1,
            'name' => 'Imagem 1 do Banner da Homepage',
            'description' => 'Imagem 1 do Banner da Homepage',
            'subtitle' => 'Imagem 1 do Banner da Homepage',
            'alt' => 'Arquivo de Imagem 1 do Banner da Homepage',
            'src' => 'banner1.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 2,
            'name' => 'Imagem 2 do Banner da Homepage',
            'description' => 'Imagem 1 do Banner da Homepage',
            'subtitle' => 'Imagem 2 do Banner da Homepage',
            'alt' => 'Arquivo de Imagem 2 do Banner da Homepage',
            'src' => 'banner2.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 3,
            'name' => 'Imagem 3 do Banner da Homepage',
            'description' => 'Imagem 3 do Banner da Homepage',
            'subtitle' => 'Imagem 3 do Banner da Homepage',
            'alt' => 'Arquivo de Imagem 3 do Banner da Homepage',
            'src' => 'banner3.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 4,
            'name' => 'Background do Box 1 da Homepage',
            'description' => 'Imagem do Box 1 da Homepage',
            'subtitle' => 'Imagem de Background do Box 1 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 1 da Homepage',
            'src' => 'box1.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 5,
            'name' => 'Background do Box 2 da Homepage',
            'description' => 'Imagem do Box 2 da Homepage',
            'subtitle' => 'Imagem de Background do Box 2 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 2 da Homepage',
            'src' => 'box2.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 6,
            'name' => 'Background do Box 3 da Homepage',
            'description' => 'Imagem do Box 3 da Homepage',
            'subtitle' => 'Imagem de Background do Box 3 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 3 da Homepage',
            'src' => 'box3.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 7,
            'name' => 'Background do Box 4 da Homepage',
            'description' => 'Imagem do Box 4 da Homepage',
            'subtitle' => 'Imagem de Background do Box 4 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 4 da Homepage',
            'src' => 'box4.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 8,
            'name' => 'Background do Box 5 da Homepage',
            'description' => 'Imagem do Box 5 da Homepage',
            'subtitle' => 'Imagem de Background do Box 5 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 5 da Homepage',
            'src' => 'box5.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 9,
            'name' => 'Background do Box 6 da Homepage',
            'description' => 'Imagem do Box 6 da Homepage',
            'subtitle' => 'Imagem de Background do Box 6 da Homepage',
            'alt' => 'Arquivo de Imagem do Background do Box 6 da Homepage',
            'src' => 'box6.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 10,
            'name' => 'Destaque da Homepage',
            'description' => 'Imagem do Destaque da Homepage',
            'subtitle' => 'Imagem de Destaque da Homepage',
            'alt' => 'Arquivo de Imagem do Destaque da Homepage',
            'src' => 'destaque.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 11,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 12,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 1 da Página de Serviços',
            'src' => 'ico-serv-patrimomial.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 13,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box1.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 14,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 2 da Página de Serviços',
            'src' => 'ico-serv-pessoal.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 15,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box2.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 16,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 3 da Página de Serviços',
            'src' => 'ico-portaria.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 17,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box3.jpg',
            'srcset' => '',
        ]);
                        
        DB::table('images')->insert([
            'id' => 18,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 4 da Página de Serviços',
            'src' => 'ico-is.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 19,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box4.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 20,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 5 da Página de Serviços',
            'src' => 'ico-seg-eletronica.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 21,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box5.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 22,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 6 da Página de Serviços',
            'src' => 'ico-24h.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 23,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box6.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 24,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 7 da Página de Serviços',
            'src' => 'ico-procontrol.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 25,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box7.jpg',
            'srcset' => '',
        ]);
       
        DB::table('images')->insert([
            'id' => 26,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 8 da Página de Serviços',
            'src' => 'ico-limpeza.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 27,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box8.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 28,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Icone do Box 9 da Página de Serviços',
            'src' => 'ico-serv-geral.png',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 29,
            'name' => 'Destaque da página de Serviços',
            'description' => 'Imagem do Destaque da página de Serviços',
            'subtitle' => 'Destaque da página de Serviços',
            'alt' => 'Destaque da página de Serviços',
            'src' => 'img-serv-box9.jpg',
            'srcset' => '',
        ]);

         DB::table('images')->insert([
            'id' => 30,
            'name' => 'Destaque da página de Vigilância Patrimonial',
            'description' => 'Imagem do Destaque da página de Vigilância Patrimonial',
            'subtitle' => 'Destaque da página de Vigilância Patrimonial',
            'alt' => 'Destaque da página de Vigilância Patrimonial',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 31,
            'name' => 'Destaque da página de Vigilância Pessoal e Escolta',
            'description' => 'Imagem do Destaque da página de Vigilância Pessoal e Escolta',
            'subtitle' => 'Destaque da página de Vigilância Pessoal e Escolta',
            'alt' => 'Destaque da página de Vigilância Pessoal e Escolta',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 32,
            'name' => 'Destaque da página de Portaria, Controlador de Acesso e Recepção',
            'description' => 'Imagem do Destaque da página de Portaria, Controlador de Acesso e Recepção',
            'subtitle' => 'Destaque da página de Portaria, Controlador de Acesso e Recepção',
            'alt' => 'Destaque da página de Portaria, Controlador de Acesso e Recepção',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 33,
            'name' => 'Destaque da página de Segurança Eletrônica',
            'description' => 'Imagem do Destaque da página de Segurança Eletrônica',
            'subtitle' => 'Destaque da página de Segurança Eletrônica',
            'alt' => 'Destaque da página de Segurança Eletrônica',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 34,
            'name' => 'Destaque da página de Monitoramento 24h',
            'description' => 'Imagem do Banner de Destaque da Página de Monitoramento 24h',
            'subtitle' => 'Destaque da página de Monitoramento 24h',
            'alt' => 'Destaque da página de Monitoramento 24h',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 35,
            'name' => 'Destaque da página de Pro Control',
            'description' => 'Imagem do Banner de Destaque da Página de Pro Control',
            'subtitle' => 'Destaque da página de Pro Control',
            'alt' => 'Destaque da página de Pro Control',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 36,
            'name' => 'Destaque da página de Limpeza e Conservação',
            'description' => 'Imagem do Banner de Destaque da Página de Limpeza e Conservação',
            'subtitle' => 'Destaque da página de Limpeza e Conservação',
            'alt' => 'Destaque da página de Limpeza e Conservação',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 37,
            'name' => 'Destaque da página de Serviços Gerais',
            'description' => 'Imagem do Banner de Destaque da Página de Serviços Gerais',
            'subtitle' => 'Destaque da página de Serviços Gerais',
            'alt' => 'Destaque da página de Serviços Gerais',
            'src' => 'banner-servicos.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 38,
            'name' => 'Destaque da página de Áreas de Atuação',
            'description' => 'Imagem do Banner de Destaque da Página de Áreas de Atuação',
            'subtitle' => 'Destaque da página de Áreas de Atuação',
            'alt' => 'Destaque da página de Áreas de Atuação',
            'src' => 'banner-atuacao.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 39,
            'name' => 'Destaque da página do Grupo',
            'description' => 'Imagem do Banner de Destaque da Página do Grupo',
            'subtitle' => 'Destaque da página do Grupo',
            'alt' => 'Destaque da página do Grupo',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 40,
            'name' => 'Destaque da página Conheça o Grupo Pro Security',
            'description' => 'Imagem do Banner de Destaque da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 41,
            'name' => 'Imagem 1 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 1 do Box 3 da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'sindeprestem.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 42,
            'name' => 'Imagem 2 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 2 do Box 3 da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'crs.png',
            'srcset' => '',
        ]);
        DB::table('images')->insert([
            'id' => 43,
            'name' => 'Imagem 3 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 3 do Box 3 da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'master_escola.png',
            'srcset' => '',
        ]);
        DB::table('images')->insert([
            'id' => 44,
            'name' => 'Imagem 4 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 3 do Box 4 da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'abralimp.jpg',
            'srcset' => '',
        ]);
        DB::table('images')->insert([
            'id' => 45,
            'name' => 'Imagem 5 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 5 do Box 3  da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'sesvesp.jpg',
            'srcset' => 'abrevis.jpg',
        ]);
        DB::table('images')->insert([
            'id' => 46,
            'name' => 'Imagem 6 do Box 3 Página Conheça o Grupo Pro Security',
            'description' => 'Imagem 6 do Box 3  da Página Conheça o Grupo Pro Security',
            'subtitle' => 'Destaque da página Conheça o Grupo Pro Security',
            'alt' => 'Destaque da página Conheça o Grupo Pro Security',
            'src' => 'abrevis.jpg',
            'srcset' => '',
        ]);
        
        DB::table('images')->insert([
            'id' => 47,
            'name' => 'Banner de Destaque da Página de Responsabilidade Social',
            'description' => 'Banner de Destaque da Página de Responsabilidade Social',
            'subtitle' => 'Banner da página Responsabilidade Social',
            'alt' => 'Banner da página Responsabilidade Social',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]); 
        DB::table('images')->insert([
            'id' => 48,
            'name' => 'Imagem 1 da Página de Responsabilidade Social',
            'description' => 'Imagem 1 da Página de Responsabilidade Social',
            'subtitle' => 'Imagem 1 da página Responsabilidade Social',
            'alt' => 'Imagem 1 da página Responsabilidade Social',
            'src' => 'pro_acao.png',
            'srcset' => '',
        ]);
        DB::table('images')->insert([
            'id' => 49,
            'name' => 'Imagem 2 da Página de Responsabilidade Social',
            'description' => 'Imagem 2 da Página de Responsabilidade Social',
            'subtitle' => 'Imagem 2 da página Responsabilidade Social',
            'alt' => 'Imagem 2 da página Responsabilidade Social',
            'src' => 'gol_de_letra.png',
            'srcset' => '',
        ]);    
        DB::table('images')->insert([
            'id' => 50,
            'name' => 'Imagem 3 da Página de Responsabilidade Social',
            'description' => 'Imagem 3 da Página de Responsabilidade Social',
            'subtitle' => 'Imagem 3 da página Responsabilidade Social',
            'alt' => 'Imagem 3 da página Responsabilidade Social',
            'src' => 'samovis.png',
            'srcset' => '',
        ]);    
        DB::table('images')->insert([
            'id' => 51,
            'name' => 'Imagem 4 da Página de Responsabilidade Social',
            'description' => 'Imagem 4 da Página de Responsabilidade Social',
            'subtitle' => 'Imagem 4 da página Responsabilidade Social',
            'alt' => 'Imagem 4 da página Responsabilidade Social',
            'src' => 'vila_da_praia.png',
            'srcset' => '',
        ]);    
        DB::table('images')->insert([
            'id' => 52,
            'name' => 'Imagem 5 da Página de Responsabilidade Social',
            'description' => 'Imagem 5 da Página de Responsabilidade Social',
            'subtitle' => 'Imagem 5 da página Responsabilidade Social',
            'alt' => 'Imagem 5 da página Responsabilidade Social',
            'src' => 'santa_suzana.png',
            'srcset' => '',
        ]);    
        DB::table('images')->insert([
            'id' => 53,
            'name' => 'Banner da Página Pro Ação Crinaça',
            'description' => 'Banner da Página Pro Ação Crinaça',
            'subtitle' => 'Destaque da página Pro Ação Crinaça',
            'alt' => 'Destaque da página Pro Ação Crinaça',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 54,
            'name' => 'Imagem do texto da Página Pro Ação Criança',
            'description' => 'Imagem do texto da Página Pro Ação Criança',
            'subtitle' => 'Imagem do texto da página Pro Ação Criança',
            'alt' => 'Imagem do texto da página Pro Ação Criança',
            'src' => 'logo-pro-acao.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 55,
            'name' => 'Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao009.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 56,
            'name' => 'Thumbnail da Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 1 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao009-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 57,
            'name' => 'Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao010.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 58,
            'name' => 'Thumbnail da Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 2 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao010-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 59,
            'name' => 'Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao011.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 60,
            'name' => 'Thumbnail da Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 3 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao011-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 61,
            'name' => 'Imagem 4 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 4 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 4 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 4 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao012.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 62,
            'name' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao012-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 63,
            'name' => 'Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao013.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 64,
            'name' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 5 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao013-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 65,
            'name' => 'Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao014.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 66,
            'name' => 'Thumbnail da Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 6 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao014-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 67,
            'name' => 'Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao015.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 68,
            'name' => 'Thumbnail da Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 7 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao015-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 69,
            'name' => 'Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao016.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 70,
            'name' => 'Thumbnail da Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'description' => 'Thumbnail da Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'subtitle' => 'Thumbnail da Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'alt' => 'Thumbnail da Imagem 8 do Carrossel de Fotos da Página Pro Ação Criança',
            'src' => 'ProAcao016-t.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 71,
            'name' => 'Banner da Página Pro Ação Crinaça Campanha',
            'description' => 'Banner da Página Pro Ação Crinaça Campanha',
            'subtitle' => 'Destaque da página Pro Ação Crinaça Campanha',
            'alt' => 'Destaque da página Pro Ação Crinaça Campanha',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 72,
            'name' => 'Imagem do texto da Página Pro Ação Crinaça Campanha',
            'description' => 'Imagem do texto da Página Pro Ação Crinaça Campanha',
            'subtitle' => 'Imagem do texto da página Pro Ação Crinaça Campanha',
            'alt' => 'Imagem do texto da página Pro Ação Crinaça Campanha',
            'src' => 'logo-pro-acao.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 73,
            'name' => 'Imagem do Box da Página Pro Ação Crinaça Campanha',
            'description' => 'Imagem do Box da Página Pro Ação Crinaça Campanha',
            'subtitle' => 'Imagem do Box da Página Pro Ação Crinaça Campanha',
            'alt' => 'Pro Ação Criança 2018',
            'src' => 'pro-acao-crianca-1024x576.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 74,
            'name' => 'Banner da Página Clientes',
            'description' => 'Banner da Página Clientes',
            'subtitle' => 'Destaque da página Clientes',
            'alt' => 'Destaque da página Clientes',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 75,
            'name' => 'Imagem do Box 1 da Página Clientes',
            'description' => 'Imagem do Box 1 da Página Clientes',
            'subtitle' => 'Imagem do Box 1 da página Clientes',
            'alt' => 'Imagem do Box 1 da página Clientes',
            'src' => '1_alle.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 76,
            'name' => 'Imagem do Box 2 da Página Clientes',
            'description' => 'Imagem do Box 2 da Página Clientes',
            'subtitle' => 'Imagem do Box 2 da página Clientes',
            'alt' => 'Imagem do Box 2 da página Clientes',
            'src' => '2_atech.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 77,
            'name' => 'Imagem do Box 3 da Página Clientes',
            'description' => 'Imagem do Box 3 da Página Clientes',
            'subtitle' => 'Imagem do Box 3 da página Clientes',
            'alt' => 'Imagem do Box 3 da página Clientes',
            'src' => '3_bg.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 78,
            'name' => 'Imagem do Box 4 da Página Clientes',
            'description' => 'Imagem do Box 4 da Página Clientes',
            'subtitle' => 'Imagem do Box 4 da página Clientes',
            'alt' => 'Imagem do Box 4 da página Clientes',
            'src' => '4_camargo_correa.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 79,
            'name' => 'Imagem do Box 5 da Página Clientes',
            'description' => 'Imagem do Box 5 da Página Clientes',
            'subtitle' => 'Imagem do Box 5 da página Clientes',
            'alt' => 'Imagem do Box 5 da página Clientes',
            'src' => '5_caraiga.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 80,
            'name' => 'Imagem do Box 6 da Página Clientes',
            'description' => 'Imagem do Box 6 da Página Clientes',
            'subtitle' => 'Imagem do Box 6 da página Clientes',
            'alt' => 'Imagem do Box 6 da página Clientes',
            'src' => '6_coferly.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 81,
            'name' => 'Imagem do Box 7 da Página Clientes',
            'description' => 'Imagem do Box 7 da Página Clientes',
            'subtitle' => 'Imagem do Box 7 da página Clientes',
            'alt' => 'Imagem do Box 7 da página Clientes',
            'src' => '7_col_joao_xxiii.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 82,
            'name' => 'Imagem do Box 8 da Página Clientes',
            'description' => 'Imagem do Box 8 da Página Clientes',
            'subtitle' => 'Imagem do Box 8 da página Clientes',
            'alt' => 'Imagem do Box 8 da página Clientes',
            'src' => '8_guilherme_d_v.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 83,
            'name' => 'Imagem do Box 9 da Página Clientes',
            'description' => 'Imagem do Box 9 da Página Clientes',
            'subtitle' => 'Imagem do Box 9 da página Clientes',
            'alt' => 'Imagem do Box 9 da página Clientes',
            'src' => '9_cpv.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 84,
            'name' => 'Imagem do Box 10 da Página Clientes',
            'description' => 'Imagem do Box 10 da Página Clientes',
            'subtitle' => 'Imagem do Box 10 da página Clientes',
            'alt' => 'Imagem do Box 10 da página Clientes',
            'src' => '10_editar.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 85,
            'name' => 'Imagem do Box 11 da Página Clientes',
            'description' => 'Imagem do Box 11 da Página Clientes',
            'subtitle' => 'Imagem do Box 11 da página Clientes',
            'alt' => 'Imagem do Box 11 da página Clientes',
            'src' => '11_enbrageo.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 86,
            'name' => 'Imagem do Box 12 da Página Clientes',
            'description' => 'Imagem do Box 12 da Página Clientes',
            'subtitle' => 'Imagem do Box 12 da página Clientes',
            'alt' => 'Imagem do Box 12 da página Clientes',
            'src' => '12_equilibrio.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 87,
            'name' => 'Imagem do Box 13 da Página Clientes',
            'description' => 'Imagem do Box 13 da Página Clientes',
            'subtitle' => 'Imagem do Box 13 da página Clientes',
            'alt' => 'Imagem do Box 13 da página Clientes',
            'src' => '13_estee_lauder.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 88,
            'name' => 'Imagem do Box 14 da Página Clientes',
            'description' => 'Imagem do Box 14 da Página Clientes',
            'subtitle' => 'Imagem do Box 14 da página Clientes',
            'alt' => 'Imagem do Box 14 da página Clientes',
            'src' => '14_germania.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 89,
            'name' => 'Imagem do Box 15 da Página Clientes',
            'description' => 'Imagem do Box 15 da Página Clientes',
            'subtitle' => 'Imagem do Box 15 da página Clientes',
            'alt' => 'Imagem do Box 15 da página Clientes',
            'src' => '15_gen_atlantic.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 90,
            'name' => 'Imagem do Box 16 da Página Clientes',
            'description' => 'Imagem do Box 16 da Página Clientes',
            'subtitle' => 'Imagem do Box 16 da página Clientes',
            'alt' => 'Imagem do Box 16 da página Clientes',
            'src' => '16_g_hubert.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 91,
            'name' => 'Imagem do Box 17 da Página Clientes',
            'description' => 'Imagem do Box 17 da Página Clientes',
            'subtitle' => 'Imagem do Box 17 da página Clientes',
            'alt' => 'Imagem do Box 17 da página Clientes',
            'src' => '17_hosp_paulista.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 92,
            'name' => 'Imagem do Box 18 da Página Clientes',
            'description' => 'Imagem do Box 18 da Página Clientes',
            'subtitle' => 'Imagem do Box 18 da página Clientes',
            'alt' => 'Imagem do Box 18 da página Clientes',
            'src' => '18_loreal.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 93,
            'name' => 'Imagem do Box 19 da Página Clientes',
            'description' => 'Imagem do Box 19 da Página Clientes',
            'subtitle' => 'Imagem do Box 19 da página Clientes',
            'alt' => 'Imagem do Box 19 da página Clientes',
            'src' => '19_kemira.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 94,
            'name' => 'Imagem do Box 20 da Página Clientes',
            'description' => 'Imagem do Box 20 da Página Clientes',
            'subtitle' => 'Imagem do Box 20 da página Clientes',
            'alt' => 'Imagem do Box 20 da página Clientes',
            'src' => '20_lenc.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 95,
            'name' => 'Imagem do Box 21 da Página Clientes',
            'description' => 'Imagem do Box 21 da Página Clientes',
            'subtitle' => 'Imagem do Box 21 da página Clientes',
            'alt' => 'Imagem do Box 21 da página Clientes',
            'src' => '21_lo_spazio.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 96,
            'name' => 'Imagem do Box 22 da Página Clientes',
            'description' => 'Imagem do Box 22 da Página Clientes',
            'subtitle' => 'Imagem do Box 22 da página Clientes',
            'alt' => 'Imagem do Box 22 da página Clientes',
            'src' => '22_manager.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 97,
            'name' => 'Imagem do Box 23 da Página Clientes',
            'description' => 'Imagem do Box 23 da Página Clientes',
            'subtitle' => 'Imagem do Box 23 da página Clientes',
            'alt' => 'Imagem do Box 23 da página Clientes',
            'src' => '23_marko.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 98,
            'name' => 'Imagem do Box 24 da Página Clientes',
            'description' => 'Imagem do Box 24 da Página Clientes',
            'subtitle' => 'Imagem do Box 24 da página Clientes',
            'alt' => 'Imagem do Box 24 da página Clientes',
            'src' => '24_meng.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 99,
            'name' => 'Imagem do Box 25 da Página Clientes',
            'description' => 'Imagem do Box 25 da Página Clientes',
            'subtitle' => 'Imagem do Box 25 da página Clientes',
            'alt' => 'Imagem do Box 25 da página Clientes',
            'src' => '25_open_center.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 100,
            'name' => 'Imagem do Box 26 da Página Clientes',
            'description' => 'Imagem do Box 26 da Página Clientes',
            'subtitle' => 'Imagem do Box 26 da página Clientes',
            'alt' => 'Imagem do Box 26 da página Clientes',
            'src' => '26_new_kar.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 101,
            'name' => 'Imagem do Box 27 da Página Clientes',
            'description' => 'Imagem do Box 27 da Página Clientes',
            'subtitle' => 'Imagem do Box 27 da página Clientes',
            'alt' => 'Imagem do Box 27 da página Clientes',
            'src' => '27_oxyplas.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 102,
            'name' => 'Imagem do Box 28 da Página Clientes',
            'description' => 'Imagem do Box 28 da Página Clientes',
            'subtitle' => 'Imagem do Box 28 da página Clientes',
            'alt' => 'Imagem do Box 28 da página Clientes',
            'src' => '28_portal.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 103,
            'name' => 'Imagem do Box 29 da Página Clientes',
            'description' => 'Imagem do Box 29 da Página Clientes',
            'subtitle' => 'Imagem do Box 29 da página Clientes',
            'alt' => 'Imagem do Box 29 da página Clientes',
            'src' => '29_probel.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 104,
            'name' => 'Imagem do Box 30 da Página Clientes',
            'description' => 'Imagem do Box 30 da Página Clientes',
            'subtitle' => 'Imagem do Box 30 da página Clientes',
            'alt' => 'Imagem do Box 30 da página Clientes',
            'src' => '30_tapps.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 105,
            'name' => 'Imagem do Box 31 da Página Clientes',
            'description' => 'Imagem do Box 31 da Página Clientes',
            'subtitle' => 'Imagem do Box 31 da página Clientes',
            'alt' => 'Imagem do Box 31 da página Clientes',
            'src' => '31_toktake.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 106,
            'name' => 'Imagem do Box 32 da Página Clientes',
            'description' => 'Imagem do Box 32 da Página Clientes',
            'subtitle' => 'Imagem do Box 32 da página Clientes',
            'alt' => 'Imagem do Box 32 da página Clientes',
            'src' => '32_vetorzero.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 107,
            'name' => 'Banner da Página RH',
            'description' => 'Banner da Página RH',
            'subtitle' => 'Destaque da página RH',
            'alt' => 'Destaque da página RH',
            'src' => 'banner-grupo.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 108,
            'name' => 'Banner da Página Fale Conosco',
            'description' => 'Banner da Página Fale Conosco',
            'subtitle' => 'Destaque da página Fale Conosco',
            'alt' => 'Destaque da página Fale Conosco',
            'src' => 'banner-faleconosco.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 109,
            'name' => 'Banner da Página SAC',
            'description' => 'Banner da Página SAC',
            'subtitle' => 'Destaque da página SAC',
            'alt' => 'Destaque da página SAC',
            'src' => 'banner-faleconosco.jpg',
            'srcset' => '',
        ]);

         DB::table('images')->insert([
            'id' => 110,
            'name' => 'Banner da Página Trabalhe Conosco',
            'description' => 'Banner da Página Trabalhe Conosco',
            'subtitle' => 'Destaque da página Trabalhe Conosco',
            'alt' => 'Destaque da página Trabalhe Conosco',
            'src' => 'banner-faleconosco.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 111,
            'name' => 'Banner da Página Cadastro de Fornecedores',
            'description' => 'Banner da Página Cadastro de Fornecedores',
            'subtitle' => 'Destaque da página Cadastro de Fornecedores',
            'alt' => 'Destaque da página Cadastro de Fornecedores',
            'src' => 'banner-faleconosco.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 112,
            'name' => 'Banner da Página Endereços e Telefones',
            'description' => 'Banner da Página Endereços e Telefones',
            'subtitle' => 'Destaque da página Endereços e Telefones',
            'alt' => 'Destaque da página Endereços e Telefones',
            'src' => 'banner-faleconosco.jpg',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 113,
            'name' => 'Imagem de Destaque da Página Endereços e Telefones',
            'description' => 'Imagem de Destaque da Página Endereços e Telefones',
            'subtitle' => 'Imagem de Destaque da página Endereços e Telefones',
            'alt' => 'Telefones Pro Security',
            'src' => 'tels.png',
            'srcset' => '',
        ]);

        DB::table('images')->insert([
            'id' => 114,
            'name' => 'Banner da Página Proposta',
            'description' => 'Banner da Página Proposta',
            'subtitle' => 'Destaque da página Proposta',
            'alt' => 'Destaque da página Proposta',
            'src' => 'banner-proposta.jpg',
            'srcset' => '',
        ]);
    }
}
