<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Content;
use App\Models\Project;
use App\Models\Client;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
    *
    *Get aboutus view
    *
    */
    public function aboutus()
    {
        $data = [];
        $data = array(
            'overview' => Content::where('status', '1')->where('which_page', 'About')->first(),
            'mission' => Content::where('status','1')->where('which_page', 'mission')->first(),
            'projects'      => Project::where('status', '1')->orderBy('updated_at','DESC')->limit(4)->get(),
            'faqs'    => Faq::where('status', '1')->limit(3)->get(),  
            'clients'       => Client::where('status', '1')->get(),
        );
        return view('contents.about_us', compact('data'));
    }

    /**
    *
    *Get aboutus view
    *
    */
    public function services()
    {
        $data = [];
        $data = array(
            'service' => Content::where('status', '1')->where('which_page', 'Service')->first(),
            'projects'      => Project::where('status', '1')->orderBy('updated_at','DESC')->limit(4)->get(),
            'mission' => Content::where('status','1')->where('which_page', 'mission')->first(),
            'faqs'    => Faq::where('status', '1')->limit(3)->get(), 
            'clients'       => Client::where('status', '1')->get(), 
        );
        return view('contents.service', compact('data'));
    }    

    /**
    *
    * Get Contact us view 
    *
    */
    public function contactus()
    {
        return view('contents.contact_us');
    }
}
