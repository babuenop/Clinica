<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class motivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
		for ($i=0; $i < 10; $i++) {
		    \DB::table('motivos')->insert(array(
		           'motivo'  => $faker->randomElement(['emergencia','atencion','chequeo_general']),
		           'created_at' => date('Y-m-d H:m:s'),
		           'updated_at' => date('Y-m-d H:m:s')
		    ));
		}
    }
}
