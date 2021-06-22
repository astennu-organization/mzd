<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function index()
    {
        $videos = VideoGallery::get();

        return view('gallery.videos', compact('videos'));
    }


    public function upload(Request $request)
    {
        if (session()->has('moderator_id')) {
            $this->validate($request, [
                'title' => 'required',
                'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
            ]);


            $input['video'] = time() . '.' . $request->video->getClientOriginalExtension();

            $request->video->move(public_path('videos'), $input['video']);


            $input['title'] = $request->title;

            VideoGallery::create($input);

            return back()
                ->with('success', 'Video Uploaded successfully.');
        } else {
            return back();
        }
    }
}
