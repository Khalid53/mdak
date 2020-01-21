<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact (Request $request) {
        $contact = new Contact();
        $contact->name               =   $request->name;
        $contact->email              =   $request->email;
        $contact->ur_message         =   $request->ur_message;
        $contact->save();

        return redirect()->back()->with('message', 'Contact info save successfully !!');
    }

    public function manageContactInfo () {
        $contacts = Contact::orderBy('coid', 'desc')->get();
        return view('admin.contact.manage-contact', ['contacts' => $contacts]);
    }

    public function deleteContactInfo ($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact information deleted successfully !!');
    }




}
