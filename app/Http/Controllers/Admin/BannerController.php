<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Http\Requests\BannerRequest;
use App\Http\Requests\BannerUpdateRequest;
use Illuminate\Http\UploadedFile;
use Image;

class BannerController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "banners";
        $this->headerTitle      = "Banner";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::all();
        return view('admin.index',['data' => $data,'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', ['controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $data = $request->all();
        $file = $request->file('path');
        if($request->hasFile('path'))
        {
            if ($request->file('path')->isValid()) {
            		$sizeForImage = getHeightWidth($request->input('which_page'));
                    $data['path'] = multiple_cropper($file, $this->controllerName, $sizeForImage['width'], $sizeForImage['height']);
            }
        }
        $banner = Banner::create($data);
        if($banner)
        {
            return redirect()->route('admin.'.$this->controllerName.'.index')->withMessage('Banner SuccessFully Created!!');
        }
        return redirect()->back()->withError('Banner Creation Failed!');
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
        try{
            $banner = Banner::find($id);
        }
        catch (Exception $e)
        {
            abort(404);
        }

        return view('admin.edit',['data' => $banner, 'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdateRequest $request, $id)
    {
        try{
            $banner = Banner::find($id);
            $data = $request->all();
            $file = $request->file('path');
            if($request->hasFile('path'))
            {
                if ($request->file('path')->isValid()) {
                    $width = '1900'; $height = '782';
                    $data['path'] = multiple_cropper($file, $this->controllerName, $width, $height);
                }
            }
            $banner->update($data);
            return redirect()->route('admin.'.$this->controllerName.'.index')->withMessage('Banner Updated SuccessFully.');
        }
        catch (\Exception $e) {
            return redirect()->back()->withError("Sorry :( Something wrong happened.");
        }
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
    * Change Status of status
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function change_status(Request $request, $id)
    {
        $data['status'] = $request->only('status')['status']; 
        if(is_null($data['status']))
        {
            $data['status'] = 0;
        }
        $banner        = Banner::find($id);
        $banner->update($data);
        return redirect()->route("admin.".$this->controllerName.".index")->withMessage("Presence Updated");
    }
}

