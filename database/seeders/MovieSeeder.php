<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Inception',
            'genre' => 'Sci-Fi',
            'year' => 2010,
            'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt',
            'story' => 'A thief enters dreams to steal secrets.'
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'genre' => 'Action',
            'year' => 2008,
            'cast' => 'Christian Bale, Heath Ledger',
            'story' => 'Batman faces Joker in Gotham.'
        ]);
    }
}
