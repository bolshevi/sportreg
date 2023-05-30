<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert([
            [
                'title' => 'Плавание',
                'date' => '27.05.2023',
                'start_time' => '12:00',
                'duration' => '60',
                'description' => 'Описание плавания',
                'coach' => 'Геннадий Горин',
                'price' => '500',
                'img' => '/img/image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Хоккей',
                'date' => '28.05.2023',
                'start_time' => '15:00',
                'duration' => '90',
                'description' => 'Описание хоккея',
                'coach' => 'Александр Овечкин',
                'price' => '1500',
                'img' => '/img/image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Футбол',
                'date' => '27.05.2023',
                'start_time' => '19:00',
                'duration' => '120',
                'description' => 'Описание футбола',
                'coach' => 'Валерий Карпин',
                'price' => '1500',
                'img' => '/img/image3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Кроссфит',
                'date' => '27.05.2023',
                'start_time' => '15:00',
                'duration' => '60',
                'description' => 'Описание кроссфита',
                'coach' => 'Игорь Войтенко',
                'price' => '1000',
                'img' => '/img/image4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
