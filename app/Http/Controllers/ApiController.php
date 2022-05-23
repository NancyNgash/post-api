<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Post;
use App\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $url= 'https://jsonplaceholder.typicode.com/';
        $posts = Http::get($url . 'posts')->json();
        return view('post.index', compact('posts'));
        // dd($posts);
        // $post_json= json_decode($posts);
    }
    public function comment()
    {
        $url= 'https://jsonplaceholder.typicode.com/';
        $comments = Http::get($url . 'comments')->json();
        return view('comment', compact('comments'));
        // dd($comments);
        // $comment_json= json_decode($comments);
    }
    public function album()
    { 
        $url= 'https://jsonplaceholder.typicode.com/';
        $albums = Http::get($url . 'albums')->json();
        // dd($albums);
        return view('album', compact('albums'));
        // $album_json= json_decode($albums);
    }
    public function photo()
    {
        $url= 'https://jsonplaceholder.typicode.com/';
        $photos = Http::get($url . 'photos')->json();
        // dd($photos);
        return view('photo', compact('photos'));
        // $photo_json= json_decode($photos);
       
    }

}

