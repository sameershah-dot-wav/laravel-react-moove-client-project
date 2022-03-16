<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Storage;


class VideoController extends Controller
{

    public function index($title)
    {
        $video = DB::table('videos')->where('title', $title)->first();

        return Storage::disk('my_files')->get($video->video);
    }




    public function uploadVideo(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

    $video = new Video;
    $video->title = $request->title;

    if ($request->hasFile('video'))
    {
        $path = $request->file('video')->store('videos', ['disk' => 
        'my_files']);

        $video->video = $path;
    }
    $video->save();

    }
}