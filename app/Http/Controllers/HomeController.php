<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('welcome');
=======
        // $data = [
        //    'nama' => 'Doraemon',
        //    'pekerjaan' => 'Developer',
        // ];
        // return view('home')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('home', compact('nama', 'pekerjaan'));
>>>>>>> cfd92e515c7beca7785ce7f9f8ba2057ff6025a0
    }

    public function contact()
    {
        return view('contact');
    }
}
