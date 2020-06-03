<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Sentinel;
use Session;
use Baazar;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $brand = Brand::all();
       return view('admin.brand.index',compact('brand'));
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
    public function store(Brand $brand,Request $request)
    {
        $this->validateForm($request);    
        $data = [
            'name'         => $request->name,           
            'description'  => $request->description,
            'logo'         => Baazar::fileUpload($request,'logo','','/uploads/brand_image'),
            'user_id'      => Sentinel::getUser()->id,
            'created_at'   => now(),
        ];
        Brand::create($data);
        Session::flash('success', 'Brand Inserted Successfully!');
        return redirect('andbaazaradmin/products/brand');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Brand $brand,Request $request)
    {
        $this->validateForm($request);
        $data =[
            'name'         => $request->name,           
            'description'  => $request->description,          
            'logo'         => Baazar::fileUpload($request,'logo','old_image','/uploads/brand_image'),         
            'user_id'      => Sentinel::getUser()->id,
            'updated_at'   => now(),
        ];

        $brand->update($data);

        Session::flash('success', 'Brand Updated Successfully');
        return redirect('andbaazaradmin/products/brand');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        Session::flash('success', 'Brand Deleted Successfully!');
        return redirect('andbaazaradmin/Products/brand');
    
    }
    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo'=>'required',
        ]);
    }
}
