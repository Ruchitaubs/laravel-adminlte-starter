@extends('frontend.layout')

@section('title', 'Search')

@section('content')
<div class="container mx-auto px-6 py-10">
  <h2 class="text-2xl font-bold mb-6">Search Scholarly Articles</h2>
  <form action="{{ route('search.execute') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label for="source" class="block mb-1">Source</label>
      <select id="source" name="source" class="border rounded w-full p-2">
        <option value="scopus">Scopus</option>
        <option value="wos">Web of Science</option>
        <option value="doaj">DOAJ</option>
        <option value="engineering">Engineering Village</option>
      </select>
    </div>
    <div>
      <label for="query" class="block mb-1">Keyword or Title</label>
      <input type="text" id="query" name="query" class="border rounded w-full p-2" required>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
      Search
    </button>
  </form>
</div>
@endsection
