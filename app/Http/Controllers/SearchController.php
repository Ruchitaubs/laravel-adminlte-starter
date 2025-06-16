<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class SearchController extends Controller
{
    public function index()
    {
        return view('frontend.search.index');
    }

   public function execute(Request $request)
{
    $data = $request->only(['source', 'query']); // clean inputs

    // Ensure both values are strings
    $source = $data['source'] ?? '';
    $query = $data['query'] ?? '';

    // Validate and use
    Result::create([
        'source' => $source,
        'query' => $query,
        'title' => 'Sample title',
        'authors' => 'Author A, B',
        'abstract' => 'Example abstract',
    ]);

    return view('frontend.search.results', [
        'query' => $query,
        'source' => $source,
        'results' => Result::latest()->take(10)->get(),
    ]);
}

}
