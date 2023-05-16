<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //Fungsi Index untuk menampilkan View Form
    public function index(){
        return view('form');
    }

    //Fungsi hasil untuk menampilkan Data Input
    public function hasil(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        return view('hasil', ['data' => $request]);
    }
}
