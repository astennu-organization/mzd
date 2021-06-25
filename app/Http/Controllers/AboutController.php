<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }


    public function team()
    {
        return view('about.team');
    }


    public function contact()
    {
        return view('about.contact');
    }


    public function create()
    {
        //
    }


    public function store(ContactRequest $request)
    {
        $input = new Contact();
        $input->name = $request->get('name');
        $input->email = $request->get('email');
        $input->telephone = $request->get('telephone');
        $input->message = $request->get('message');
        if ($input->save()) {
            return back()->with('success', 'Податоците се успешно пратени! Ке добиете одговор на подолу дадената емаил адреса.');
        } else {
            return back()->with('error', 'Настана грешка!');
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
