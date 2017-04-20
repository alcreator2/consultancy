<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Rating;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data = array(
            'ratings'       => Rating::where('status', '1')->limit('3')->get(),
            'products'      => Product::where('status','1')->select('title', 'code')->get(),
            'projects'      => Project::where('status', '1')->orderBy('updated_at','DESC')->limit(4)->get(),
            'mission'       => Content::where('status','1')->where('which_page', 'mission')->first(),
            'faqs'          => Faq::where('status', '1')->limit(3)->get(), 
            'banners'       => Banner::where('status', '1')->where('which_page', 'Main Banner')->limit(3)->get(),
            'productBanner' => Banner::where('status', '1')->where('which_page', 'Product Banner')->first(),
            'testimonial'   => Banner::where('status', '1')->where('which_page', 'Testimonials')->first(),
            'serviceBanner' => Banner::where('status', '1')->where('which_page', 'Services')->limit(3)->get(),
            'clients'       => Client::where('status', '1')->get(),
            'services'      => Content::where('status', '1')->where('which_page', 'Service')->first(),
        );
        return view('home.index',compact('data'));
    }
}
