<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\User;
use Session;
use Boost;
use Sentinel;
use App\Models\Invoice;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $products)
    {
        $slug = Boost::getUniqueSlug($products,$request->product_name);
        $invoiceNumber = mt_rand(10000,99999); 
        
        $data = [
            'product_name' => $request->product_name,
            'slug'         => $slug,
            'weight'       => $request->weight,
            'price'        => $request->price,
            'product_image'=> Boost::fileUpload($request,'product_image','','/uploads/productImage'),
            'desc'         => $request->desc,
            'user_id'      => Sentinel::getUser()->id,
            'created_at'   => now(),
        ];

        $proudctId = Product::create($data);

        $invoice = [
          'invoice_number' => '#'.''.$invoiceNumber,
          'product_id' => $proudctId->id,
          'user_id'      => Sentinel::getUser()->id,
          'created_at'   => now(),
        ];

        Invoice::create($invoice);

        Session::flash('success','Product Create Successfully');

        return redirect('boostadmin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::where('slug',$slug)->first();
        
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $product = Product::where('slug',$slug)->first();

        $data = [
            'product_name' => $request->product_name, 
            'weight'       => $request->weight,
            'price'        => $request->price,
            'product_image'=> Boost::fileUpload($request,'product_image','old_image','/uploads/productImage'), 
            'desc'         => $request->desc,
            'updated_at'   => now(),
        ];

        $product->update($data);

        Session::flash('success','Product Update Successfully');

        return redirect('boostadmin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        Session::flash('error','Product delete successfully.');

        return redirect('boostadmin/products');
    }
}
