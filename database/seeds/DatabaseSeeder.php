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
           'name' => "Entretenimiento",
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
       DB::table('questions')->insert([
             'id' => 4,
             'text' => "La capital mas al norte del planeta es Reikiavik",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 5,
             'text' => "Actualmente hay 1500 volcanes activos en todo el mundo",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 6,
             'text' => "El monte Everest se encuentra en la frontera de China y Nepal",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 7,
             'text' => "El estrecho de Gibraltar separa España y Marruecos",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 8,
             'text' => "Serbia no tiene acceso al Mar Mediterraneo",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 9,
             'text' => "Riga es la capital de Estonia",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 10,
             'text' => "Hay 6 oceanos en todo el mundo",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 11,
             'text' => "El mundo posee 5 continentes",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 12,
             'text' => "El rio mas largo del mundo es el Amazonas",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 13,
             'text' => "El Desierto de Gobi se encuenta en Africa",
             'value' => '0',
             'category_id' => '2'
         ]);
         DB::table('questions')->insert([
          'id' => 14,
          'text' => "El cruce de un asno y una yegua, se llama mulo",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 15,
          'text' => "El tomate es una fruta",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 16,
          'text' => "0,001 gramos es lo mismo que 1000 microgramos",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 17,
          'text' => "Los electrones son particulas con carga negativa",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 18,
          'text' => "El sol es una estrella",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 19,
          'text' => "La principal funcion de los globulos rojos es coagular la sangre",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 20,
          'text' => "La radiacion infrarroja produce quemaduras en la piel",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 21,
          'text' => "Los cromosomas estan formados por ARN",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 22,
          'text' => "La luz viaja a 30000 km/s",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 23,
          'text' => "La Ballena respira por las branquias",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
             'id' => 24,
             'text' => "Slatan Ibrahimovic fue el primer sueco en jugar en Barcelona de España",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 25,
             'text' => "El tenis de mesa se invento en Corea del Sur",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 26,
             'text' => "El mundial de futbol del 2002 fue ganado por Italia",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 27,
             'text' => "Richard Petty fue un corredor de F1",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 28,
             'text' => "El estadio de futbol con mayor capacidad de LatinoAmerica es el Maracana de Brasil",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 29,
             'text' => "El giro de Italia es una competencia de ciclismo",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 30,
             'text' => "Un tiro libre en el Basket, vale 1 punto",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 31,
             'text' => "El Jeet kune do fue inventado por Bruce Lee",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 32,
             'text' => "Un Equipo de rubgy esta compuesto por 15 jugadores",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 33,
             'text' => "La seleccion Argentina jugo 4 finales del mundo en futbol",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 34,
             'text' => "Sherlock Holmes vivia en el 221B de Baker Street",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 35,
             'text' => "El tunel fue escrito por Ernesto Sabato",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 36,
             'text' => "Una prosopografia describe el fisico de una persona",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 37,
             'text' => "Socrates dijo: 'Solo se que no se nada'",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 38,
             'text' => "Diego Rivera estaba casado con Frida Kahlo",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 39,
             'text' => "El libro 11 minutos fue escrito por Pablo Neruda",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 40,
             'text' => "Un saxofon esta hecho de cobre",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 41,
             'text' => "Steve Vai es el guitarrista de la banda Chickenfoot",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 42,
             'text' => "El museo Domus, esta ubicado en San Sebastian",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 43,
             'text' => "La cancion Maldito Duende, es de la banda española Baron Rojo",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 44,
             'text' => "Twitter se fundo en el año 2005",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 45,
             'text' => "John Lennon nacio en Londres",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 46,
             'text' => "El disco de 2008 'HardCandy' es de Britney Spears",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 47,
             'text' => "La serie Friends tiene 265 capitulos",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 48,
             'text' => "Jafar es un personaje del Rey Leon",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 49,
             'text' => "Vivir mi vida, es interpretada por Marc Anthony",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 50,
             'text' => "La cancion 'Un mundo ideal' es de Aladdin",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 51,
             'text' => "La mascota de la firma SEGA es Sonic",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 52,
             'text' => "Pinocho se estreno en 1940",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 53,
             'text' => "En la serie Mad Men, el protagonista es un publicista",
             'value' => '1',
             'category_id' => '5'
         ]);

        //  LEVELS
        DB::table('levels')->insert([
          'id' => 1,
          'time' => 60,
          'score' => 30,
      ]);
    DB::table('levels')->insert([
          'id' => 2,
          'time' => 40,
          'score' => 60,
      ]);
  }
}
