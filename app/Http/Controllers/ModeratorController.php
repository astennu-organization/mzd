<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModeratorLoginRequest;
use App\Models\Moderator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModeratorController extends Controller
{
    public function index()
    {
        if (session()->has('moderator_id')) {
            return view('moderator.index');
        } else {
            return redirect()->route('moderator.login');
        }
    }


    public function login()
    {
        if (session()->has('moderator_id')) {
            return redirect()->route('moderator.index');
        } else {
            return view('moderator.login');
        }
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('moderator.login');
    }


    public function create()
    {
        //
    }


    public function store(ModeratorLoginRequest $request)
    {
        $validated = $request->validated();
        $moderator = Moderator::where('email', $validated['email'])->first();

        if (!$moderator) {
            return back()->with('error', 'Invalid credentials!');
        }
        if ($validated['password'] === $moderator->password) {
            session()->put(['moderator_id' => $moderator->id]);
            return redirect()->route('moderator.index');
        } else {
            return back()->with('error', 'Invalid credentials!');
        }
    }


    public function show($id)
    {
        //
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
