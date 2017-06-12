<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin');
    }

    public function createCars()
    {
        return view('admin');
    }

    public function saveCars()
    {
        return view('admin');
    }

    public function deleteCars()
    {
        return view('admin');
    }

    public function createAccesories()
    {
        return view('admin');
    }

    public function saveAccesories()
    {
        return view('admin');
    }

    public function deleteAccesories()
    {
        return view('admin');
    }
}
