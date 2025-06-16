@extends('frontend.layout')

@section('title', 'Welcome to MySite')

@section('content')
<section class="bg-blue-600 text-white py-20">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-4xl font-bold mb-4">Effortless Research Discovery</h2>
    <p class="text-lg mb-6">Search academic content across Scopus, WOS, DOAJ, and more.</p>
    <a href="/search" class="bg-white text-blue-600 px-6 py-3 rounded shadow hover:bg-gray-200">
      Get Started
    </a>
  </div>
</section>

<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">
    <div>
      <h3 class="text-xl font-semibold mb-2">Lightning Fast</h3>
      <p>Optimized for rapid queries across major indices.</p>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-2">Comprehensive</h3>
      <p>Scopus, Web of Science, DOAJ, Engineering Village—and growing.</p>
    </div>
    <div>
      <h3 class="text-xl font-semibold mb-2">Secure & Reliable</h3>
      <p>Encrypted connections and secure storage for your searches.</p>
    </div>
  </div>
</section>
@endsection
