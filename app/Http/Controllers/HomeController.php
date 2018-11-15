<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // User, day
        $cacheKey = md5(vsprintf('%s.%s', [
            'newestPosts',
            $request->user()->id,
        ]));
        $minutes = 1;
        $posts = Post::with([
                'user' => function($qr) {
                    $qr->where('name', 'Conner Auer');
                }
            ])
            ->where('id', 10)
            ->orWhere('title', 'abc')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

            return '111';
        // dd($posts);
        // $newestPosts = Cache::remember($cacheKey, $minutes, function () {
        //     return Post::with('user')->orderBy('created_at', 'desc')->limit(10)->get();
        // });
        // return view('home', ['newestPosts' => $newestPosts]);
    }
}
