<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allevent()
    {
        return view('backend.allevent');
    }
    public function addevent()
    {
        return view('backend.addevent');
    }

    public function guestlist()
    {
        return view('backend.guestlist');
    }
    public function createticket()
    {
        return view('backend.createticket');
    }
}
