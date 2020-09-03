<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\User;
use Session;
use Boost;
use Sentinel;
use App\Mail\NewsNotificationMail;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required',
            'desct'     => 'required',
        ]); 

        $data = [
            'title'      => $request->title,
            'desct'      => $request->desct,
            'user_id'    => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        $news = News::create($data);

        $title       = $data['title'];
        $description = $data['desct'];


        $newsId = News::where('id',$news->id)->first();
        

        $mails = User::pluck('email')->toArray(); 

        foreach($mails as $mail){
            \Mail::to($mail)->send(new NewsNotificationMail($mail,$description,$title,$newsId));
        }

        Session::flash('success','News create successfully and send to the user!');
        return redirect('boostadmin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id); 
       return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $request->validate([
            'title'    => 'required',
            'desct'     => 'required',
        ]); 

        $data = [
            'title'      => $request->title,
            'desct'      => $request->desct,
            'user_id'    => Sentinel::getUser()->id,
            'updated_at' => now(),
        ];

        $newsMail = $news->update($data);

        $title       = $data['title'];
        $description = $data['desct'];


        $newsId = News::where('id',$news->id)->first();
        

        $mails = User::pluck('email')->toArray(); 

        foreach($mails as $mail){
            \Mail::to($mail)->send(new NewsNotificationMail($mail,$description,$title,$newsId));
        }

        Session::flash('success','News update successfully and send to the user!');
        return redirect('boostadmin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
