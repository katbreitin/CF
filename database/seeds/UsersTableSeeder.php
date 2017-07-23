<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => $faker->unique()->email,
            'password' => bcrypt('secret'),
            'phone' => '402-415-9077',
            'role' => $faker->randomElement(['adm']),
            'effective_dt' => date("Y-m-d H:i:s"),
            'termination_dt' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
        ]);

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->email,
                'password' => bcrypt('secret'),
                'phone' => '402-415-9077',
                'role' => $faker->randomElement(['vst' ,'mbr']),
                'effective_dt' => date("Y-m-d H:i:s"),
                'termination_dt' => date("Y-m-d H:i:s"),
                'updated_by_user_id' => 1
            ]);
        }
    }
}
