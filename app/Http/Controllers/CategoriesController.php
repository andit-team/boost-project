<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ItemCategory;
use Sentinel;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        //dd($category);
        return view('admin.categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
        $data =[
            'name' => $request->name,
            'slug' => $request->slug,
            'thumb' => $request->thumb,
            'parent' => $request->parent,
            'sort' => $request->sort,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Category::create($data);

        return redirect('andbaazaradmin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //dd($category);
       return  view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //dd($category);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validateForm($request);
        $data =[
            'name' => $request->name,
            'slug' => $request->slug,
            'thumb' => $request->thumb,
            'parent' => $request->parent,
            'sort' => $request->sort,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $category->update($data);

        return redirect('andbaazaradmin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('andbaazaradmin/category');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
    }
}
