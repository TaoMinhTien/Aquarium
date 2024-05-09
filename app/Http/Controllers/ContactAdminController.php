<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactAdminController extends Controller
{
    public function index() {
        $contact = Contact::simplePaginate(20);
        return view('layout.contact.contactAdmin',['contact' => $contact]);
    }

}
