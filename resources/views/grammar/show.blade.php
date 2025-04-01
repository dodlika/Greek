@extends('layouts.app')

@section('title', $rule->title . ' - Greek Grammar')

@section('content')
    <div class="mb-6">
        <a href="{{ route('grammar.index') }}" class="text-blue-600 hover:text-blue-800">
            &larr; Back to Grammar
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="mb-6">
            <div class="text-sm text-blue-600 uppercase tracking-wide mb-1">
                <a href="{{ route('grammar.category', $rule->category) }}" class="hover:text-blue-800 capitalize">
                    {{ $rule->category }}
                </a>
            </div>
            <h1 class="text-3xl font-bold text-blue-700">{{ $rule->title }}</h1>
        </div>

        <div class="prose max-w-none mb-8">
            <p>{{ $rule->description }}</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-4">Examples</h2>
            <div class="bg-gray-50 p-4 rounded">
                <ul class="space-y-3">
                    @foreach(json_decode($rule->examples) as $example)
                        <li class="greek-text">{{ $example }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection