<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ProductApproveRequestMail;
use App\Models\Category;
use App\Models\Item;
use App\Models\Size;
use App\Models\Color;
use App\Models\Seller;
use Sentinel;
use Session;
use Baazar;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $category = Category::all();
      $item = Item::all();
      $size= Size::all();
      $color = Color::all();
      return view ('admin.product.index',compact('category','item','size','color'));
    // return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $item = Item::all();
        $size= Size::all();
        $color = Color::all();
        $categories = Category::where('parent_id',0)->get();
        $subCategories = Category::where('parent_id','!=',0)->get();
        // dd($allCategories);
          return view ('admin.product.create',compact('category','categories','item','size','color','subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Item $item,Request $request)
    {
        
      $sellerId = Seller::where('user_id',Sentinel::getUser()->id)->first(); 

    //   $this->validateForm($request);

      $slug = Baazar::getUniqueSlug($item,$request->name);
        $data = [
            'name' => $request->name,  
            'email' => $request->email,         
            'image' => Baazar::fileUpload($request,'image','','/uploads/product_image'),
            'slug' => $slug,
            'price' => $request->price,
            'model_no' => $request->model_no,
            'org_price' => $request->org_price,
            'pack_id' => $request->pack_id,
            // 'sorting' => $request->sorting,
            'description' => $request->description,
            'min_order' => $request->min_order,
            // 'available_on' => $request->available_on,
            // 'availability' => $request->availability,
            'made_in' => $request->made_in,
            'sub_category' => $request->sub_category,
            'materials' => $request->materials,
            'labeled' => $request->labeled,
            'video_url' => $request->video_url,
            // 'total_sale_amount' => $request->total_sale_amount,
            'total_order_qty' => $request->total_order_qty,
            'last_ordered_at' => $request->last_ordered_at,
            'last_carted_at' => $request->last_carted_at,
            // 'total_view' => $request->total_view,
            // 'activated_at' => $request->activated_at,
            'category_id' => $request->category_id,
            'size_id' => $request->size_id,
            'color_id' => $request->color_id,
            'user_id' => $sellerId,
            'created_at' => now(),
        ];

        

        Item::create($data); 
        $name = $data['name'];
         \Mail::to($data['email'])->send(new ProductApproveRequestMail($data, $name));
        Session::flash('success', 'Item Added Successfully!');

        return back();
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
        // 'image' => Baazar::fileUpload($request,'image','old_image','/uploads/product_image'),
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        Session::flash('success', 'Product Deleted Successfully');
 
         return redirect('merchant/product');
    }

  

    // private function validateForm($request){
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'emial'=> 'required',
    //         'price' => 'required',
    //         'model_no' => 'required',
    //         'org_price' => 'required',
    //         'pack_id' => 'required',
    //         'min_order'=> 'required',
    //         'made_in' => 'required',
    //         'materials'=> 'required',
    //         'labeled' => 'required',
    //         // 'available_on' => 'required',
    //         // 'availability' => 'required',
    //         // 'activated_at' => 'required',


    //     ]);
    // }
}
