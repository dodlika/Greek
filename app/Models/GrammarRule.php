<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrammarRule extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'examples',
        'category',
        'order',
    ];

    protected $casts = [
        'examples' => 'array',
    ];
}