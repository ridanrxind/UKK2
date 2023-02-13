<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index', [
            'title' => 'administrator'
        ]);
    }

    public function user()
    {
        return view('admin/data_user', [
            'title'     => 'Data User',
            'user'      => User::paginate(3)
        ]);
    }
}
