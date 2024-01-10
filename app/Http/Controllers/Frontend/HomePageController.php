<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $politics = Post::Where('category_id', 10)
            ->latest()
            ->take(5)
            ->get();
        $business = Post::Where('category_id', 8)
            ->latest()
            ->take(5)
            ->get();
        $recent_news = Post::latest()
            ->take(11)
            ->get();
        return view('frontend.home.index', compact('recent_news', 'politics', 'business'));
    }
}
