<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function showForm()
    {
        return view('service.form');
    }

    public function saveForm(Request $request)
    {
        $data = $request->validate([
            'question1' => 'required|string',
            'question2' => 'required|string',
            
        ]);

        $data['user_id'] = auth()->id();

        Service::create($data);

        return redirect()->route('service.form')->with('success', 'Form submitted successfully!');
    }
}