<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use Sentinel;
use Session;
use Baazar;

class SizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = Size::all();
        return view('admin.sizes.index',compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Size $size,Request $request)
    {
      $this->validateForm($request);
      $slug = Baazar::getUniqueSlug($size,$request->name);
        $data = [
            'name' => $request->name,
            'item_size' => $request->item_size,
            'desc' => $request->desc,
            'slug' => $slug,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Size::create($data);
        Session::flash('success', 'Size Inserted Successfully!');
        return redirect('andbaazaradmin/size');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Size $size)
    {
        return view('admin.sizes.show',compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $size)
    {
        return view('admin.sizes.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Size $size,Request $request)
    {
        $data = [
            'name' => $request->name,
            'item_size' => $request->item_size,
            'desc' => $request->desc,
            'user_id' => Sentinel::getUser()->id,
            'updated_at' => now(),
        ];

        $size->update($data);
        Session::flash('success', 'Size Updated Successfully!');
        return redirect('andbaazaradmin/size');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();
        Session::flash('warning', 'Size Deleted Successfully!');
        return redirect('andbaazaradmin/size');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'item_size' => 'required',
        ]);
    }
}
