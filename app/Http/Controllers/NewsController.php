<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Travel;

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

    public function showtravel($id)
    {
        $travel = Travel::find($id);
        $data = [
            'travel' => $travel,
        ];


        return view('showtravel', $data,[
            'url' => url('travel/' . $id )
        ]);
    }

}
