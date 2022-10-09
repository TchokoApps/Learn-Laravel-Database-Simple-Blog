<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->delete();

        $faker = Faker::create();

        for ($i = 1; $i <= 200; $i++) {
            DB::table('post_tag')->insert([
                'post_id' => $faker->numberBetween(1, 50),
                'tag_id' => $faker->numberBetween(1, 50),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
