<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingMethod;
use App\Models\Courier;
use Sentinel;

class ShippingMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courier = Courier::all();
      $shippingmethod = ShippingMethod::all();
      return view('admin.shipping_method.index',compact('courier','shippingmethod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $courier = Courier::all();
      return view('admin.shipping_method.create',compact('courier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //$this->validateForm($request);

        $data =[
            'name' => $request->name,
            'fees' => $request->fees,
            'desc' => $request->desc,
            'courier_id' => $request->courier_id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];
        ShippingMethod::create($data);

         return redirect('andbaazaradmin/shippingmethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingMethod $shippingmethod)
    {
        return  view('admin.shipping_method.show',compact('shippingmethod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingMethod $shippingmethod)
    {
      $courier = Courier::all();
      return view('admin.shipping_method.edit',compact('courier','shippingmethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingMethod $shippingmethod,Request $request)
    {
      $data =[
          'name' => $request->name,
          'fees' => $request->fees,
          'desc' => $request->desc,
          'courier_id' => $request->courier_id,
          'user_id' => Sentinel::getUser()->id,
          'updated_at' => now(),
      ];
      $shippingmethod->update($data);

     return redirect('andbaazaradmin/shippingmethod');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingMethod $shippingmethod)
    {
      $shippingmethod->delete();

      return redirect('andbaazaradmin/shippingmethod');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'fees' => 'required',
            'courier_id' => 'required',
        ]);
    }
}
