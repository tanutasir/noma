<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AparmumsController extends Controller
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
        return view('admin/aparmums');
    }

    public function save()
    {
        if(isset($_POST['InputTitleLv'])){$inputTitleLv = $_POST['InputTitleLv'];}
        if(isset($_POST['InputMetaDescriptionLv'])){$inputMetaDescriptionLv = $_POST['InputMetaDescriptionLv'];}
        if(isset($_POST['InputH1Lv'])){$inputH1Lv = $_POST['InputH1Lv'];}
        if(isset($_POST['InputBodyLv'])){$inputBodyLv = $_POST['InputBodyLv'];}

        if(isset($_POST['InputTitleEn'])){$inputTitleEn = $_POST['InputTitleEn'];}
        if(isset($_POST['InputMetaDescriptionEn'])){$inputMetaDescriptionEn = $_POST['InputMetaDescriptionEn'];}
        if(isset($_POST['InputH1En'])){$inputH1En = $_POST['InputH1En'];}
        if(isset($_POST['InputBodyEn'])){$inputBodyEn = $_POST['InputBodyEn'];}

        if(isset($_POST['InputTitleRu'])){$inputTitleRu = $_POST['InputTitleRu'];}
        if(isset($_POST['InputMetaDescriptionRu'])){$inputMetaDescriptionRu = $_POST['InputMetaDescriptionRu'];}
        if(isset($_POST['InputH1Ru'])){$inputH1Ru = $_POST['InputH1Ru'];}
        if(isset($_POST['InputBodyRu'])){$inputBodyRu = $_POST['InputBodyRu'];}

        DB::table('data_lang')
            ->where('lang', 'lv')->where('link','par-mums')
            ->update([
                'title' => htmlspecialchars($inputTitleLv,ENT_QUOTES),
                'meta' => htmlspecialchars($inputMetaDescriptionLv,ENT_QUOTES),
                'h1' => htmlspecialchars($inputH1Lv,ENT_QUOTES),
                'body' => htmlspecialchars($inputBodyLv,ENT_QUOTES)
                ]);
        DB::table('data_lang')
            ->where('lang', 'en')->where('link','about-us')
            ->update([
                'title' => htmlspecialchars($inputTitleEn,ENT_QUOTES),
                'meta' => htmlspecialchars($inputMetaDescriptionEn,ENT_QUOTES),
                'h1' => htmlspecialchars($inputH1En,ENT_QUOTES),
                'body' => htmlspecialchars($inputBodyEn,ENT_QUOTES)
            ]);
        DB::table('data_lang')
            ->where('lang', 'ru')->where('link','o-nas')
            ->update([
                'title' => htmlspecialchars($inputTitleRu,ENT_QUOTES),
                'meta' => htmlspecialchars($inputMetaDescriptionRu,ENT_QUOTES),
                'h1' => htmlspecialchars($inputH1Ru,ENT_QUOTES),
                'body' => htmlspecialchars($inputBodyRu,ENT_QUOTES)
            ]);


        return redirect('/lv/par-mums');
//        return $inputBodyLv;
    }


}
