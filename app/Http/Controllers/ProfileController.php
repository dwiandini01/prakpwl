<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($Nama = "", $Kelas = "", $NPM = "")
    {  
        $data = [
            'Nama'  => $Nama,
            'Kelas' => $Kelas,
            'NPM'   => $NPM
        ];
        return view('profile', $data);  
    }
}
