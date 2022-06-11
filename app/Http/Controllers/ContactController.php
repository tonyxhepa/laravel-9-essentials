<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contacts.show');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('my@mail.com')->send(new ContactMail($request->name, $request->email, $request->content));

        return to_route('welcome');
    }
}
