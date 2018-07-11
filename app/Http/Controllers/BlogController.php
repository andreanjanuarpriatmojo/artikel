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

        
    
        // // $validator= \Validator::make($request->all(), [
        // //     'title' => 'required',
        // //     'photo_path' => 'required|file|max:2000|mimes:png,jpeg,jpg',
        // //     'text'=>'required'
        // // ]);


        // //  if ($validator->fails()) {
        // //      return redirect()->route('artikel.create')->with('error', 'Upload Berita Gagal! Judul, Konten dan Foto tidak boleh kosong. Foto hanya bisa berekstensi jpeg/ jpg dan png.');
        // //  }

        //  // $uploadedFile = $request->file('file');

        //  // $extension = $uploadedFile->getClientOriginalExtension();

        //   $name= "/blog".time().".".$extension;

        // $b = new Blog();
        // $b->title = $request->title;
        // $b->text = $request->text;
        // $b->photo_path = 'artikel/';
        // if( $request->hasFile('img') ) {
        // $file = $request->file('img');
        // // Now you have your file in a variable that you can do things with
        // }
        // Storage::disk('local')->put('images/','contents');
        // $b->save();
        //  // if ($b->save()){
        //  //     $uploadedFile->move('files/blog', $name);
        //  //     $path = $uploadedFile->storeAs(
        //  //         'public/artikel/', $name
        //  //     );
        //  //     return redirect()->route('artikel')->with('success', 'Berita telah diupload!');
        //  // }
        //  // else return redirect()->route('artikel')->with('error', 'Berita gagal diupload!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $blogs = Blog::find($id);
        $newPhoto=0;
        $validator= \Validator::make($request->all(), [
            'news_title' => 'required',
            'news_content'=>'required'
        ]);


        if ($validator->fails()) {
            return redirect()->route('artikel.update')->with('error', 'Berita gagal diperbaruhi!. Judul, konten dan file tidak boleh kosong. file hanya bisa jpeg/ jpg dan png.');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $b = Blog::find($id);
        if ($b->delete())
            return redirect()->route('artikel.show.blogs')->with('success', 'Berita telah dihapus!');
        else
            return redirect()->route('artikel.show')->with('error', 'Berita gagal dihapus!');
    }

    public function updayte($id){
        $blog = Blog::find($id);
        return view('dashboard.admin.view-berita')->with('blogs', $blog);
    }



}
