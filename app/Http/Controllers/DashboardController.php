<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function index(){
        $users = DB::table('users')->count();
        $products = DB::table('products')->count();
        $files = DB::table('files')->count();
        return view('home', compact('users','products','files'));
    }
}
