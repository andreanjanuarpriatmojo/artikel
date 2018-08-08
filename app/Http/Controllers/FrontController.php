<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use DB;

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
        $d = Blog::orderBy('updated_at', 'DESC')->get();
        $populer = Blog::orderBy('view_count', 'DESC')->get();
        $c = DB::table('blogs')->orderBy('updated_at','DESC')->paginate(5);
        return view('artikel.index',compact('c','d','populer'));
    }


    public function view($id, Blog $post){

        // Increment count of view post
        $post=BLog::find($id);
        $post->view_count += 1 ;
        $post->save();
        //sort based view count
        $populer = Blog::orderBy('view_count', 'DESC')->get();

        $bg = Blog::orderBy('updated_at', 'DESC')->get();
    	$blog = Blog::where('id', $id)->first();
        //get next and previous ID
        // $current = Blog::find('id', $id)->first();
        // $previousID = Blog::where('id', '<', $current->id)->max('id');
        // $nexID = Blog::where('id', '>', $current->id)->min('id');
        //get next and previous ID 2
        // $next = DB::table($blog)->select(DB::raw('min(id) as id'))->where('id', '>', $id)->id;
        // $previous = DB::table($blog)->select(DB::raw('max(id) as id'))->where('id', '<', $id)->id;
        //get next and previous ID 3
        $user = Blog::find($id);
        $previous = Blog::where('id', '<', $user->id)->max('id');
        $next = Blog::where('id', '>', $user->id)->min('id');
    	return view('artikel.artikel', compact('populer','blog','bg','previous','next'));


    }
}
