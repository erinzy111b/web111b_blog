<?php

namespace Database\Seeders;

use App\Models\Child;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Child::truncate(); //把所有資料清空, 並重置主鍵
        $faker = Factory::create('zh_TW');
        Child::create([
            'subject' => $faker->name,
        ]);
    }
}