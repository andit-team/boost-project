<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Sentinel;
use Baazar;
use Session;
class PaymentMethodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentmethod = PaymentMethod::all();
       return view('admin.payment_methods.index',compact('paymentmethod'));
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
    public function store(PaymentMethod $paymentmethod,Request $request)
    {

      $this->validateForm($request);
      $slug = Baazar::getUniqueSlug($paymentmethod,$request->name);
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'slug' => $slug,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        PaymentMethod::create($data);
        Session::flash('success', 'Payment Method Inserted Successfully!');
        return redirect('andbaazaradmin/paymentmethod');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentmethod)
    {
        // $paymentMethod = PaymentMethod::find($id);
        return view('admin.payment_methods.show',compact('paymentmethod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentmethod)
    {
        // $paymentMethod = PaymentMethod::find($id);
        //dd($paymentMethod);
        return view('admin.payment_methods.edit',compact('paymentmethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,PaymentMethod $paymentmethod)
    {
        $this->validateForm($request);
        // $paymentMethod = PaymentMethod::find($id);
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $paymentmethod->update($data);
        Session::flash('success', 'Payment Method Updated Successfully!');
        return redirect('andbaazaradmin/paymentmethod');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentmethod)
    {
        // $paymentMethod = PaymentMethod::find($id);
        $paymentmethod->delete();
        Session::flash('warning', 'Payment Method Deleted Successfully!');
        return redirect('andbaazaradmin/paymentmethod');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);
    }
}
