<?php

namespace App\Http\Controllers;

use App\Feed;
use App\Mail\Feeder;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feed = Feed::find($request->id);
        if($feed->check != 1) {
            $feed->name = $request->name;
            $feed->title = $request->title;
            $feed->feed = $request->feed;
            $feed->phone = $request->phone;
            $feed->check = 1;
            $feed->save();

            \Illuminate\Support\Facades\Mail::to('Wsalonkg@gmail.com')->send(new Feeder($request->all()));
        }



        if ($request->ajax()){
            return response()->json([
                'status' => "success"
            ]);
        }

        return back();
    }

    public function single(Request $request)
    {
        $feed = Feed::find($request->id);
        if($feed->check == null)
        {
            return view('feed_single',['feed' => $feed]);
        }
        else
        {
            return view('welcome');
        }
    }
}
