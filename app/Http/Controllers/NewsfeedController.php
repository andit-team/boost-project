<?php

namespace App\Http\Controllers;

use App\Models\Newsfeed;
use Illuminate\Http\Request;
use App\Models\Product;
use App\User;
use Sentinel;
use Session;
use Baazar;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsFeed = Newsfeed::where('user_id',Sentinel::getUser()->id)->paginate(10);
        
        return view('merchant.newsFeed.index',compact('newsFeed'));
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
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function show(Newsfeed $newsfeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $newsFeed = Newsfeed::where('slug',$slug)->first();
        
        return view('merchant.newsFeed.edit',compact('newsFeed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $newsFeed = Newsfeed::where('slug',$slug)->first();

        $data = [
            'title'      => $request->title,
            'image'      => Baazar::fileUpload($request,'image','old_image','/uploads/newsfeed_image'),
            'news_desc'  => $request->news_desc,
            'updated_at' => now(),
        ];

        $newsFeed->update($data);

        Session::flash('success','News feed update successfully');

        return redirect('merchant/newsfeed');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsFeed = Newsfeed::find($id);
        $newsFeed->delete();

        Session::flash('error','News feed delete successfully');

        return redirect('merchant/newsfeed');
    }

    public function feedlist()
    {
       
        $newsFeed = Newsfeed::all();
        
        return view('merchant.newsFeed.newsfeed_list',compact('newsFeed'));
    }

    public function approvement($slug){
        $data =  Newsfeed::where('slug',$slug)->first();

        $data->update(['status'=>'Active']);

        Session::flash('success','News feed Approve successfully.');

        return back();
    }

    public function reject($slug){
        $data =  Newsfeed::where('slug',$slug)->first();

        $data->update(['status'=>'Reject']);

        Session::flash('error','News feed Reject successfully.');

        return back();
    }
}
