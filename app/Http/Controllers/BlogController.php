<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Input;
use App\blog;
use File;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     public $timestamps = false;


    public function index()
    {
        $b = Blog::all();
        return view('admin.daftar-artikel')->with('b', $b);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.input-artikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $b = new Blog();
        $b->title = $request->title;
        $b->text = $request->text;

        if ($request->file('img')){
            $image = $request->file('img');
            $name = Input::file('img')->getClientOriginalName();
            $img = Image::make($image->getRealPath());
            $img->stream();
            $img->save(public_path('/uploads/images/'.$name));
            $b->photo_path = $name;
        }
        //$b->save();
        if ($b->save()){
            return redirect()->route('artikel')->with('success', 'Berita telah diupload!');
        }
        else return redirect()->route('artikel')->with('error', 'Berita gagal diupload!');

    }

    public function show($id)
    {
        //di web
        $b = Blog::where('id', $id)->first();
        // dd($view);
        return view('admin.view-artikel', compact('b'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $b = Blog::where('id', $id)->first();
        return view('admin.update-artikel', compact('b'));
    }

    public function update (Request $request, $id)
    {
        $b = Blog::find($id);

        $b->title = $request->title;
        $b->text = $request->text;

        if ($request->hasFile('img')){
            $image = $request->file('img');
            $name = $image->getClientOriginalName();
            $img = Image::make($image->getRealPath());
            $img->stream();
            $img->save(public_path('/uploads/images/'.$name));
            $b->photo_path = $name;
        }
        if ($b->save()){
            return redirect()->route('artikel')->with('success', 'Berita telah diupdate!');
        }
        else return redirect()->route('artikel')->with('error', 'Berita gagal diupdate!');

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $b = Blog::find($id);
        if ($b->delete())
            return redirect()->route('artikel')->with('success', 'Berita telah dihapus!');
        else
            return redirect()->route('artikel')->with('error', 'Berita gagal dihapus!');
    }

    public function updayte($id){
        $b = Blog::find($id);
        return view('admin.view-artikel')->with('b', $b);
    }



}
