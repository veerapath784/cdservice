<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUpload;
use App\Article;
use App\Category;

class ArticleController extends Controller
{

    protected $rules = [
        'title' => 'required',
        'thumbnail' => 'required|file',
        'description' => 'required|max:255'
    ];
    protected $path = "/admin/article";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.article.index', [
            'articles' => Article::orderBy('id','desc')->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create', [
            'categorys' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = "https://via.placeholder.com/450x580";
        if (request()->has('thumbnail')) {
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/article');
            $imageUpload->width = 255;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();
        }

            $request->validate($this->rules);
            $article = new Article();
            $article->title = $request->input('title');
            $article->category_id = $request->input('category_id');
            $article->thumbnail = $imageName;
            // $article->user_id = auth()->user()->id ;
            $article->detail = $request->input('detail');
            $article->description = $request->input('description');
            $article->date = $request->input('date');
            $article-> save();
            return redirect($this->path);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $article = \App\Article::find($id);
        $article->delete();
        return response()->json();
    }
}
