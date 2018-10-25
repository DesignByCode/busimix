<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    /**
     * [contact description]
     * @return [type] [description]
     */
    public function contact()
    {
        return view('contact');
    }


    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:90',
            'email' => 'required|string|email',
            'subject' => 'required|string|max:90',
            'message' => 'required|string',
        ]);



        return back()->withSuccess('Mailed Successfully');
    }




}
