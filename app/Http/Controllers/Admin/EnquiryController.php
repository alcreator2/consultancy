<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "enquiries";
        $this->headerTitle      = "Enquiry";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Enquiry::all(); 
       return view('admin.index', ['data' => $data,'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }
}
