<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::OrderBy('id', 'desc')
            ->get();

        return view('news.index', compact('news'));
    }


    public function create()
    {
        //
    }


    public function store(NewsRequest $request)
    {
        if (session()->has('moderator_id')) {

            $image = time() . '.' . $request->image->getClientOriginalExtension();

            $request->image->move(public_path('photos'), $image);


            $input = new News();
            $input->title = $request->title;
            $input->image = $image;
            $input->content = $request->content;
            $input->source = $request->source;
            $input->moderator_id = session()->get('moderator_id');
            $input->save();

            return back()
                ->with('success', 'News Created successfully.');
        } else {
            return back();
        }
    }


    public function show($id)
    {
        $post = News::where('id', $id)
            ->first();

        if ($post) {
            return view('news.details', compact('post'));
        } else {
            return redirect()->route('news.index');
        }
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
