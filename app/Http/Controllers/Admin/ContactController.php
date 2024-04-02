<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function Index(){

        $contacts = Contact::get();
        return view('pages.admin.allcontacts', compact('contacts'));
    }


    public function ContactDestroy($id){

        $delcon = Contact::findOrFail($id);
        $delcon->delete();

        return redirect()->back()->with('message', 'Contact Deleted Successfully'); 
    }


    public function Showcontact($id){

        $showcontats =  Contact::findOrFail($id);
        return view('pages.admin.showcontact', compact('showcontats'));
    }
}
