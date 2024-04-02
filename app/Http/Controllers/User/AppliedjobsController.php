<?php

namespace App\Http\Controllers\User;

use App\Models\Applied;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppliedjobsController extends Controller
{

    public function Index(){

        $jobs = Applied::where('user_id', Auth::id())
        ->where('status', '=', 'Pending')
        ->orwhere('status', '=', 'Cancel')
        ->get();
        return view('pages.user.allpending', compact('jobs'));
    }

    public function Storeapplied(Request $request){

        // dd($request->all());

        $request->validate([
            'job_title' => 'required',
            'compa_name' => 'required',
            // 'jobspost_id' => 'required|unique:applieds',
            
        ]);

            $user_id = Auth::user()->id;

            $existingValue = Applied::where('user_id', Auth::id() )
            ->where('jobspost_id', $request->id)
            ->exists();

            if( $existingValue)
            {
                return redirect()->back()->with('message', 'All Ready Appllied This Post');

            }else{

                 //Menu Save
                 Applied::create([
                    'job_title' => $request->job_title,
                    'job_type' => $request->job_type,
                    'location' => $request->location,
                    'compa_name' => $request->compa_name,
                    'status' => 'Pending',
                    'emplo_id' => $request->employer_id,
                    'jobspost_id' => $request->id,
                    'user_id' => $user_id,
                    
            
                ]);

                return redirect()->back()->with('message', 'Appllied Created Successfully');
                
            }
    
             
    }


    // public function Showjob($id){

    //     $id = Auth::user()->id;
        
    //     $jobs = Postjobs::get();
    //     foreach ($jobs as $job) {
    //         $jobspost_id = $job->id;
        


    //     $showjobs =  Applied::where('user_id',$id)->where('jobspost_id',$jobspost_id)->with('postjobs')->first();
    //      dd($showjobs);
    //     // $posts = $showjobs->postjobs->get();

    // }
    //     return view('pages.user.showjobs', compact('showjobs'));
    // }

    public function UserApprove(){

        $appjobs = Applied::where('user_id', Auth::id())->where('status', '=', 'Approved')->get();
        return view('pages.user.alluserapproved', compact('appjobs'));
    }


    public function Showjob($id){

        $showjobs =  Applied::with('postjobs')->find($id);
        //  dd($showjobs);
        // $posts = $showjobs->postjobs->get();

    
        return view('pages.user.showjobs', compact('showjobs'));
    }


    public function AppliedDestroy($id){

        $delcat = Applied::findOrFail($id);
        $delcat->delete();

        return redirect()->back()->with('message', 'Appllied Jobs Deleted Successfully'); 
    }

}
