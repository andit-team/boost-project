<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use Sentinel;

class CurrenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();
        return view('admin.currencies.index',compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.currencies.create');
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
        $this->validateForm($request);
       $data = [
           'name' =>$request->name,
           'code' =>$request->code,
           'symbol' =>$request->symbol,
           'user_id' => Sentinel::getUser()->id,
           'created_at' => now(),
       ];

       Currency::create($data);

       return redirect('andbaazaradmin/currency');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
       return view('admin.currencies.show',compact('currency'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('admin.currencies.edit',compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        $this->validateForm($request);
        $data = [
            'name' =>$request->name,
            'code' =>$request->code,
            'symbol' =>$request->symbol,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $currency->update($data);

        return redirect('andbaazaradmin/currency');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        $currency->delete();

        return redirect('andbaazaradmin/currency');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'symbol' => 'required',
        ]);
    }
}
