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
        return view('createCars');
    }

    public function saveCars()
    {
        return view('admin');
    }

    public function deleteCars()
    {
        return view('admin');
    }

    public function uploadCar()
    {
        $targetFolder = 'img/default'; // Relative to the root
        $verifyToken = md5('unique_salt' . $_POST['timestamp']);
        if (!empty($_FILES)) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo $targetFolder . '/' . $_FILES['Filedata']['name'];
            } else {
                echo 'Invalid file type.';
            }
        }



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
