<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Dress;
use App\Silhouette;
use App\Author;
use App\Slug;


use Illuminate\Http\Request;

class DressController extends Controller
{
    public function __construct()
    {
        $this->middleware('lowercaseroutes');
        $this->middleware('changeunderscorewithdash');
        $this->middleware('changeidtoname');      
    }

    public function index($title)
    {
        $title = str_replace('-',' ',$title);
        $word = Slug::where('word',$title)->first();
        if($word){
          $title = $word->from;
        }
        $dress = Dress::where('title',$title)->first();
        if(!$dress){
          abort(404);
        }
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
      $word = Slug::where('word',$title)->first();
      $title = str_replace('-',' ',$title);
      if($word){
        $title = $word->from;
      }
      $author = Author::where('name',$title)->first();
      $silhouette = Silhouette::where('name',$title)->first();
      $dresses = Dress::all();
      $sortBy = '';
      $sortByName = '';
      if($author){
        $sortBy = 'author';
        $dresses = $dresses->where('author_id', $author->id);
        $sortByName = $author->name;
      }else if($silhouette){
        $sortBy = 'silhouette';
        $dresses = $dresses->where('silhouette_id', $silhouette->id);
        $sortByName = $silhouette->name;
      }

      $content = Catalog::all()->first();

      return view('dress-catalog')->with('sortBy',$sortBy)->with('dresses',$dresses)->with('content',$content)
      ->with('sortByName',$sortByName);

    }
}
