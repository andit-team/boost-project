<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\User;
use Session;
use Boost;
use Sentinel;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = Agent::all();
       
        return view('admin.agent.index',compact('distributor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.agent.create');
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
            'type' => 'required',
            'municipality' => 'required',
            'province' => 'required',
            'name_surame' => 'required',
            'tel_number' => 'required',
            'email' => 'required',
            'coverage_area' => 'required',
            'agent_number' => 'required',
            'customer_package' => 'required', 
            'agreed'        => 'accepted'
        ]);
        $data = [
            'company_name' => $request->company_name,
            'type' => $request->type,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'name_surame'=> $request->name_surame,
            'tel_number' => $request->tel_number,
            'email' => $request->email,
            'coverage_area' => $request->coverage_area,
            'agent_number' => $request->agent_number,
            'customer_package' => $request->customer_package,
            'message' => $request->message,
            'created_at' => now(),
        ];
       
        Agent::create($data);

        Session::flash('success','Distributor information add successfully!');
        return redirect('sei-un-distributore');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
