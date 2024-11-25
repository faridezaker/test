<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Episode;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create()->each(function ($user) {
            Course::factory(5)->create(['user_id' => $user->id])->each(function ($course) use ($user) {
                Episode::factory(rand(1, 5))->make()->each(function ($episode, $key) use ($course) {
                    $episode->number = $key + 1;
                    $course->episodes()->save($episode);
                });
            });
        });
    }
}
