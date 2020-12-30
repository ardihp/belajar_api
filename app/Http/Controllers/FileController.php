<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList()
    {
        return response()->download(public_path('asd.png'), 'User Image');
    }

    public function CountrySave(Request $request)
    {
        $file_name = 'user_img.jpg';
        $path = $request->file('photo')->move(public_path("/"), $file_name);
        $photoURL = url("/".$file_name);
        return response()->json(['url' => $photoURL], 200);
    }
}
