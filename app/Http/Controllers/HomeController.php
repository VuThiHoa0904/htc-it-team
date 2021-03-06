<?php

namespace App\Http\Controllers;

 use App\Service;
 use App\Team;
 use App\Product;
 use App\Banner;
 use TCG\Voyager\Models\Post;
 use App\Commitment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $teams = Team::all();
         $services = Service::all();
         $product = Product::orderBy('created_at', 'DESC')->first();
         $banners = Banner::all();
         $commitments = Commitment::all();
         $post = Post::orderBy('created_at', 'DESC')->first();
         $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

         return view('layouts.app', compact('services','teams','product','banners','commitments','posts','post'));
//        return view('layouts.app');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
