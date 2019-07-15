<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Article;
use App\Department;
use App\Travel;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index',[
            'banners' => Banner::all(),
            'latestArticle' => Article::orderBy('id', 'desc')->limit(3)->get(),
            'articles' => Article::all(),

        ]);
    }

    public function history()
    {
        return view('history');
    }
    public function department()
    {
        return view('department',[
            'departments' => Department::all(),
        ]);
    }
    public function travel()
    {
        return view('travel',[
            'latestTravel' => Travel::orderBy('id','desc')->get()

        ]);
    }

    public function intro(){
        return view('intro');
    }


}
