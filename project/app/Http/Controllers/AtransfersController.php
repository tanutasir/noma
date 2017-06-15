<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtransfersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin');
    }

    public function view()
    {
        return view('admin/atransferi');
    }

    public function edit()
    {
        return view('admin');
    }

    public function save()
    {
        return view('admin');
    }

}
