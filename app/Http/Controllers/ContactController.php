<?php

namespace App\Http\Controllers;

use App\Mail\NewContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $new_contact = new Contact;
        $new_contact->fill($data);
        $new_contact->save();

        Mail::to('info@mail.com')->send(new NewContact($new_contact));
    }
}
