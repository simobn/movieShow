<?php

namespace App\Http\Controllers;

use App\Models\Scene;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $scenes = Scene::all();
        return view('welcome',[
            'scenes' => $scenes
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'release_date' => 'required',
            'movie' => 'required|file|mimetypes:video/mp4,video/x-m4v,video/*,application/octet-stream',
        ]);
        $path = $request->file('movie')->store('movies');
        $validatedData['movie'] = $path;
        $movie = Scene::create($validatedData);
        return redirect()->route('/');
    }
}
