<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::orderBy('english')->paginate(20);
        return view('words.index', compact('words'));
    }

    public function show($id)
    {
        $word = Word::findOrFail($id);
        return view('words.show', compact('word'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $words = Word::where('english', 'LIKE', "%{$query}%")
            ->orWhere('greek', 'LIKE', "%{$query}%")
            ->orWhere('transliteration', 'LIKE', "%{$query}%")
            ->paginate(20);
        
        return view('words.index', compact('words', 'query'));
    }
}