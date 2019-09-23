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
}
