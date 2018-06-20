<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        // $this->call(UsersTableSeeder::class);
        // Laratrust Seeder
        $this->call(LaratrustSeeder::class);
        // CMS Seeder
        Eloquent::unguard();
        // Disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        App\Component::truncate();
        App\Element::truncate();
        App\Image::truncate();
        App\Link::truncate();
        App\Page::truncate();
        App\SEOTagType::truncate();
        App\SEOTag::truncate();
        App\Text::truncate();
        
        App\ComponentElement::truncate();
        App\ComponentPage::truncate();
        App\ElementImage::truncate();
        App\ElementLink::truncate();
        App\ElementText::truncate();

        
        $this->call(ComponentSeeder::class);
        $this->call(ElementSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(SEOTagTypeSeeder::class);
        $this->call(SEOTagSeeder::class);
        $this->call(TextSeeder::class);
        // CMS Relationships Seeder
        echo 'Populating relationship tables ...';
        echo "\r\n";
        $this->call(ComponentElementSeeder::class);
        $this->call(ComponentPageSeeder::class);
        $this->call(ElementImageSeeder::class);
        $this->call(ElementLinkSeeder::class);
        $this->call(ElementTextSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
