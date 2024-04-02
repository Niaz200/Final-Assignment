<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\User;
use App\Models\Profile;
use App\Models\Submenu;
use App\Models\Category;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Index(){
        $totalpostjobs = Postjobs::where('status', '=', 'pending')->count();
        $totalapprovedjobs = Postjobs::where('status', '=', 'approved')->count();
        $totalcat = Category::count();
        $totalblog = Blog::count();

        $allpendingjobs = Postjobs::where('status', '=', 'pending')->get();

        // $allapprovalsjobs = Postjobs::where('user_id', Auth::id())->where('status', '=', 'approved')->get();
        

        return view('pages.admin.dashboard', compact('totalpostjobs','totalapprovedjobs','totalcat','totalblog','allpendingjobs'));
    }


    // public function Profile(){

    //     $id = Auth::user()->id;

    //     // $user = User::where('id',$id)->first();
    //     $data = User::with('profile')->find($id);
    //     // $data = User::with('profile')->find(2);
    //     // $data = User::with('items')->find(1);
    //     // $data = User::where('user_id',$id)->with('profile')->first();
    //     dd($data);
    //     return view('pages.admin.profile');
    // }


    public function CreateProfile(Request $request)
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
    
        return view('pages.admin.profile', compact('data','categos'));
    }
}
