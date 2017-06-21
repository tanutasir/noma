<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function sitehome($lang, $rec)
    {

        return view('sitehome', ['lang' => $lang, 'rec' => $rec]);
    }
    public function site($lang, $rec)
    {

        return view('site', ['lang' => $lang, 'rec' => $rec]);
    }
    public function accessories($lang, $rec)
    {

        return view('accessories', ['lang' => $lang, 'rec' => $rec]);
    }
    public function contacts($lang, $rec)
    {

        return view('contacts', ['lang' => $lang, 'rec' => $rec]);
    }
}
