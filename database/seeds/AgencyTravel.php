<?php

use Illuminate\Database\Seeder;
use App\Agency;
use Faker\Generator as Faker;

class AgencyTravel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_agency = new Agency();
            $new_agency->name = $faker->name();
            $new_agency->city = $faker->city();
            $new_agency->address = $faker->streetAddress();
            $new_agency->postal_code = $faker->postcode();
            $new_agency->state = $faker->state();
            $new_agency->mail = $faker->email();
            $new_agency->phone = 123; 
            $new_agency->p_iva = 123; 
            $new_agency->save(); 
        }
    }
}
