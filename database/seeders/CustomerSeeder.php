<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,20) as $index){
            Customer::create([
                'customer_name' => $faker->name(),
                'addressline' => $faker->address(),
                'town' => $faker->city(),
                'zipcode' => $faker->postcode(),
                'phone'=> $faker->phoneNumber() 
            ]);
        }
    }
}
