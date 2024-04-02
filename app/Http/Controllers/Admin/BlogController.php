<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function Index(){

        $blogs = Blog::get();
        return view('pages.admin.allblogs', compact('blogs'));
    }

    public function AddBlog(){
        
        return view('pages.admin.addblog');
    }


    public function Storeblog(Request $request){

        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'images' => 'required',
            
        ]);


          //Image Upload
          if($request->hasFile('images')){
            $image = $request->file('images');
            $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileNameToStore);
        }


            $user_id = Auth::user()->id;
               //Menu Save
               Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' =>  $fileNameToStore,
                'user_id' => $user_id,
        
            ]);
    
            return redirect()->back()->with('message', 'Blog Created Successfully'); 
    }


    public function Editblog($id){

        $editblogs = Blog::findOrFail($id);
   

        return view('pages.admin.editblog', compact('editblogs'));
    }


    public function BlogUpdate(Request $request, $id){

        // dd($request->all());

        $request->validate([
            'title' => 'required',
            // 'images' => 'required',
            
        ]);

               
              

            //    if($request->hasFile('images')){
            //     $image = $request->file('images');
            //     $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            //     $image->move(public_path('images'), $fileNameToStore);
            // }

            $oldImage = $request->old_img;
            $photo=public_path("images/{$oldImage}");
            unlink($photo);

            if($request->hasFile('images')){
                $image = $request->file('images');
                $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images'), $fileNameToStore);
            }

            $upblogs = Blog::findOrFail($id);

               $upblogs->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' =>  $request->hasFile('images') ? $fileNameToStore : $upblogs->image,
        
            ]);
    
            return redirect()->route('allblog')->with('message', 'Blog Updated Successfully'); 
    }


    public function BlogDestroy($id){

        $delblog = Blog::findOrFail($id);
        $photo =   public_path("images/{$delblog->image}");
        unlink($photo);
     
        $delblog->delete();

        return redirect()->back()->with('message', 'Blog Deleted Successfully'); 
    }
}
