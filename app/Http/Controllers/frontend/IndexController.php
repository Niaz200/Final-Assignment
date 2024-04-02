<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Menu;
use App\Models\User;
use App\Models\Applied;
use App\Models\Contact;
use App\Models\Submenu;
use App\Models\Category;
use App\Models\Postjobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $categoris = Category::latest()->get();
        // $menus = Menu::get();
        $submenus = Submenu::get();
        $postjobs = Postjobs::where('status', '=', 'approved')->latest()->limit(5)->get();
        $blogs = Blog::limit(3)->get();
        return view('frontend.index', compact('categoris','postjobs','submenus','blogs'));
    }




    public function Showuserjob($id){
  
        // $singlejobs =  Applied::with('postjobs')->find($id);
        $singlejobs =  Postjobs::find($id);
        //  dd($singlejobs);
        // $posts = $showjobs->postjobs->get();

    
        return view('frontend.showsinglejobs', compact('singlejobs'));
    }


    public function Showalljob(){

        // $slugssubmanus = Submenu::findOrFail($id);
        $alljobs = Postjobs::where('status', '=', 'approved')->latest()->get();
        return view('frontend.showalljobs', compact('alljobs'));
  
        // $singlejobs =  Applied::with('postjobs')->find($id);
        // $singlejobs =  Postjobs::find($id);
        //  dd($singlejobs);
        // $posts = $showjobs->postjobs->get();

    
        // return view('frontend.showalljobs', compact('singlejobs'));
        // return view('frontend.showalljobs');
    }

    public function Categorywisejob($id){

        // $slugssubmanus = Submenu::findOrFail($id);
        $allcatjobs = Postjobs::where('cats_id',$id)->where('status', '=', 'approved')->latest()->get();
        return view('frontend.categorywisejobs', compact('allcatjobs'));
  
      
    }

    public function Showallcategory(){

        $allcategoris = Category::latest()->get();
        return view('frontend.allcategory', compact('allcategoris'));
  
        // $singlejobs =  Applied::with('postjobs')->find($id);
        // $singlejobs =  Postjobs::find($id);
        //  dd($singlejobs);
        // $posts = $showjobs->postjobs->get();

    
        // return view('frontend.showalljobs', compact('singlejobs'));
        // return view('frontend.showalljobs');
    }


    public function Showsingleblogs($id)
    {
       
        $blogs = Blog::find($id);
        return view('frontend.showsingleblogs', compact('blogs'));
    }


    public function Showallemployer(){

       
        $allemploys = User::where('role_id', '=', '2')->with('profile')->latest()->get();

        // foreach ($allemploys as $allemp) {
        //     $totaljobs = Postjobs::where('user_id', $allemp->id)->count();
        // }
        // $totaljobs = Applied::where('emplo_id', $emplo_id->id)->with('profile')->latest()->get();
        // dd($totaljobs);
        return view('frontend.showallemployer', compact('allemploys'));
  
       
    }


    public function Emdetails($id)
    {
       
        $emplodetails = User::find($id);
        return view('frontend.companydetails', compact('emplodetails'));
    }


    public function Allblogs(){

       
        $allblogs = Blog::latest()->get();

        // foreach ($allemploys as $allemp) {
        //     $totaljobs = Postjobs::where('user_id', $allemp->id)->count();
        // }
        // $totaljobs = Applied::where('emplo_id', $emplo_id->id)->with('profile')->latest()->get();
        // dd($totaljobs);
        return view('frontend.showallblog', compact('allblogs'));
  
       
    }


    public function AddContact(){
        
        return view('frontend.contact');
    }


    public function StoreContact(Request $request){

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'mobile' => 'required',
            'message' => 'required',

            
        ]);

               //Menu Save
               Contact::create([
                'name' => $request->name,
                'title' => $request->title,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'message' => $request->message,
        
            ]);
    
            return redirect()->back()->with('message', 'Contact Created Successfully'); 
    }

}
