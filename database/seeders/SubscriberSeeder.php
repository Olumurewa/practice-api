<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscribers;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i<12; $i++){
            Subscribers::Create([
                'name'=>$faker->name,
                'email'=>$faker->email,
            ]);
        }
    }
}
