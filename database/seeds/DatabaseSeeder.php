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
  // USERS
       DB::table('users')->insert([
             'id' => 1,
             'name' => "admin",
             'email' => 'admin@hotmail.com',
             'password' => bcrypt('12345678'),
             'avatar' => 'imgperfil/1.jpg',
             'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
         ]);
         DB::table('users')->insert([
           'id' => 2,
           'name' => "ceci",
           'email' => 'ccy_009@hotmail.com',
           'password' => bcrypt('12345678'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
           ]);
           
           DB::table('users')->insert([
                 'id' => 3,
                 'name' => "pablo",
                 'email' => 'pablo@hotmail.com',
                 'password' => bcrypt('12345678'),                 
                 'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
             ]);
           // CATEGORY
         DB::table('category')->insert([
           'id' => 1,
           'name' => "Ciencia",
         ]);
         DB::table('category')->insert([
           'id' => 2,
           'name' => "Geografía",
         ]);
         DB::table('category')->insert([
           'id' => 3,
           'name' => "Deportes",
         ]);
         DB::table('category')->insert([
           'id' => 4,
           'name' => "Arte",
         ]);
         DB::table('category')->insert([
           'id' => 5,
           'name' => "Matematica",
         ]);

  // QUESTIONS
       DB::table('questions')->insert([
             'id' => 1,
             'text' => "El agua hierve a 95 grados",
             'value' => '0',
             'category_id' => '1'
         ]);
       DB::table('questions')->insert([
             'id' => 2,
             'text' => "El componente mínimo que compone los seres vivos es la célula",
             'value' => '1',
             'category_id' => '1'
         ]);
       DB::table('questions')->insert([
             'id' => 3,
             'text' => "India tiene mas habitantes que EEUU",
             'value' => '1',
             'category_id' => '2'
         ]);

    // LEVELS
       DB::table('levels')->insert([
             'id' => 1,
             'time' => 60,
             'score' => 10,
         ]);
       DB::table('levels')->insert([
             'id' => 2,
             'time' => 40,
             'score' => 20,
         ]);
     }
 }
