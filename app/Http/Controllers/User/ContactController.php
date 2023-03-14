<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('user.contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'phone'=>'required',
            'title'=>'required',
            'message'=>'required',
        ]);

        $contact = new Contact;

        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->title=$request->title;
        $contact->message=$request->message;

        $contact->save();

        return redirect(route('contact.index'))->with('message','Your message is sent successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
