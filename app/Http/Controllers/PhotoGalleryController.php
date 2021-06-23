<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $photos = PhotoGallery::get();

        return view('gallery.photos', compact('photos'));
    }


    public function upload(Request $request)
    {
        if (session()->has('moderator_id')) {
            $this->validate($request, [
                'title' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $photo = time() . '.' . $request->photo->getClientOriginalExtension();

            $request->photo->move(public_path('photos'), $photo);

            $input = new PhotoGallery();
            $input->title = $request->title;
            $input->photo = $photo;
            $input->moderator_id = session()->get('moderator_id');
            $input->save();

            return back()
                ->with('success', 'Photo Uploaded successfully.');
        } else {
            return back();
        }
    }


    public function destroy($id)
    {
        PhotoGallery::find($id)->delete();

        return back()

            ->with('success', 'Photo removed successfully.');
    }
}
