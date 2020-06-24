<?php

namespace App\Http\Controllers;
use App\Models\Attribute;
use Sentinel;
use Session;
use Baazar;
use App\Models\Category;
use Illuminate\Http\Request;

class CatAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.attribute');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       return view('admin.categories.attribute');
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

    public function attribute()
    {
        $category = Category::all(); 
        return view('admin.categories.attribute',compact('category'));
    }

    public function attributeset(Request $request,Attribute $attribute)
    {
        // $this->validateForm($request);              
        $data = ([
            'label'            => $request->label,
            'suggestion'       => $request->suggestion,
            'type'             => $request->type,
            'required'         => $request->required,  
            'category_id'      => $request->category_id,                         
            'user_id'          => Sentinel::getUser()->id,
            'created_at' => now(),
            ]);
            Attribute::create($data);
            Session::flash('success', 'Attribute Inserted Successfully');

            return redirect()->back();
    }
}
