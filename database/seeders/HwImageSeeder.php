<?php

namespace Database\Seeders;

use App\Models\HwImage;
use Faker\Factory;
use Illuminate\Database\Seeder;

class HwImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HwImage::truncate(); //把所有資料清空, 並重置主鍵
        $faker = Factory::create('zh_TW');
        HwImage::create([
            'image_no' => $faker->name,
            'image_url' => $faker->name,
        ]);
    }
}