<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subject')->truncate();

        DB::table('subject')->insert([
            [
                'Name'        => 'Безопасность жизнедеятельности',
                'Description' => '1',
                'Hours'       => 36,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'Иностранный язык в профессиональной деятельности',
                'Description' => '2',
                'Hours'       => 80,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'Физическая культура',
                'Description' => '3',
                'Hours'       => 120,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'Элементы высшей математики',
                'Description' => '4',
                'Hours'       => 90,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.01.01 Разработка программных модулей/1 подгруппа',
                'Description' => '5',
                'Hours'       => 140,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.01.01 Разработка программных модулей/2 подгруппа',
                'Description' => '6',
                'Hours'       => 140,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.01.02 Поддержка и тестирование программных модулей/1 подгруппа',
                'Description' => '7',
                'Hours'       => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.01.02 Поддержка и тестирование программных модулей/2 подгруппа',
                'Description' => '8',
                'Hours'       => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.04.01 Внедрение и поддержка компьютерных систем/1 подгруппа',
                'Description' => '9',
                'Hours'       => 110,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.04.01 Внедрение и поддержка компьютерных систем/2 подгруппа',
                'Description' => '10',
                'Hours'       => 110,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.11.01 Технология разработки и защиты баз данных/1 подгруппа',
                'Description' => '11',
                'Hours'       => 130,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.11.01 Технология разработки и защиты баз данных/2 подгруппа',
                'Description' => '12',
                'Hours'       => 130,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.8.13.04 Проектирование и разработка веб-приложений/1 подгруппа',
                'Description' => '13',
                'Hours'       => 150,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.8.13.04 Проектирование и разработка веб-приложений/2 подгруппа',
                'Description' => '14',
                'Hours'       => 150,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.8.13.05 Разработка компьютерных игр и мультимедийных приложений/1 подгруппа',
                'Description' => '15',
                'Hours'       => 160,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'МДК.8.13.05 Разработка компьютерных игр и мультимедийных приложений/2 подгруппа',
                'Description' => '16',
                'Hours'       => 160,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'УП.04 Учебная практика/1 подгруппа (УП.04)',
                'Description' => '17',
                'Hours'       => 72,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'УП.04 Учебная практика/2 подгруппа (УП.04)',
                'Description' => '18',
                'Hours'       => 72,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'УП.11 Учебная практика/1 подгруппа (УП.11)',
                'Description' => '19',
                'Hours'       => 72,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'Name'        => 'УП.11 Учебная практика/2 подгруппа (УП.11)',
                'Description' => '20',
                'Hours'       => 72,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
