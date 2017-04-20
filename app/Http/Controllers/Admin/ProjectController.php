<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\UploadedFile;
use Image;

class ProjectController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "projects";
        $this->headerTitle      = "Project";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
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
        $project = Project::create($data);
        if($project)
        {
            return redirect()->route('admin.projects.index')->withMessage('Project SuccessFully Created!!');
        }
        return redirect()->back()->withError('Project Creation Failed!');
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
            $project = Project::find($id);
        }
        catch (Exception $e)
        {
            abort(404);
        }

        return view('admin.edit',['data' => $project, 'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
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
            $project = Project::find($id);
            $data = $request->all();
            $file = $request->file('thumbnail_image');
            if($request->hasFile('thumbnail_image'))
            {
                if ($request->file('thumbnail_image')->isValid()) {
                    $width = '390'; $height = '260';
                    $data['thumbnail_image'] = image_upload($file, $this->controllerName, $width, $height);
                }
            }
            $project->update($data);
            return redirect()->route('admin.projects.index')->withMessage('Project Updated SuccessFully.');
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
        $project        = Project::find($id);
        $project->update($data);
        return redirect()->route("admin.projects.index")->withMessage("Presence Updated");
    }
}
