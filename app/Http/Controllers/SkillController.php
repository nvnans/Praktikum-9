<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //Fungsi Index untuk menampilkan View Form
    public function index(){
        return view('skill');
    }

    //Fungsi hasil untuk menampilkan Data Input
    public function skillhasil(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('skillhasil', ['data' => $request]);
    }
}
