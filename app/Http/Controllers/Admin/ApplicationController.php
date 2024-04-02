<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function Index(){

        // $blogs = Blog::get();
        // return view('pages.admin.applicationjob', compact('blogs'));
        return view('pages.admin.applicationjob');
    }
}
