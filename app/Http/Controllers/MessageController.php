<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use App\Mail\Mail2;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function Mail(Request $request)
    {
        \Illuminate\Support\Facades\Mail::to('Wsalonkg@gmail.com')->send(new Mail($request->all()));

        if($request->ajax()) {
            return response()->json("success");
        }

        return back();
    }

    public function Mail2(Request $request)
    {
        \Illuminate\Support\Facades\Mail::to('Wsalonkg@gmail.com')->send(new Mail2($request->all()));

        if($request->ajax()) {
            return response()->json("success");
        }

        return back();
    }
}
