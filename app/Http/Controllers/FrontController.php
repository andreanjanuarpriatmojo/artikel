<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class FrontController extends Controller
{
    //
    public function index()
    {
        $b = Blog::orderBy('updated_at', 'DESC')->get();
        return view('artikel.front',compact('b'));
    }

    public function view($id){
    	$view = Blog::where('id', $id)->first();
    	// dd($view);
    	return view('pengumuman-more', compact('view'));
    }
}
