<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function Index(){

        $menus = Menu::get();
        
        return view('pages.admin.allmenu', compact('menus'));
    }

    public function AddMenu(){
        return view('pages.admin.addmenu');
    }


    public function Store(Request $request){

        // dd($request->all());

        $request->validate([
            'name' => 'required|unique:menus',
            
        ]);

               //Menu Save
               Menu::create([
                'name' => $request->name,
        
            ]);
    
            return redirect()->back()->with('message', 'Menu Created Successfully'); 
    }

    public function Edit($id){

        $edit = Menu::findOrFail($id);
   

        return view('pages.admin.editmenu', compact('edit'));
    }


    public function Update(Request $request, $id){

        // dd($request->all());

        $request->validate([
            'name' => 'required|unique:menus',
            
        ]);

               //Menu update
               $menu = Menu::findOrFail($id);
               $menu->update([
                'name' => $request->name,
        
            ]);
    
            return redirect()->route('allmenu')->with('message', 'Menu Updated Successfully'); 
    }


    public function Destroy($id){

        $delmenu = Menu::findOrFail($id);
        $delmenu->delete();

        return redirect()->back()->with('message', 'Menu Deleted Successfully'); 
    }
}
