<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'nama' => 'Adi',
            'nis' => 3103119004,
            'gender' => 'laki-laki',
            'kelas'=> 'XII RPL 1',
            'Nomor HP' => 82222206040
        ];
    }
}
