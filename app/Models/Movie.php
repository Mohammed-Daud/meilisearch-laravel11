<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Movie extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['title', 'genre', 'year', 'cast', 'story'];

    //for index in melisearch
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'genre' => $this->genre,
            'year'  => $this->year,
            'cast'  => $this->cast,
            'story' => $this->story,
        ];
    }
}
