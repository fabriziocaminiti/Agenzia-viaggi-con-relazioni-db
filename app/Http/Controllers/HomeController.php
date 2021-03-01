<?php

namespace App\Http\Controllers;

use App\Mail\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create()
    {

        return view('mailcreate');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $dateOfbirth = $request->input('dateOfbirth');
        $job = $request->input('job');
        $message = $request->input('message');

        $user = compact('name', 'phone', 'dateOfbirth', 'job', 'email', 'message');


        Mail::to($email)->send(new Booking($user));

        return redirect()->back()->with('message', 'Riceverai informazioni in giornata riguardo questo itinerario');
    }
}
