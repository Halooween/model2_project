<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HasOneThroughtController extends Controller
{
     public function index()
    {
       // $posts = Post::findOrFail(1)->commentMedia;	
       $posts = Post::with('commentMedia')->get();

        dd($posts);
      

    }
}
