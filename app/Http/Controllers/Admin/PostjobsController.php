<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostjobsController extends Controller
{
    public function Index(){

        $jobposts = Postjobs::where('status', '=', 'pending')->get();
        return view('pages.admin.allpostjobs', compact('jobposts'));
    }

    public function AddPostjobs(){

        $categos = Category::latest()->get();
        
        return view('pages.admin.addpostjob', compact('categos'));
    }


    public function Storeadminjobpost(Request $request){

        // dd($request->all());

        $request->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            
        ]);

            $user_id = Auth::user()->id;

               //Menu Save
               Postjobs::create([
                'job_title' => $request->job_title,
                'company_name' => $request->company_name,
                'status' => 'pending',
                'job_des' => $request->job_des,
                'job_type' => $request->job_type,
                'job_level' => $request->job_level,
                'experience' => $request->experience,
                'qualification' => $request->qualification,
                'gender' => $request->gender,
                'min_salary' => $request->min_salary,
                'max_salary' => $request->max_salary,
                'job_exp_date' => $request->job_exp_date,
                'job_fee_type' => $request->job_fee_type,
                'requiremment' => $request->requiremment,
                'responsibilities' => $request->responsibilities,
                'skills' => $request->skills,
                'website' => $request->website,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'state' => $request->state,
                'postcode' => $request->postcode,
                'location' => $request->location,
                'user_id' => $user_id,
                'cats_id' => $request->cats_id,
        
            ]);
    
            return redirect()->back()->with('message', 'Job Posts Created Successfully'); 
    }


    public function Showjobpost($id){

        $showjobs =  Postjobs::findOrFail($id);
        return view('pages.admin.showpostjobs', compact('showjobs'));
    }

    public function EditPostJob($id){

        $edit = Postjobs::findOrFail($id);
        $cates = Category::latest()->get();;

        return view('pages.admin.editpostjob', compact('edit','cates'));
    }


    public function PostjobUpdate(Request $request, $id){

        // dd($request->all());

        $request->validate([
            'job_title' => 'required',
            'company_name' => 'required',
            
        ]);

               //Menu update
               $jobpost = Postjobs::findOrFail($id);
               $user_id = Auth::user()->id;

               $jobpost->update([
                    'job_title' => $request->job_title,
                    'company_name' => $request->company_name,
                    'status' => 'pending',
                    'job_des' => $request->job_des,
                    'job_type' => $request->job_type,
                    'job_level' => $request->job_level,
                    'experience' => $request->experience,
                    'qualification' => $request->qualification,
                    'gender' => $request->gender,
                    'min_salary' => $request->min_salary,
                    'max_salary' => $request->max_salary,
                    'job_exp_date' => $request->job_exp_date,
                    'job_fee_type' => $request->job_fee_type,
                    'requiremment' => $request->requiremment,
                    'responsibilities' => $request->responsibilities,
                    'skills' => $request->skills,
                    'website' => $request->website,
                    'address' => $request->address,
                    'city' => $request->city,
                    'country' => $request->country,
                    'state' => $request->state,
                    'postcode' => $request->postcode,
                    'location' => $request->location,
                    'user_id' => $user_id,
                    'cats_id' => $request->cats_id,
        
            ]);
    
            return redirect()->route('allpostjobs')->with('message', 'Postjobs Updated Successfully'); 
    }


    public function PostjobApprove(Request $request, $id){

//    dd($request->all());

               //Menu update
               $jobpost = Postjobs::findOrFail($id);
              

               if($jobpost->status == 'pending'){
                    // $user_id = Auth::user()->id;
                $jobpost->update([
                        
                        'status' => 'approved',
                        
                        // 'user_id' => $user_id,
                        
            
                ]);

            return redirect()->route('allapprove')->with('message', 'Postjobs Approved Successfully'); 
        }else{

            return redirect()->route('allpostjobs')->with('message', 'Postjobs All ready Approved Successfully'); 
        }
    
           
    }

    public function AllApprove(){

        $allapprovals = Postjobs::where('status', '=', 'approved')->get();
        return view('pages.admin.allapprovepostjobs', compact('allapprovals'));
    }


    public function PostDestroy($id){

        $delpostjob = Postjobs::findOrFail($id);
        $delpostjob->delete();

        return redirect()->back()->with('message', 'Postjobs Deleted Successfully'); 
    }
}
