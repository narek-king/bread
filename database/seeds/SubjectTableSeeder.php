<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('subjects')->insert([
            ['id' => 1, 'name' => "Եկեղեցի"],
            ['id' => 2, 'name' => "Ավետարանչություն"],
            ['id' => 3, 'name' => "Հավատք"],
            ['id' => 4, 'name' => "Ընտանիք"],
            ['id' => 5, 'name' => "Ֆինանս"],
            ['id' => 6, 'name' => "Աստված"],
            ['id' => 7, 'name' => "Պայքար"],
            ['id' => 8, 'name' => "Աղոթք"],
            ['id' => 9, 'name' => "Հոգևոր աճ"],
        ]);
    }
}
