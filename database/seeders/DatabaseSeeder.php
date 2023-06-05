<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Family;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name'      => 'Parent',
            'email'     => 'parent@example.com',
            'password'  => bcrypt('secret'),
            'family_id' => Family::factory()->create([
                'name'     => 'Test Family',
                'owner_id' => 1
            ]),
            'parent'    => true,
        ]);

        User::factory()->create([
            'name'      => 'Child',
            'email'     => 'child@example.com',
            'password'  => bcrypt('secret'),
            'family_id' => 1,
            'parent'    => false,
        ]);
    }
}
