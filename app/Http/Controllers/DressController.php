<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index($id)
    {
        $dress = Dress::find($id);
        return view('dress-page',['dress' => $dress]);
    }

    public function catalog(Request $request)
    {
//        dd($request->author);
        if(isset($request->silhouette))
        {
            $dresses = Dress::where('silhouette_id', $request->silhouette)->get();
        }
        elseif(isset($request->author))
        {
            $dresses = Dress::where('author_id', $request->author)->get();
        }
        else
        {
            $dresses = Dress::all();
        }

        return view('dress-catalog',['dresses' => $dresses]);
    }
}
