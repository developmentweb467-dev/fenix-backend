<?php

namespace App\Http\Controllers;

use App\Models\App;

class AppController extends Controller
{
    public function index()
    {
        $apps = App::all();

        return view('apps.index', compact('apps'));
    }

    public function show($id)
    {
        $app = App::findOrFail($id);

        return view('apps.show', compact('app'));
    }
}