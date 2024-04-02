<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function Index(){

        $cats = Category::get();
        return view('pages.admin.allcategory', compact('cats'));
    }

    public function Addcategory(){
        return view('pages.admin.addcategory');
    }

    public function Storecategory(Request $request){

        // dd($request->all());

        $request->validate([
            'name' => 'required|unique:menus',
            
        ]);

               //Menu Save
               Category::create([
                'name' => $request->name,
        
            ]);
    
            return redirect()->back()->with('message', 'Category Created Successfully'); 
    }

    public function Editcat($id){

        $editcats = Category::findOrFail($id);
   

        return view('pages.admin.editcat', compact('editcats'));
    }


    public function CatUpdate(Request $request, $id){

        // dd($request->all());

        $request->validate([
            'name' => 'required|unique:categories',
            
        ]);

               //Menu update
               $upcats = Category::findOrFail($id);
               $upcats->update([
                'status' => $request->name,
        
            ]);
    
            return redirect()->route('allcategory')->with('message', 'Category Updated Successfully'); 
    }


    public function DelDestroy($id){

        $delcat = Category::findOrFail($id);
        $delcat->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully'); 
    }
}
