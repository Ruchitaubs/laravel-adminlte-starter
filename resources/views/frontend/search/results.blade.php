@extends('frontend.layout')

@section('title', 'Search Results')

@section('content')
<div class="container mx-auto px-6 py-10">
  <h2 class="text-2xl font-bold mb-6">Results for "<strong>{{ $query }}</strong>" in {{ ucfirst($source) }}</h2>

  @if($results->isEmpty())
    <p>No results found.</p>
  @else
    <ul class="space-y-4">
      @foreach($results as $item)
        <li class="bg-white p-4 rounded shadow">
          <h3 class="font-semibold">{{ $item->title }}</h3>
          <p class="text-sm text-gray-600">{{ $item->authors }}</p>
          <p class="mt-2">{{ $item->abstract }}</p>
        </li>
      @endforeach
    </ul>
  @endif
</div>
@endsection
