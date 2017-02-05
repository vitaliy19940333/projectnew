<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //Method First
        DB::insert(
            "INSERT INTO `articles` (`name`,`text`,`img`) VALUES (?,?,?)",
            [
                "first",
               "FirstText",
                "pick1.jpg"
            ]
       );


        //Method Second
        DB::table('articles')->insert([
            [
                "name" => 'tableTitle',
                "text" => 'tableText',
                "img" => 'pic2.jpg'
            ],
            [
                "name" => 'tableTsdfitle',
                "text" => 'tablsdfdeText',
                "img" => 'pic4.jpg'
            ]
        ]);

        Article::create([
            'name' => 'tablesdfsdTitle',
            'text' => 'tablesdfsdText',
            'img' => 'pic4.jpg'
        ]);
    }
}
