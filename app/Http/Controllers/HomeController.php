<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $logo=Publisher::all();
        $featured=Book::with('author')->where('is_featured','1')->take(4)->get();
        $bestsaller=Book::with('author')->where('is_best_saller','1')->first();
        return view('home', compact('banners', 'logo', 'featured','bestsaller'));
    }
}
