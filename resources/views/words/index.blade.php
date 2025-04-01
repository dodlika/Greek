@extends('layouts.app')

@section('title', 'Greek Vocabulary')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">Greek Vocabulary</h1>
        
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <form action="{{ route('words.search') }}" method="GET" class="flex gap-2">
                <input 
                    type="text" 
                    name="query" 
                    placeholder="Search words in English or Greek..." 
                    class="flex-grow px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ $query ?? '' }}"
                >
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Search
                </button>
            </form>
        </div>
        
        @if(isset($query))
            <div class="mb-4">
                <p class="text-gray-600">Search results for: <span class="font-bold">{{ $query }}</span></p>
            </div>
        @endif
        
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Greek</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Transliteration</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">English</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Part of Speech</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($words as $word)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-lg greek-text font-medium">{{ $word->greek }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $word->transliteration }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $word->english }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $word->part_of_speech }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('words.show', $word->id) }}" class="text-blue-600 hover:text-blue-900">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            {{ $words->links() }}
        </div>
    </div>
@endsection