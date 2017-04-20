<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\UploadedFile;
use App\Models\Product;
use Image;
class ProductController extends Controller
{
    protected $controllerName;
    protected $headerTitle;
   
    public function __construct()
    {
        $this->controllerName   = "products";
        $this->headerTitle      = "Product";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('updated_at', 'DESC')->get();
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
        $product = Product::create($data);
        if($product)
        {
            return redirect()->route('admin.products.index')->withMessage('Product SuccessFully Created!!');
        }
        return redirect()->back()->withError('Product Creation Failed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

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
            $data = Product::find($id);
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
    public function update(ProductRequest $request, $id)
    {
        try{
            $product = Product::find($id);
            $data = $request->all();
            $file = $request->file('thumbnail_image');
            if($request->hasFile('thumbnail_image'))
            {
                if ($request->file('thumbnail_image')->isValid()) {
                    $width = '390'; $height = '260';
                    $data['thumbnail_image'] = image_upload($file, $this->controllerName, $width, $height);
                }
            }
            $product->update($data);
            return redirect()->route('admin.products.index')->withMessage('Product Updated SuccessFully.');
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
        $product        = Product::find($id);
        $product->update($data);
        return redirect()->back()->withMessage("Presence Updated");
    }
}
