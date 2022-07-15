<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Websites;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // for ($i=0; $i<20; $i++){
        //     Websites::Create([
        //         ''=>$faker->name,
        //         'email'=>$faker->email,
        //     ]);
        //}
    }
}
