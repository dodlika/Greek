@extends('layouts.app')

@section('title', $word->greek . ' - Greek Word')

@section('content')
    <div class="mb-6">
        <a href="{{ route('words.index') }}" class="text-blue-600 hover:text-blue-800">
            &larr; Back to Words
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex flex-col md:flex-row justify-between md:items-center mb-6">
            <h1 class="text-3xl font-bold text-blue-700 greek-text">{{ $word->greek }}</h1>
            <div class="text-xl text-gray-600 mt-2 md:mt-0">{{ $word->english }}</div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-xl font-semibold mb-3">Details</h2>
                <div class="bg-gray-50 p-4 rounded">
                    <div class="mb-4">
                        <div class="text-sm text-gray-500">Transliteration</div>
                        <div class="text-lg">{{ $word->transliteration }}</div>
                    </div>
                    <div class="mb-4">
                        <div class="text-sm text-gray-500">Part of Speech</div>
                        <div>{{ $word->part_of_speech }}</div>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-3">Example</h2>
                <div class="bg-gray-50 p-4 rounded">
                    @if($word->example_sentence)
                        <div class="mb-2">
                            <div class="text-sm text-gray-500">Greek Sentence</div>
                            <div class="greek-text">{{ $word->example_sentence }}</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500">English Translation</div>
                            <div>{{ $word->example_translation }}</div>
                        </div>
                    @else
                        <div class="text-gray-500 italic">No example available</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection