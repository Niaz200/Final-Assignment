<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function menus(){
        return view('admin.home');
    }


    // public function Index(){
    //     $id = Auth::user()->id;

  
    //     $datainfo = Profile::where('user_id',$id)->with('user')->first();
      

    //     $categories = Category::latest()->get();
    
    //     return view('pages.admin.admin-master', compact('datainfo','categories'));
       
    // }
}
