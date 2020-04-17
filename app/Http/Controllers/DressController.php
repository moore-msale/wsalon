<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Dress;
use App\Silhouette;
use App\Author;

use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index($title)
    {
        $dress = Dress::where('title',str_replace('_',' ',$title))->first();
        return view('dress-page',['dress' => $dress]);
    }

    public function catalog(Request $request)
    {
//        dd($request->author);
        $dresses = Dress::all();
        $content = Catalog::all()->first();

        return view('dress-catalog',['dresses' => $dresses, 'content' => $content]);
    }
    public function catalogSort($title){
      $title = str_replace('_',' ',$title);
      $author = Author::where('name',$title)->first();
      $silhouette = Silhouette::where('name',$title)->first();
      $dresses = Dress::all();
      $sortBy = '';
      if($author){
        $sortBy = 'author';
        $dresses = $dresses->where('author_id', $author->id);
      }else if($silhouette){
        $sortBy = 'silhouette';
        $dresses = $dresses->where('silhouette_id', $silhouette->id);
      }

      $content = Catalog::all()->first();

      return view('dress-catalog')->with('sortBy',$sortBy)->with('dresses',$dresses)->with('content',$content)
      ->with('sortByName',$title);

    }
}
