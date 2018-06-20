<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PageSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('pages')->insert([
            'id' => 1,
            'slug' => "/",
            'author' => "Studio QI",
            'title' => "Grupo Pro Security | Segurança e Serviços",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 2,
            'slug' => "servicos.html",
            'author' => "Studio QI",
            'title' => "Serviços | Grupo Pro Security",
            'description' => "O Grupo Pro Security tem uma grande variedades de serviços para sua casa, condomínio e/ou empresa.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 3,
            'slug' => "vig-patrimonial.html",
            'author' => "Studio QI",
            'title' => "Vigilância Patrimonial |A Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 4,
            'slug' => "vig-pessoal-escolta.html",
            'author' => "Studio QI",
            'title' => "Vigilância Pessoal e Escolta | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 5,
            'slug' => "portaria-recepcao.html",
            'author' => "Studio QI",
            'title' => "Portaria, Controlador de Acesso e Recepção | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 6,
            'slug' => "seg-eletronica.html",
            'author' => "Studio QI",
            'title' => "Segurança Eletrônica | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 7,
            'slug' => "24h.html",
            'author' => "Studio QI",
            'title' => "Monitoramento 24h | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 8,
            'slug' => "pro-control.html",
            'author' => "Studio QI",
            'title' => "Pro Control | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        
        DB::table('pages')->insert([
            'id' => 9,
            'slug' => "limpeza.html",
            'author' => "Studio QI",
            'title' => "Limpeza e Conservação | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 10,
            'slug' => "servicos-gerais.html",
            'author' => "Studio QI",
            'title' => "Serviços Gerais | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 11,
            'slug' => "atuacao.html",
            'author' => "Studio QI",
            'title' => "Áreas de Atuação - Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 12,
            'slug' => "grupo.html",
            'author' => "Studio QI",
            'title' => "O Grupo | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 13,
            'slug' => "conheca.html",
            'author' => "Studio QI",
            'title' => "Conheça o GPS | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 14,
            'slug' => "resp-social.html",
            'author' => "Studio QI",
            'title' => "Responsabilidade Social | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 15,
            'slug' => "pro-acao.html",
            'author' => "Studio QI",
            'title' => "Pro Ação Criança | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 16,
            'slug' => "pro-acao-campanha.html",
            'author' => "Studio QI",
            'title' => "Pro Ação Criança 2018 | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 17,
            'slug' => "clientes.html",
            'author' => "Studio QI",
            'title' => "Nossos Clientes | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 18,
            'slug' => "rh.html",
            'author' => "Studio QI",
            'title' => "Políticas de RH | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 19,
            'slug' => "fale-conosco.html",
            'author' => "Studio QI",
            'title' => "Fale Conosco | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 20,
            'slug' => "sac.html",
            'author' => "Studio QI",
            'title' => "SAC | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 21,
            'slug' => "trabalhe-conosco.html",
            'author' => "Studio QI",
            'title' => "Trabalhe Conosco | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 22,
            'slug' => "fornecedores.html",
            'author' => "Studio QI",
            'title' => "Cadastro de Fornecedores | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 23,
            'slug' => "contatos.html",
            'author' => "Studio QI",
            'title' => "Endereços e Telefones | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
        DB::table('pages')->insert([
            'id' => 24,
            'slug' => "proposta.html",
            'author' => "Studio QI",
            'title' => "Solicite uma Proposta | Grupo Pro Security",
            'description' => "Com mais de 30 anos de experiência o Grupo Pro Security é a solução ideal para sua empresa ou condomínio.",
            'active' => true
        ]);
    }
}
