<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function updateSitemap(){

        SitemapGenerator::create('https://wsalon-showroom.com')->hasCrawled(function (Url $url) {
        if($url->url == 'https://wsalon-showroom.com/'){
          return;
        }
        return $url;
        })->writeToFile('sitemap.xml');

        return redirect('/sitemap.xml');
    }
}
