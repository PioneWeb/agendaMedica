<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /** @var Team $team */
        $team = Team::factory()->create();
        User::factory()->create([
            'name' => 'Luca',
            'email' => 'luca@s-mart.biz',
            'password' => Hash::make('ALF1123pmp!'),
            'current_team_id' => $team->id,
        ]);
    }
}
