<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubMenuController extends Controller
{
    public function Index(){
        $allsubmenus = Submenu::latest()->get();
        return view('pages.admin.allsubmenu', compact('allsubmenus'));
    }

    public function AddSubMenu(){
        $menus = Menu::latest()->get();
        return view('pages.admin.addsubmenu', compact('menus'));
    }

    public function StoreSubMenu(Request $request){

        // dd($request->all());

        $request->validate([
            'menus_id' => 'required',
            'name' => 'required|unique:submenus',
           
            
        ]);

               //Menu Save
               Submenu::create([
               
                'menu_id' => $request->menus_id,
                'name' => $request->name,
                'slug' => $request->slug,
        
            ]);
    
            return redirect()->back()->with('message', 'SubMenu Created Successfully'); 
    }


    public function Subedit($id){

        $edit = Submenu::findOrFail($id);
        $menus = Menu::orderBy('name','ASC')->get();

        return view('pages.admin.editsubmenu', compact('edit','menus'));
    }


    public function Subupdate(Request $request, $id){

        // dd($request->all());

        $request->validate([
            'menus_id' => 'required',
            'name' => 'required',
            
        ]);

               //Menu update
               $submenus = Submenu::findOrFail($id);
               $submenus->update([
                'menu_id' => $request->menus_id,
                'name' => $request->name,
                'slug' => $request->slug,
        
            ]);
    
            return redirect()->route('allsubmenu')->with('message', 'SubMenu Updated Successfully'); 
    }


    public function Subdestroy($id){

        $delsubmenu = Submenu::findOrFail($id);
        $delsubmenu->delete();

        return redirect()->back()->with('message', 'SubMenu Deleted Successfully'); 
    }
}
