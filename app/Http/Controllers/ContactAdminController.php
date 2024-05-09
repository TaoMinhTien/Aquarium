<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactAdminController extends Controller
{
    public function index() {
        return view('layout.contact.contactAdmin');
    }

}
