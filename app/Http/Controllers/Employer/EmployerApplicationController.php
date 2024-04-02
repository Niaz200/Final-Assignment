<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use App\Models\Applied;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerApplicationController extends Controller
{
    public function Showapplication(){

        $id = Auth::user()->id;
        $jobs =  Applied::where('emplo_id',$id)->where('status', '=', 'Pending')->with('users')->get();
        // dd($jobs);
        return view('pages.employer.allapplication', compact('jobs'));
    }



    public function StoreShortlist(Request $request, $id){
        // dd($request->all());
//   dd($id);
        // $request->validate([
        //     'name' => 'required|unique:categories',
            
        // ]);

            // $applied_id = $request->id;

               //Menu update
               $applieds = Applied::findOrFail($id);
               $applieds->update([
                'status' => 'Approved',
        
            ]);
            // return redirect()->route('allshortlistapplica')->with('message', 'Approved Shortlisted Successfully'); 
            return redirect()->back()->with('message', 'Approved Shortlisted Successfully'); 
          
    }


    public function Shortlistjobs(){

        $id = Auth::user()->id;

        // $user_id = User::get();
      
        // dd($user_id);

        $shortlistjobs = Applied::where('emplo_id',$id)->where('status', '=', 'Approved')->get();
   
        //  dd($shortlistjobs);
        return view('pages.employer.allshortlistapplica', compact('shortlistjobs'));
    }


    public function Cancelapplication(Request $request, $id){

        // $request->validate([
        //     'name' => 'required|unique:categories',
            
        // ]);

            // $applied_id = $request->id;

               //Menu update
               $cancelappli = Applied::findOrFail($id);
               $cancelappli->update([
                'status' => 'Cancel',
        
            ]);
            // return redirect()->route('allshortlistapplica')->with('message', 'Approved Shortlisted Successfully'); 
            return redirect()->back()->with('message', 'Cancel Shortlisted Successfully'); 
          
    }


    public function CancelShortlist(Request $request, $id){

        // $request->validate([
        //     'name' => 'required|unique:categories',
            
        // ]);

            // $applied_id = $request->id;

               //Menu update
               $cancels = Applied::findOrFail($id);
               $cancels->update([
                'status' => 'Cancel',
        
            ]);
            // return redirect()->route('allshortlistapplica')->with('message', 'Approved Shortlisted Successfully'); 
            return redirect()->back()->with('message', 'Cancel Shortlisted Successfully'); 
          
    }

    public function Userdetails($id)
    {
        // $id = Auth::user()->id;
        // $userdetails = User::find($id);
        //  dd($userdetails);
        // Applied::where('emplo_id',$id)->where('status', '=', 'Pending')->with('users')->find($id);
        $userdetails =  Applied::findOrFail($id);
        //  dd($userdetails);
        return view('pages.employer.singleuserdetails', compact('userdetails'));
    }
}
