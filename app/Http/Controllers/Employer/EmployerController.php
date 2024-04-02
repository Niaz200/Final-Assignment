<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use App\Models\Applied;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function Index(){
        $Totalpostjobs = Postjobs::where('user_id', Auth::id())->where('status', '=', 'pending')->count();
        $Totalapprovedjobs = Postjobs::where('user_id', Auth::id())->where('status', '=', 'approved')->count();
        $Totalapplide = Applied::where('emplo_id', Auth::id())->count();
        $totalapproveapllica = Applied::where('emplo_id', Auth::id())->where('status', '=', 'Approved')->count();

        $allapprovalsjobs = Postjobs::where('user_id', Auth::id())->where('status', '=', 'approved')->get();
       
        return view('pages.employer.dashboard', compact('Totalpostjobs','Totalapprovedjobs','Totalapplide','totalapproveapllica','allapprovalsjobs'));
    }

    public function EmCreateProfile(Request $request)
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
    
        return view('pages.employer.profile', compact('data','categos'));
    }
}
