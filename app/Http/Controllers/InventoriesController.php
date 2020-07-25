<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ItemImage;
use App\Models\Color;
use App\Models\Size;
use App\Models\Shop;
use Sentinel;
use Session;
use Baazar;
use App\Models\InventoryAttributeOption;
use App\Models\InventoryMeta;
use App\Models\InventoryAttribute;
class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        $sellerProfile = Merchant::where('user_id',Sentinel::getUser()->id)->first();
//        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
//        $inventory = Inventory::all();
//        $item = Product::where('user_id',Sentinel::getUser()->id)->get();
//
//        $size= Size::all();
//        $color = Color::all();
//        return view ('merchant.inventory.index',compact('inventory','item','size','color','sellerProfile','shopProfile'));


        $inventories        = Inventory::where('shop_id',Baazar::shop()->id)->with('item')->with('invenMeta')->paginate(10); 
        $item               = Product::where('user_id',Sentinel::getUser()->id)->get();
        $color              = Color::all(); 
        $inventoryAttriSize = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',1)->first();
        $productAttriSize   = InventoryAttributeOption::where('inventory_attribute_id',1)->get();
        $inventoryAttriCapa = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',2)->first();
        $productAttriCapa   = InventoryAttributeOption::where('inventory_attribute_id',2)->get();

        if($request->has('color')){
            $inventories        = Inventory::where('shop_id',Baazar::shop()->id)->with('item')->with('invenMeta')->where('color_name',$request->color)->paginate(10); 
            //dd($inventories);
        }

        $inventory =([
            'color' => request('color'),
        ]);

        return view ('merchant.inventory.index',compact('inventories','item','color','inventoryAttriSize','productAttriSize','inventoryAttriCapa','productAttriCapa'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventory          = Inventory::all();
        $item               = Product::where('user_id',Sentinel::getUser()->id)->get();
        $shopProfile        = Shop::where('user_id',Sentinel::getUser()->id)->first();
        $size               = Size::all();
        $color              = Color::all();
        $inventoryAttriSize = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',1)->first();
        $inventoryAttriCapa = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',2)->first();
        $productAttriSize   = InventoryAttributeOption::where('inventory_attribute_id',1)->get();
        $productAttriCapa   = InventoryAttributeOption::where('inventory_attribute_id',2)->get();
        return view ('merchant.inventory.create',compact('inventory','item','size','color','shopProfile','productAttriSize','productAttriCapa','inventoryAttriSize','inventoryAttriCapa'));
    }

    public function addImages($images, $itemId,$shop){
        foreach($images as $color => $image){
          foreach($image as $img){
            $i = 0;
            $image = [
              'product_id' => $itemId,
              'color_slug' => $color,
              'sort'       => ++$i,
              'org_img'    => Baazar::base64Upload($img,'orgimg',$shop->slug,$color),
            ];
            ItemImage::create($image);
          }
        }
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Inventory $inventory,Request $request)
    {
        //dd($request->all());
        $shopId = Shop::where('user_id',Sentinel::getUser()->id)->first();
        $product = Product::where('user_id',Sentinel::getUser()->id)->first();
        $this->validateForm($request);
        $slug = Baazar::getUniqueSlug($inventory, $product->name);
        $shop = Merchant::where('user_id',Sentinel::getUser()->id)->first()->shop;
        if($shop){
            $data = [
                'product_id'    => $request->product_id,
                'slug'          => $slug,
                'color_name'    => $request->color_name,
                'size_id'       => $request->size_id,
                'price'         => $request->price,
                'qty_stock'     => $request->qty_stock,
                'special_price' => $request->special_price,
                'start_date'    => $request->start_date,
                'end_date'      => $request->end_date,
                'shop_id'       => $shopId->id,
                'user_id'       => Sentinel::getUser()->id,
                'created_at'    => now(),
            ];
    
            $inventory = Inventory::create($data);
    
            $inventoryAtti = [
                'name'        => $request->name,
                'value'       => $request->value,
                'inventory_id'=> $inventory->id,
                'product_id'  => $inventory->product_id,
            ];
            InventoryMeta::create($inventoryAtti);
    
            if($request->images){
                $this->addImages($request->images,$inventory->product_id,$shop);
              }
            Session::flash('success', 'Inventory Added Successfully!');
        }
        
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
    public function edit($slug)
    {
        $inventory          = Inventory::where('slug',$slug)->first();
        $item               = Product::where('user_id',Sentinel::getUser()->id)->get();
        $shopProfile        = Shop::where('user_id',Sentinel::getUser()->id)->first();
        $size               = Size::all();
        $color              = Color::all();
        $productAttriSize   = InventoryAttributeOption::where('inventory_attribute_id',1)->get();
        $productAttriCapa   = InventoryAttributeOption::where('inventory_attribute_id',2)->get();
        $inventoryAttriSize = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',1)->first();
        $inventoryAttriCapa = InventoryAttributeOption::with('attribute')->where('inventory_attribute_id',2)->first(); 
        $inventoryMeta      = InventoryMeta::all(); 
        return view ('merchant.inventory.edit',compact('inventory','item','size','color','shopProfile','inventoryAttriSize','inventoryAttriCapa','productAttriSize','productAttriCapa','inventoryMeta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug)
    {
        $inventory  = Inventory::where('slug',$slug)->first();
        $inventMeta = InventoryMeta::where('id',$inventory->id)->first();
        //dd($inventMeta);
        $this->validateForm($request);
        $data = [ 
            'color_id'      => $request->color_id,
            'size_id'       => $request->size_id,
            'price'         => $request->price,
            'qty_stock'     => $request->qty_stock,
            'special_price' => $request->special_price,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,
            'updated_at'    => now(),
        ];
        $inventory->update($data);
        $inventoryAtti = [
            'name'        => $request->name,
            'value'       => $request->value,  
        ]; 
        $inventMeta->update($inventoryAtti);
        Session::flash('warning', 'Inventory update Successfully!');
        return redirect('merchant/inventories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();

        Session::flash('error', 'Inventory Deleted Successfully!');
        return redirect('merchant/inventories');
    }



    private function validateForm($request){
        $validatedData = $request->validate([
            //'product_id' => 'required',
            'color_name' => 'required',
            'qty_stock'  => 'required',
            'price'      => 'required',
//            'size_id' => 'required',
        ]);
    }

    public function inventoryColor(Request $request){

        $color = $request->color;
        $item  = $request->item;
        $inventory =  ItemImage::where('color_slug',$color)->where('product_id',$item);
        $count = $inventory->count();
        $images = $inventory->get()->toArray();
        echo json_encode(['count' => $count,'images' => $images]);

    } 
}
