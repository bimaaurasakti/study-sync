<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'subject_id' => 5,
                'due_date' => Carbon::create(2023, 5, 14),
                'title' => 'Video Progress Pengembangan Project Akhir',
                'description' => 'Membuat video progres pengembangan aplikasi project akhir perkelompok',
            ],
            [
                'subject_id' => 8,
                'due_date' => Carbon::create(2023, 5, 14),
                'title' => 'Dentisy & Hierarchical Clustering',
                'description' => 'Membuat resume tentang Density dan Hierarchical Clustering dan dikumpulkan pada google spreadsheet',
            ],
            [
                'subject_id' => 2,
                'due_date' => Carbon::create(2023, 5, 12),
                'title' => 'Implementasi Partisi Table',
                'description' => 'Mengimplementasikan partisi tabel yang melanjutkan dari langkah-langkah sebelumnya dan sesuai dengan kelompok sebelumnya',
            ],
            [
                'subject_id' => 3,
                'due_date' => Carbon::create(2023, 5, 9),
                'title' => 'A01 Broken Access Control',
                'description' => 'Membuat resume tentang OWASP Juice Shop kategori A01 yaitu Broken Access Control dan juga membuat video demo pengerjaannya',
            ],
        ];

        foreach($tasks as $task) {
            Task::create($task);
        }
    }
}
