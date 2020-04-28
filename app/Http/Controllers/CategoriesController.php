<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ItemCategory;
use Sentinel;
use Session;
use Baazar;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::where('parent_id',0)->get();
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
    public function store(Request $request, Category $category)
    {
        //dd($request->all());
        $this->validateForm($request);
        $slug = Baazar::getUniqueSlug($category,$request->name);
        $data = Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'thumb' => Baazar::fileUpload($request,'thumb','','/uploads/category_image'),
            'parent' => $request->parent,
            'sort' => $request->sort,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
            ]);


            $itemcategory = ItemCategory::create([
               'category_id' => $data->id,
                'user_id' => Sentinel::getUser()->id,
                'created_at' => now(),
            ]);


        //Category::create($data);

        Session::flash('success', 'Category Inserted Successfully');

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
            'thumb' => Baazar::fileUpload($request,'thumb','old_image','/uploads/category_image'),
            'parent' => $request->parent,
            'sort' => $request->sort,
            'user_id' => Sentinel::getUser()->id,
            'updated_at' => now(),
        ];

        $category->update($data);

        Session::flash('success', 'Category Updated Successfully');
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

       Session::flash('success', 'Category Deleted Successfully');

        return redirect('andbaazaradmin/category');
    }

    public function manageCategory()
    {
        $categories = Category::where('parent_id',0)->get();
        $allCategories = Category::pluck('name','id')->all();
        return view('admin.categories.categoryTreeview',compact('categories','allCategories'));
    }

    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['user_id'] = Sentinel::getUser()->id;

        Category::create($input);
        return back()->with('success', 'New Category added successfully.');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
    }
}
