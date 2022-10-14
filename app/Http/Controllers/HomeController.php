<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $datas= Person::with('post')->get();
        return view('home.index', compact('datas'));

    }

}
