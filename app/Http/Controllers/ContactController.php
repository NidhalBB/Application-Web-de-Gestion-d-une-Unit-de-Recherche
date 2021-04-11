<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;
use DB;
use Mail;
use Auth;
class ContactController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipe = User::all();
        return view ('Pages.contact',array('id' => Auth::user()))->with('equipe',$equipe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'NomComplet' => 'required',
            'sujet' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        $contact = new Contact;
        $contact->Nom = $request->input('NomComplet');
        $contact->Email = $request->input('email');
        $contact->sujet = $request->input('sujet');
        $contact->description = $request->input('message');
        $contact->save();

        
        return redirect('contact')->with('success', 'Message Envoye');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('Dashbored.Contact.mail')->with('contact',$contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        Mail::send('mails.demo', ['contact' => $contact], function ($m) use ($contact) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($contact->Email)->subject('Your Reminder!');
        });
        return redirect('contact')->with('success', 'Message Envoye');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $contact = Contact::OrderBy('id', 'desc')->paginate(8);
        return view('Dashbored.Contact.show')->with('contact', $contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
