@extends('layouts.app')

@section('title', 'Learn Greek - Home')

@section('content')
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-blue-700 mb-4">Welcome to Learn Greek</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Explore the beautiful Greek language through our vocabulary lists and grammar guides.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Featured Words</h2>
            <div class="space-y-4">
                @foreach($randomWords as $word)
                    <div class="border-b pb-3">
                        <div class="flex justify-between">
                            <span class="text-xl greek-text font-bold">{{ $word->greek }}</span>
                            <span class="text-gray-600">{{ $word->english }}</span>
                        </div>
                        <div class="text-sm text-gray-500">{{ $word->transliteration }} - {{ $word->part_of_speech }}</div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="{{ route('words.index') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                    View All Words
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-blue-600 mb-4">Grammar Highlights</h2>
            <div class="space-y-4">
                @foreach($recentGrammarRules as $rule)
                    <div class="border-b pb-3">
                        <h3 class="text-lg font-semibold">{{ $rule->title }}</h3>
                        <p class="text-gray-600 line-clamp-2">{{ $rule->description }}</p>
                        <div class="mt-2">
                            <a href="{{ route('grammar.show', $rule->id) }}" class="text-blue-600 hover:text-blue-800">Read more →</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-6">
                <a href="{{ route('grammar.index') }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                    View All Grammar Rules
                </a>
            </div>
        </div>
    </div>
@endsection