<?php

use Illuminate\Database\Seeder;

class ContentSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert(
            "INSERT INTO `static_content` (`title`,`text`) VALUES (?,?)",
            [
                "first",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate distinctio ea est laborum magnam natus odit. Aliquam doloremque, eaque, eum impedit, itaque nemo nisi reiciendis rem reprehenderit voluptas voluptate."
            ]
        );
    }
}
