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


            $video = time() . '.' . $request->video->getClientOriginalExtension();

            $request->video->move(public_path('videos'), $video);

            $input = new VideoGallery();
            $input->title = $request->title;
            $input->video = $video;
            $input->moderator_id = session()->get('moderator_id');
            $input->save();

            return back()
                ->with('success', 'Video Uploaded successfully.');
        } else {
            return back();
        }
    }
}
