<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function updateSitemap(){
        SitemapGenerator::create('https://wsalon-showroom.com/')->writeToFile('sitemap.xml');

        return redirect()->back();
    }
}
