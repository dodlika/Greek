<?php

namespace App\Http\Controllers;

use App\Models\GrammarRule;
use Illuminate\Http\Request;

class GrammarController extends Controller
{
    public function index()
    {
        $categories = GrammarRule::select('category')
            ->distinct()
            ->orderBy('category')
            ->get()
            ->pluck('category');
            
        $grammarRules = GrammarRule::orderBy('order')->get();
        
        return view('grammar.index', compact('grammarRules', 'categories'));
    }

    public function show($id)
    {
        $rule = GrammarRule::findOrFail($id);
        return view('grammar.show', compact('rule'));
    }

    public function byCategory($category)
    {
        $grammarRules = GrammarRule::where('category', $category)
            ->orderBy('order')
            ->get();
            
        $categories = GrammarRule::select('category')
            ->distinct()
            ->orderBy('category')
            ->get()
            ->pluck('category');
            
        return view('grammar.category', compact('grammarRules', 'category', 'categories'));
    }
}