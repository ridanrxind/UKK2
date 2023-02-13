<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Home',
            'school'  => 'SMK Airlangga Balikpapan'
        ];
        return view('index', $data);
    }

    public function content()
    {
        $data = [
            'title' => 'Content',
            'school'  => 'SMK Airlangga Balikpapan'
        ];
        return view('content', $data);
    }

    public function system()
    {
        $data = [
            'title' => 'System',
            'school'  => 'SMK Airlangga Balikpapan'
        ];
        return view('system', $data);
    }


}
