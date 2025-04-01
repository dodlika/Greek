<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'greek',
        'transliteration',
        'english',
        'part_of_speech',
        'example_sentence',
        'example_translation',
    ];
}