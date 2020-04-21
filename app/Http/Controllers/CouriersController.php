<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;
use Sentinel;

class CouriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courier = Courier::all();
        return view('admin.couriers.index',compact('courier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.couriers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Courier::create($data);

        return redirect('andbaazaradmin/courier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        return view('admin.couriers.show',compact('courier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        return view('admin.couriers.edit',compact('courier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        $data = [
            'name' => $request->name,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $courier->update($data);

        return redirect('andbaazaradmin/courier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courier $courier)
    {
        $courier->delete();

        return redirect('andbaazaradmin/courier');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
    }
}
