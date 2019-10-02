<?php

namespace App\Http\Controllers;

use App\Feed;
use App\Mail\Feeder;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feed = new Feed();
        $feed->name = $request->name;
        $feed->title = $request->title;
        $feed->feed = $request->feed;
        $feed->phone = $request->phone;
        $feed->save();

        \Illuminate\Support\Facades\Mail::to('mackinkenny@gmail.com')->send(new Feeder($request->all()));

        if ($request->ajax()){
            return response()->json([
                'status' => "success"
            ]);
        }

        return back();
    }
}
