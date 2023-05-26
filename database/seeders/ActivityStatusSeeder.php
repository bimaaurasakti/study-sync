<?php

namespace Database\Seeders;

use App\Models\ActivityStatus;
use Illuminate\Database\Seeder;

class ActivityStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                'name' => 'new',
            ],
            [
                'name' => 'inprogress',
            ],
            [
                'name' => 'done',
            ]
        ];

        ActivityStatus::insert($statuses);
    }
}
