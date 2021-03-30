<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($id){
        return view('pages', [
            'page' => Post::findOrFail($id)
        ]);
    }

    public function index(){
        return view('pages', [
            'pages' => Post::all()
        ]);
    }

}
