<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class FrontController extends Controller
{
    //
    public function viewall()
    {
        $b = Blog::orderBy('updated_at', 'DESC')->get();
        return view('artikel.viewall',compact('b'));
    }

        public function index()
    {
        $c = Blog::orderBy('updated_at', 'DESC')->get();
        return view('artikel.index',compact('c'));
    }


    public function view($id){
        $bg = Blog::orderBy('updated_at', 'DESC')->get();
    	$blog = Blog::where('id', $id)->first();
    	return view('artikel.artikel', compact('blog','bg'));
    }
}
