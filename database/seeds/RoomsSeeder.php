<?php

use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'room_number' => 1,
            'capacity' => 20,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
            ]);

        DB::table('rooms')->insert([
            'room_number' => 2,
            'capacity' => 20,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
        ]);

        DB::table('rooms')->insert([
            'room_number' => 3,
            'capacity' => 20,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
        ]);

        DB::table('rooms')->insert([
            'room_number' => 4,
            'capacity' => 20,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
        ]);

        DB::table('rooms')->insert([
            'room_number' => 5,
            'capacity' => 20,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'updated_by_user_id' => 1
        ]);
    }
}
