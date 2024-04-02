<?php

namespace App\Http\Controllers\User;

use App\Models\Menu;
use App\Models\User;
use App\Models\Applied;
use App\Models\Profile;
use App\Models\Submenu;
use App\Models\Category;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $categoris = Category::latest()->get();
        // $menus = Menu::latest()->get();
        // $submenus = Submenu::get();
        $Totalapplied = Applied::where('user_id', Auth::id())->where('status', '=', 'Pending')->count();
        $Totalapproved = Applied::where('user_id', Auth::id())->where('status', '=', 'Approved')->count();
        $postjobs = Postjobs::where('status', '=', 'approved')->latest()->limit(5)->get();;
        return view('pages.user.dashboard', compact('categoris','postjobs','Totalapplied','Totalapproved'));
        // return view('pages.user.dashboard');
    }


    public function UserCreateProfile(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'cats_id' => 'required',
            // 'full_name' => 'required',
            // 'mobile' => 'required',
            // 'gender' => 'required',
            // 'address' => 'required',
            // 'city' => 'required',
            
           
            
        ]);



        $dataUser= User::updateOrCreate(
            ['id' => Auth::user()->id],
            [
               
                // 'name' => $request->name, 
                'email' => $request->email,
            
            ],
        );
      
       
        $data= Profile::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'full_name' => $request->full_name, 
                'mobile' => $request->mobile,
                'age' => $request->age,
                'gender' => $request->gender,
                'job_title' => $request->job_title,
                'work_type' => $request->work_type,
                'birthday' => $request->birthday,
                'company_name' => $request->company_name,
                'company_location' => $request->company_location,
                'website' => $request->website,
                'Total_experience' => $request->Total_experience,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'postcode' => $request->postcode,
                'language' => $request->language,
                'education' => $request->education,
                'info' => $request->info,
                'skills' => $request->skills,
                'cats_id' => $request->cats_id,
               
            ],
         
          
        );   

        return redirect()->back()->with('message', 'Profile CreatedOrUpdate Successfully'); 

        
    }


    public function ReadProfile(Request $request){

        $id = Auth::user()->id;

  
        $data = Profile::where('user_id',$id)->with('user')->first();
        // dd( $data);

        $categos = Category::latest()->get();
    
        return view('pages.user.profile', compact('data','categos'));
    }


    // public function Totalapplied(){

    //     $appjobs = Applied::where('user_id', Auth::id())->where('status', '=', 'Approved')->get();
    //     return view('pages.user.alluserapproved', compact('appjobs'));
    // }
}
