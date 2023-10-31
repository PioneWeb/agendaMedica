<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        /** @var Team $team */
        $team = Team::factory()->create();
        \App\Models\User::factory()->create([
            'name' => 'Luca',
            'email' => 'luca@s-mart.biz',
            'password' => Hash::make('ALF1123pmp!'),
            'current_team_id' => $team->id,
        ]);
    }
}
