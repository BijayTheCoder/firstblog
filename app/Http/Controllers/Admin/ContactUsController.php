<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index(){
        $contactt = ContactUs::all();
        return view('users.contacted', ['contacts'=>$contactt]);
    }

    public function showContact()
    {
        return view ('users.contacted');
    }

    public function getContact()
    {
        return view ('users.contactus');
    }


    public function save(Request $request) {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $contact = new ContactUs;

        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact-email',
             array(
                 'fullname' => $request->get('fullname'),
                 'email' => $request->get('email'),
                 'user_message' => $request->get('message')
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('bijayadhakal579@gmail.com');
               });

        return back()->with('success', 'Thank you for contacting us!');
    }
}
