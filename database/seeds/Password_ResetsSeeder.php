<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Password_ResetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //

        $faker = Fake/Factory::create();

        users::truncate();

        for ($i=0; $i<10; $i++)
        {
            $user = users::create(array(
                'email' => $faker->realText(rand(10,20)),
                'token'=> $faker->number,(rand(10,15)),
                'timestamp'=> $faker->dateandtime(rand(5,10));

     }
  }

}