<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('welcome', compact('events'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
