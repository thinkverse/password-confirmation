<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function edit()
    {
        return view('secret.edit');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'secret' => 'required|string'
        ]);

        auth()->user()->update($request->all());

        return redirect()->route('home')->with('status', 'Secret added!');
    }
}
