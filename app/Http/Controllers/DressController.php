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
        $title = str_replace('_',' ',enToRuLetter($title));
        $dress = Dress::where('title',$title)->first();
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
      $title = str_replace('_',' ',enToRuLetter($title));
      
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
