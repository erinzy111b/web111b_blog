<?php

namespace Database\Seeders;

use App\Models\hw_image;
use Faker\Factory;
use Illuminate\Database\Seeder;

class hw_imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        hw_image::truncate(); //把所有資料清空, 並重置主鍵
        $faker = Factory::create('zh_TW');
        hw_image::create([
            'image_no' => $faker->name,
            'image_url' => $faker->name,
        ]);
    }
}