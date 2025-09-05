<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $movies = Movie::search($query)->get();

        return response()->json($movies);
    }
}
