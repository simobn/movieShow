<?php

namespace App\Http\Controllers;

use App\Models\Scene;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Exceptions\UploadFailedException;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

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
            'image_url' => 'required|url',
        ]);


        $movie = Scene::create($validatedData);
        return response()->json([
           'status' => 200,
            'data' => $movie
        ]);
    }

    public function createnew()
    {
        return view('upload-file');
    }

    /**
     * @throws UploadFailedException
     */
    public function uploadLargeFiles(Request $request) {
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        if (!$receiver->isUploaded()) {
            // file not uploaded
        }

        $fileReceived = $receiver->receive(); // receive file
        if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
            $file = $fileReceived->getFile(); // get file
            $extension = $file->getClientOriginalExtension();
//            $fileName = str_replace('.'.$extension, '', $file->getClientOriginalName()); //file name without extenstion
            $fileName = md5(time()) . '.' . $extension; // a unique file name

//            $disk = Storage::disk(config('filesystems.default'));
            $path = Storage::putFileAs('scenes', $file,$fileName);
//            $path = $disk->putFileAs('scenes-videos', $file, $fileName);

            // delete chunked file
            unlink($file->getPathname());
//            Scene::create([
//                'name' => $request->get('name'),
//                'description' => $request->get('description'),
//                'image_url' => asset( $path),
//                'release_date' => Carbon::create($request->get('release_date'))
//            ]);
            return [
                'path' => asset( $path),
                'filename' => $fileName
            ];
        }

        // otherwise return percentage informatoin
        $handler = $fileReceived->handler();
        return [
            'name' => $request->get('name'),
            'done' => $handler->getPercentageDone(),
            'status' => true
        ];
    }
}
