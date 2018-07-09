<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

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


    public function index()
    {
        //di web 
        $all = Blog::orderBy('upload_date', 'DESC')->get();
        return view('artikel',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.input_artikel');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $b = new blog();
        $b->title = $request->title;
        $b->text = $request->text;
        $b->photo_path = $request->photo_path;
        $b->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //di web
        $view = Blog::where('id', $id)->first();
        // dd($view);
        return view('artikel', compact('view'));
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
    }

    public function view(){
        return view('dashboard.admin.berita');
    }

    public function getBlogs(){
        $blogs = Blog::all();

        for ($i=0; $i < $blogs->count(); $i++) {
            if(str_word_count($blogs[$i]->text, 0)>150){
                $blogs[$i]->text=preg_replace('/((\w+\W*){2}(\w+))(.*)/', '${1}', $blogs[$i]->text);
            }
        }
        return view('dashboard.admin.kumpulan-berita')->with('blogs', $blogs);

    }

    public function addBlog(Request $request){
        $validator= \Validator::make($request->all(), [
            'news_title' => 'required',
            'file' => 'required|file|max:2000|mimes:png,jpeg,jpg',
            'news_content'=>'required'
        ]);


        if ($validator->fails()) {
            return redirect()->route('blogs')->with('error', 'Berita gagal diupload! Judul, konten dan file tidak boleh kosong. File hanya bisa jpeg/ jpg dan png.');
        }

        $uploadedFile = $request->file('file');

        $extension = $uploadedFile->getClientOriginalExtension();

        $name= "/blog".time().".".$extension;

        $blogs = new Blog();
        $blogs->title = $request->input('news_title');
        $blogs->text = $request->input('news_content');
        $blogs->photo_path = 'files/blog'.$name;
        $blogs->upload_date = date('Y-m-d H:i:s');
        if ($blogs->save()){
            //$uploadedFile->move('files/blog', $name);
            $path = $uploadedFile->storeAs(
                'public/files/blog/', $name
            );
            return redirect()->route('blogs')->with('success', 'Berita telah diupload!');
        }
        else return redirect()->route('blogs')->with('error', 'Berita gagal diupload!');
    }

    public function updateBlog(Request $request, $id){
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

    public function updayteBlog($id){
        $blog = Blog::find($id);
        return view('dashboard.admin.view-berita')->with('blogs', $blog);
    }

    public function deleteBlog($id){
        $blog = Blog::find($id);
        if ($blog->delete())
            return redirect()->route('get.blogs')->with('success', 'Berita telah dihapus!');
        else
            return redirect()->route('get.blogs')->with('error', 'Berita gagal dihapus!');
    }


}
