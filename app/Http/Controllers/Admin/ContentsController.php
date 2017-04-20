<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\UploadedFile;
use App\Models\Content;
use Image;
class ContentsController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "contents";
        $this->headerTitle      = "Content";
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Content::all();
        return view('admin.index',['data' => $data,'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create',['controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $file = $request->file('thumbnail_image');
        if($request->hasFile('thumbnail_image'))
        {
            if ($request->file('thumbnail_image')->isValid()) {
                $width = '390'; $height = '260';
                $data['thumbnail_image'] = image_upload($file, $this->controllerName, $width, $height);
            }
        }
        $content = Content::create($data);
        if($content)
        {
            return redirect()->route('admin.contents.index')->withMessage('Content SuccessFully Created!!');
        }
        return redirect()->back()->withError('Content Creation Failed!');
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
            $content = Content::find($id);
        }
        catch (Exception $e)
        {
            abort(404);
        }

        return view('admin.edit',['data' => $content, 'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        try{
            $content = Content::find($id);
            $data = $request->all();
            $file = $request->file('thumbnail_image');
            if($request->hasFile('thumbnail_image'))
            {
                if ($request->file('thumbnail_image')->isValid()) {
                    $width = '390'; $height = '260';
                    $data['thumbnail_image'] = image_upload($file, $this->controllerName, $width, $height);
                }
            }
            $content->update($data);
            return redirect()->route('admin.contents.index')->withMessage('Content Updated SuccessFully.');
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
        $content        = Content::find($id);
        $content->update($data);
        return redirect()->route("admin.contents.index")->withMessage("Presence Updated");
    }
}
