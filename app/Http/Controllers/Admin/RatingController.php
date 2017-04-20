<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Models\Rating;

class RatingController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "ratings";
        $this->headerTitle      = "Testimonails";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Rating::all(); 
       return view('admin.index', ['data' => $data,'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
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
    public function store(RatingRequest $request)
    {
        $data = $request->all();
        $ratings = Rating::create($data);
        if($ratings)
        {
            return redirect()->route('admin.ratings.index')->withMessage('Rating SuccessFully Created!!');
        }
        return redirect()->back()->withError('Rating Creation Failed!');
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
            $data = Rating::find($id);
        }
        catch (Exception $e)
        {
            abort(404);
        }

        return view('admin.edit',['data' => $data, 'controllerName' => $this->controllerName, 'headerTitle' => $this->headerTitle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RatingRequest $request, $id)
    {
        try{
            $rating = Rating::find($id);
            $data = $request->all();
            $rating->update($data);
            return redirect()->route('admin.ratings.index')->withMessage('Rating Updated SuccessFully.');
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

    public function change_status(Request $request, $id)
    {
        $data['status'] = $request->only('status')['status']; 
        if(is_null($data['status']))
        {
            $data['status'] = 0;
        }
        $rating     = Rating::find($id);
        $rating->update($data);
        return redirect()->back()->withMessage("Presence Updated");
    }
}
