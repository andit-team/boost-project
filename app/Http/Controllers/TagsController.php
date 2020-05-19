<?php

namespace App\Http\Controllers;

use App\Models\ItemTag;
use Illuminate\Http\Request;
use App\Models\Tag;
use Sentinel;
use Session;
use Baazar;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tag $tag)
    {
      $tag = Tag::all();
      return view('admin.tags.index',compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tag $tag,Request $request)
   {
      $this->validateForm($request);
      $slug = Baazar::getUniqueSlug($tag,$request->name);

        $data = Tag::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $slug,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ]);

       Session::flash('success', 'Tags Inserted Successfully');
       return redirect('andbaazaradmin/tag');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
     return  view('admin.tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
      return view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tag $tag, Request $request)
    {
        $this->validateForm($request);
          $data = [
              'name' => $request->name,
              'description' => $request->description,
              'user_id' => Sentinel::getUser()->id,
              'created_at' => now(),
          ];

          $tag->update($data);
         Session::flash('success', 'Tags Updated Successfully');
         return redirect('andbaazaradmin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {

          $tag->delete();
          Session::flash('warning', 'Tags Deleted Successfully');
          return redirect('andbaazaradmin/tag');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
    }
}
