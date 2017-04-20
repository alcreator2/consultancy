<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\UploadedFile;
use App\Models\Client;
use Image;

class ClientController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "clients";
        $this->headerTitle      = "Client";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();
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
    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $file = $request->file('logo');
        if($request->hasFile('logo'))
        {
            if ($request->file('logo')->isValid()) {
                $width = '170'; $height = '120';
                $data['logo'] = image_upload($file, $this->controllerName, $width, $height);
            }
        }
        $client = Client::create($data);
        if($client)
        {
            return redirect()->route('admin.clients.index')->withMessage('Client SuccessFully Created!!');
        }
        return redirect()->back()->withError('Client Creation Failed!');
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
            $client = Client::find($id);
        }
        catch (Exception $e)
        {
            abort(404);
        }

        return view('admin.edit',['data' => $client, 'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        try{
            $client = Client::find($id);
            $data = $request->all();
            $file = $request->file('logo');
            if($request->hasFile('logo'))
            {
                if ($request->file('logo')->isValid()) {
                    $width = '170'; $height = '120';
                    $data['logo'] = image_upload($file, $this->controllerName, $width, $height);
                }
            }
            $client->update($data);
            return redirect()->route('admin.clients.index')->withMessage('Client Updated SuccessFully.');
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
        $client        = Client::find($id);
        $client->update($data);
        return redirect()->back()->withMessage("Presence Updated");
    }
}
