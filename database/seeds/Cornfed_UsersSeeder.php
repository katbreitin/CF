<?php

use Illuminate\Database\Seeder;


class Cornfed_UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Fake/Factory::create();

           users::truncate();

           for ($i=0; $i<50; $i++)
           {
               $painting = users::create(array(



           }

    }
}
