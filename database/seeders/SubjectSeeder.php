<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'name' => 'Keamanan Jaringan',
                'initials' => 'kj',
            ],
            [
                'name' => 'Data Warehouse',
                'initials' => 'dw',
            ],
            [
                'name' => 'Praktikum Keamanan Jaringan',
                'initials' => 'pkj',
            ],
            [
                'name' => 'Praktikum Pemrograman Perangkat Bergerak',
                'initials' => 'pppb',
            ],
            [
                'name' => 'Pemodelan Perangkat Lunak',
                'initials' => 'ppl',
            ],
            [
                'name' => 'Pemrograman Framework',
                'initials' => 'pf',
            ],
            [
                'name' => 'Manajemen Perangkat Lunak',
                'initials' => 'mpl',
            ],
            [
                'name' => 'Praktikum Mesin Pembelajaran',
                'initials' => 'pmp',
            ],
            [
                'name' => 'Pemrograman Perangkat Bergerak',
                'initials' => 'ppb',
            ],
            [
                'name' => 'Praktikum Pemodelan Perangkat Lunak',
                'initials' => 'pppl',
            ],
        ];

        Subject::insert($subjects);
    }
}
