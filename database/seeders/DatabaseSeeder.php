<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //untuk memberi tahu 'Task::factory' (Task nama database/table) :: (factory nama cara nya dan untuk memberi tahu jumlah yg ingin di munculkan datanya)
        //terhubung dengan model
        \App\Models\Task::factory(15)->create();

    }
}
