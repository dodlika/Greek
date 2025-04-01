@extends('layouts.app')

@section('title', 'Greek Grammar - ' . ucfirst($category))

@section('content')
    <div class="mb-8">
        <div class="mb-6">
            <a href="{{ route('grammar.index') }}" class="text-blue-600 hover:text-blue-800">
                &larr; Back to All Grammar
            </a>
        </div>
        
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Greek Grammar: {{ ucfirst($category) }}</h1>
        
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow p-4 sticky top-4">
                    <h2 class="text-xl font-semibold mb-4">Categories</h2>
                    <ul class="space-y-2">
                        @foreach($categories as $cat)
                            <li>
                                <a 
                                    href="{{ route('grammar.category', $cat) }}" 
                                    class="capitalize {{ $cat == $category ? 'text-blue-800 font-semibold' : 'text-blue-600 hover:text-blue-800' }}"
                                >
                                    {{ $cat }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow divide-y">
                    @if($grammarRules->count() > 0)
                        @foreach($grammarRules as $rule)
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">
                                    <a href="{{ route('grammar.show', $rule->id) }}" class="text-blue-600 hover:text-blue-800">
                                        {{ $rule->title }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 mb-3">{{ Str::limit($rule->description, 150) }}</p>
                                <a href="{{ route('grammar.show', $rule->id) }}" class="text-blue-600 hover:text-blue-800">
                                    Read more →
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="p-6 text-gray-500">
                            No grammar rules found for this category.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection