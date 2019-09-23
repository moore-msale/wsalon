<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function Mail(Request $request)
    {
        \Illuminate\Support\Facades\Mail::to('mackinkenny@gmail.com')->send(new Mail($request->all()));

        if($request->ajax()) {
            return response()->json("success");
        }

        return back();
    }
}
