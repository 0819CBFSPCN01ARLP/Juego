<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table("questions") -> insert(
            [
                "text" => "",
                "value" => "",
                "category_id" => ""
            ]
            );
    }
}
