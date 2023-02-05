<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $menus = Menu::all();
        return view('welcome', compact('events','menus'));

    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
