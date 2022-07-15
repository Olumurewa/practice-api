<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcriptions;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i<10; $i++){
            Subcriptions::Create([
                'website_id'=>$faker->randomNumber(),
                'Subscriber_id'=>$faker->randomNumber(),
            ]);
        }
    }
}
