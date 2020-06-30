<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Color;
use App\Models\Size;
use App\Models\Shop;
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

//        $sellerProfile = Merchant::where('user_id',Sentinel::getUser()->id)->first();
//        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
//        $inventory = Inventory::all();
//        $item = Item::where('user_id',Sentinel::getUser()->id)->get();
//
//        $size= Size::all();
//        $color = Color::all();
//        return view ('merchant.inventory.index',compact('inventory','item','size','color','sellerProfile','shopProfile'));

        $inventories = Inventory::where('shop_id',Baazar::shop()->id)->with('item')->get();
        return view ('merchant.inventory.index',compact('inventories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventory = Inventory::all();
        $item = Item::where('user_id',Sentinel::getUser()->id)->get();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        $size= Size::all();
        $color = Color::all();
        return view ('merchant.inventory.create',compact('inventory','item','size','color','shopProfile'));
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
        $slug = Baazar::getUniqueSlug($inventory,$request->item_id);
        $data = [
            'item_id' => $request->item_id,
            'slug' => $slug,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'qty_stock' => $request->qty_stock,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Inventory::create($data);
        Session::flash('success', 'Inventory Added Successfully!');
        return redirect('merchant/inventories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {

        return view ('merchant.inventory.show',compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        $inventory = Inventory::where('slug',$inventory->slug)->first();
        $item = Item::where('user_id',Sentinel::getUser()->id)->get();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        $size= Size::all();
        $color = Color::all();
        return view ('merchant.inventory.edit',compact('inventory','item','size','color','shopProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Inventory $inventory,Request $request)
    {
        $this->validateForm($request);
        $data = [
            'item_id' => $request->item_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'qty_stock' => $request->qty_stock,
            'user_id' => Sentinel::getUser()->id,
            'updated_at' => now(),
        ];
        $inventory->update($data);
        Session::flash('error', 'Inventory Added Successfully!');
        return redirect('merchant/inventories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect('merchant/inventory');
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
