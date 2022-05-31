<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\NotificationLevels::create([
            'name' => 'Urgente',
            'color' => '990000',
        ]);
        \App\Models\NotificationLevels::create([
            'name' => 'Bajo',
            'color' => '880000',
        ]);
        \App\Models\NotificationLevels::create([
            'name' => 'Medio',
            'color' => '550000',
        ]);

        \App\Models\Categories::create([
            'name' => 'Tramites',
        ]);
        \App\Models\Categories::create([
            'name' => 'Cultural',
        ]);
    }
}
