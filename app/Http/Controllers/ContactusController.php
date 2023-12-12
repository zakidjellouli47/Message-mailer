<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Response;
use Mail;
use App\Models\Contactus;

class ContactusController extends Controller
{
    
    function index()
    {
     return view('contact_us');
    }

    function submit(Request $request)
    {
     $data = array(
      'name_data'  => $request->name,
      'email_data' => $request->email,
      'subject_data' => $request->subject
     );

     Mail::send('mail', $data, function($subject) use ($request){
      $subject->to('zakidjellouli1997@gmail.com', 'Webslesson')->subject('New Enquiry received ' . $request->name);
      $subject->from($request->email, $request->name);
     });

     Contactus::create($request->all());

     return redirect()->back()->with('success', 'Message has been sent...');
    }
}
