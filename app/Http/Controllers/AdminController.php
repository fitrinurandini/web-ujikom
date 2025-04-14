<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin()
    {
        return view('admin.index');
    }
    
}
