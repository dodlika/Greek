@extends('layouts.app')

@section('title', 'Greek Grammar')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Greek Grammar Rules</h1>
        
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow p-4 sticky top-4">
                    <h2 class="text-xl font-semibold mb-4">Categories</h2>
                    <ul class="space-y-2">
                        @foreach($categories as $cat)
                            <li>
                                <a 
                                    href="{{ route('grammar.category', $cat) }}" 
                                    class="text-blue-600 hover:text-blue-800 capitalize"
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
                    @foreach($grammarRules as $rule)
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">
                                <a href="{{ route('grammar.show', $rule->id) }}" class="text-blue-600 hover:text-blue-800">
                                    {{ $rule->title }}
                                </a>
                            </h3>
                            <div class="text-sm text-gray-500 mb-3 capitalize">Category: {{ $rule->category }}</div>
                            <p class="text-gray-600 mb-3">{{ Str::limit($rule->description, 150) }}</p>
                            <a href="{{ route('grammar.show', $rule->id) }}" class="text-blue-600 hover:text-blue-800">
                                Read more →
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection