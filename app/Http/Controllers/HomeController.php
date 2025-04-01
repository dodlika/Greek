<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\GrammarRule;

class HomeController extends Controller
{
    public function index()
    {
        $randomWords = Word::inRandomOrder()->take(5)->get();
        $recentGrammarRules = GrammarRule::orderBy('order')->take(3)->get();
        
        return view('home', compact('randomWords', 'recentGrammarRules'));
    }
}