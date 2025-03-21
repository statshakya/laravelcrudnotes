<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure User ID 1 exists
        $user = User::firstOrCreate(
            ['id' => 1], // Avoids duplicate primary key error
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('sas123'),
            ]
        );

        // Delete all existing notes for user_id = 1
        Note::where('user_id', $user->id)->delete();

        // Create new notes with titles for user_id = 1
        Note::factory(100)->create([
            'user_id' => $user->id, // Explicitly assign user_id = 1
        ]);
    }
}