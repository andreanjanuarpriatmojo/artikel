<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class FrontController extends Controller
{
    //
    public function index()
    {
        $b = Blog::orderBy('id', 'DESC')->get();
        return view('artikel.index',compact('b'));
    }

    public function view($id){
        $bg = Blog::orderBy('id', 'DESC')->get();
    	$blog = Blog::where('id', $id)->first();
    	return view('artikel.artikel', compact('blog','bg'));
    }
}
