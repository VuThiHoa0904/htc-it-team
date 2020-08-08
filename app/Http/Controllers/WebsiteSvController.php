<?php

namespace App\Http\Controllers;
use App\Banner;
use DB;
use App\WebsiteSv;
use App\Service;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use App\Commitment;
use TCG\Voyager\Models\Post;

class WebsiteSvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$slug)
    {
        $service = DB::table('services')->where('id', $id)->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$id)->get();
        $item_detail = DB::table('website_svs')->where('slug','=',$slug)->first();
        return view('services.detail_service',compact('service','title_list','item_detail'));
    }
    public function show_service()
    {
        $services = Service::all();
        return view('services.service',compact('services','banners'));
    }
    public function show_service_detail($id)
    {
        $services = Service::all();
        $service = DB::table('services')->where('id', $id)->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$id)->get();
        return view('services.detail_service_post',compact('services','service','title_list'));
    }
    public function show_brand()
    {

        $service = DB::table('services')->where('id', '2')->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        $brands = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        return view('services.brand',compact('brands','service','title_list'));
    }

    public function show_content()
    {
        $service = DB::table('services')->where('id', '3')->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        $contents = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        return view('services.content',compact('contents','service','title_list'));
    }

    public function show_website()
    {
        $banners = Banner::all();
        $service = DB::table('services')->where('id', '1')->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        $websites = DB::table('website_svs')->where('service_id','=',$service->id)->get();
//        $websites = DB::table('website_svs')->Join('services','website_svs.service_id','=','services.id')->get();
        return view('services.website',compact('websites','service','title_list','banners'));
    }

    public function show_mobile()
    {
        $banners = Banner::all();
        $service = DB::table('services')->where('id', '4')->first();
        $title_list = DB::table('website_svs')->where('service_id','=',$service->id)->get();
        $mobiles = DB::table('website_svs')->where('service_id','=',$service->id)->get();
//        $websites = DB::table('website_svs')->Join('services','website_svs.service_id','=','services.id')->get();
        return view('services.mobile',compact('mobiles','service','title_list','banners'));
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
