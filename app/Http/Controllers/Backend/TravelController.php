<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUpload;
use App\Travel;

class TravelController extends Controller
{
    protected $rules = [
        'title' => 'required',
        'thumbnail' => 'required|file',
        'description' => 'required|max:255'
    ];
    protected $path = "/admin/travel";
    /**
     * Display a listing of the resource.
     *77
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.travel.index', [
            'travels' => Travel::orderBy('id','desc')->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.travel.create');
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
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/travel');
            $imageUpload->width = 255;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();
        }

            $request->validate($this->rules);
            $travel = new Travel();
            $travel->title = $request->input('title');
            $travel->thumbnail = $imageName;
            // $travel->user_id = auth()->user()->id ;
            $travel->detail = $request->input('detail');
            $travel->phone = $request->input('phone');
            $travel->description = $request->input('description');
            $travel-> save();
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
        $travel = \App\Travel::find($id);
        $travel->delete();
        return response()->json();
    }
}
