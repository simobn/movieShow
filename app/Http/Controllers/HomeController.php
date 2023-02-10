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
        $chunkNumber = 4;
        $totalChunks = $request->input('totalChunks');
        $file = $request->file('file');

        // Store the chunk in a temporary location
        $file->storeAs('temp/'.$request->input('identifier'), $chunkNumber.'.part');

        // Check if all chunks have been received
        $allChunks = true;
        for ($i = 0; $i < $totalChunks; $i++) {
            if (!file_exists('temp/'.$request->input('identifier').'/'.$i.'.part')) {
                $allChunks = false;
                break;
            }
        }

        if ($allChunks) {
            // Concatenate all chunks to form the original file
            $fp = fopen('temp/' . $request->input('identifier') . '/final.mp4', 'w');
            for ($i = 0; $i < $totalChunks; $i++) {
                fwrite($fp, file_get_contents('temp/' . $request->input('identifier') . '/' . $i . '.part'));
            }
            fclose($fp);

            // Move the final file to a permanent location
            rename('temp/' . $request->input('identifier') . '/final.mp4', 'files/final.mp4');

            // Clean up the temporary folder
            rmdir('temp/' . $request->input('identifier'));
        }
//        $path = $request->file('movie')->store('movies');
//        $validatedData['movie'] = $path;
//        $movie = Scene::create($validatedData);
        return redirect()->route('/');
    }
}
