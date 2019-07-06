<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $data = [
            'article' => $article,
        ];


        return view('shownews', $data,[
            'url' => url('news/' . $id )
        ]);
    }

}
