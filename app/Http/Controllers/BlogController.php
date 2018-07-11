<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

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

        if ($request->file('img')){
            $b = new Blog();
            $b->title = $request->title;
            $b->text = $request->text;
            $image = $request->file('img');
            $fileName = $request->title.'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            $img->stream();
            //Storage::disk('local')->put('images'.'/'.$fileName,$img,'public');
            //dd($fileName);
            
            $img->save(public_path('/uploads/images/'.$fileName));
            
            $b->photo_path = $fileName;
            $b->save();
        }
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
    public function edit(Request $request, $id)
    {
        //

        $blogs = Blog::find($id);
        $newPhoto=0;
        $validator= \Validator::make($request->all(), [
            'news_title' => 'required',
            'news_content'=>'required'
        ]);


        if ($validator->fails()) {
            return redirect()->route('news')->with('error', 'Berita gagal diperbaruhi!. Judul, konten dan file tidak boleh kosong. file hanya bisa jpeg/ jpg dan png.');
        }

        if($request->hasFile('file')){
            $newPhoto=1;
            $uploadedFile = $request->file('file');
            $extension = $uploadedFile->getClientOriginalExtension();
            $name= "/blog".time().".".$extension;
            $blogs->photo_path = 'files/blog'.$name;

        }


        $blogs->title = $request->input('news_title');
        $blogs->text = $request->input('news_content');
        $blogs->upload_date = date('Y-m-d H:i:s');
        if ($newPhoto && $blogs->save()){
            $path = $uploadedFile->storeAs(
                'public/files/blog/', $name
            );

            return redirect()->route('get.blogs')->with('success', 'Berita telah diperbaruhi!');
        }else if ($blogs->save()){
            return redirect()->route('get.blogs')->with('success', 'Berita telah diperbaruhi!');
        }
        else return redirect()->back()->with('error', 'Berita gagal diperbaruhi!');
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
            return redirect()->view('admin.artikel')->with('success', 'Berita telah dihapus!');
        else
            return redirect()->view('admin.artikel')->with('error', 'Berita gagal dihapus!');
    }

    public function updayte($id){
        $b = Blog::find($id);
        return view('admin.view-artikel')->with('b', $b);
    }



}
