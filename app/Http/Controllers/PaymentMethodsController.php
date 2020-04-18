<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Sentinel;

class PaymentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payMethod = PaymentMethod::all();
       return view('admin.payment_methods.index',compact('payMethod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        PaymentMethod::create($data);

        return redirect('andbaazaradmin/paymentmethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        return view('admin.payment_methods.show',compact('paymentMethod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        //dd($paymentMethod);
        return view('admin.payment_methods.edit',compact('paymentMethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validateForm($request);
        $paymentMethod = PaymentMethod::find($id);
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $paymentMethod->update($data);

        return redirect('andbaazaradmin/paymentmethod');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->delete();

        return redirect('andbaazaradmin/paymentmethod');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);
    }
}
