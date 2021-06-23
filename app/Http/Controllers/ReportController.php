<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }


    public function create()
    {
        //
    }


    public function store(ReportRequest $request)
    {
        $input = new Report();
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
