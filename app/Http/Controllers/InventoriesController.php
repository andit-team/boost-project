<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Color;
use App\Models\Size;
use Sentinel;
use Session;
use Baazar;

class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = Inventory::all();
        $item = Item::where('user_id',Sentinel::getUser()->id)->get();
        
        $size= Size::all();
        $color = Color::all();
        return view ('admin.inventory.index',compact('inventory','item','size','color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventory = Inventory::all();
       // $item = Item::all();
        $item = Item::where('user_id',Sentinel::getUser()->id)->get();
        //dd($item);
        $size= Size::all();
        $color = Color::all();
        return view ('admin.inventory.create',compact('inventory','item','size','color'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Inventory $inventory,Request $request)
    {
        $this->validateForm($request);
        $data = [
            'item_id' => $request->item_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id, 
            'qty_stock' => $request->qty_stock,                    
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Inventory::create($data);
        return redirect('merchant/inventory');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    private function validateForm($request){
        $validatedData = $request->validate([
            'item_id' => 'required',
            'color_id' => 'required',
            'qty_stock' => 'required',
            'size_id' => 'required',           
        ]);
    }
}
