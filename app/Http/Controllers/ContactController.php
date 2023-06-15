<?php

namespace App\Http\Controllers;

use App\Mail\NewContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try{
            Log::debug("CONTACT CONTROLLER");
            $data = $request->all();
            Log::debug($data);
            $new_contact = new Contact;
            $new_contact->fill($data);
            $new_contact->save();
    
            Mail::to('info@mail.com')->send(new NewContact($new_contact));
            return response()->json(['success' => true]);
        } catch(\Exception $e) {
            Log::debug($e->getMessage());
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
