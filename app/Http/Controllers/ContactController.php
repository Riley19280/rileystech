<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    //

    public function index(Request $request) {
        return view('contact');
    }

    public function submit(Request $request) {


        $name = Input::get('name');
        $email = Input::get('email');
        $message = Input::get('message');

        Mail::to($request->user())->send($message   );

        return view('contact',['success'=>true]);
    }
}
