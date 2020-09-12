<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use App\User;
use Session;
use Boost;
use Sentinel;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club = Club::all();
       return view('admin.club.index',compact('club'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.club.create');
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
            'company_name' => 'required',
            're_office_address' => 'required',
            'vanue_address' => 'required',
            'municiplitay_province' => 'required',
            'municiplitay_province_room' => 'required',
            'name_surname' => 'required',
            'tel_number' => 'required',
            'email' => 'required',
            'type' => 'required',
            // 'unique_code' => 'required',
            'number_of_table' => 'required',
            'agreed'        => 'accepted'
        ]);
        $data = [
            'company_name' => $request->company_name,
            're_office_address' => $request->re_office_address,
            'type' => $request->type,
            'vanue_address' => $request->vanue_address,
            'municiplitay_province' => $request->municiplitay_province,
            'municiplitay_province_room' => $request->municiplitay_province_room,
            'name_surname' => $request->name_surname,
            'tel_number' => $request->tel_number,
            'email' => $request->email,
            'vat'=> $request->vat,
            'unique_code' => $request->unique_code,
            'number_of_table'=> $request->number_of_table,
            'message' => $request->message,
            'created_at' => now(),
        ];

        Club::create($data);

        Session::flash('success','Club information add successfully!');
        return redirect('sei-un-local');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
