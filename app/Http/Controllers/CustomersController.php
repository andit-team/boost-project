<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use App\User;
use Boost;
use Session;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerlist = User::where('type','customer')->get(); 
        return view('admin.customer.customerlist',compact('customerlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){ 
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user){
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email|unique:App\User,email',
            'password'      => 'required|min:6', 
            'postcode'      => 'required',
            'address_1'     => 'required', 
            'town'          => 'required',
            'account'       => 'required',
        ]); 
        
        $data = [
            'first_name'  => $request->first_name, 
            'last_name'   => $request->last_name,
            'com_name'    => $request->com_name,
            'com_phone'   => $request->com_phone,
            'com_address' => $request->com_address,
            'com_vat'     => $request->com_vat,
            'or_name'     => $request->or_name,
            'or_phone'    => $request->or_phone,
            'or_address'  => $request->or_address,
            'account'     => $request->account,
            'or_reg'      => $request->or_reg, 
            'file_1'      => Boost::pdfUpload($request,'file_1','','/uploads/customer_profile'), 
            'file_2'      => Boost::pdfUpload($request,'file_2','','/uploads/customer_profile'),
            'address_1'   => $request->address_1,
            'address_2'   => $request->address_2,
            'postcode'    => $request->postcode,
            'town'        => $request->town,
		    'email' 	  => $request->email,
		    'password' 	  => $request->password,
		    'type' 	      => 'customer',
        ]; 

        $customer = Sentinel::registerAndActivate($data);
        $role = \Sentinel::findRoleBySlug($request->account);
        $role->users()->attach($customer->id);

        $credentials = [
			'email'		=> $customer->email,
			'password'	=> $request->password,
			'type'	    => 'customer',
		];

        Session::flash('success','Customer profile addes successfully');
        return redirect('boostadmin/customer');

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
        $customer = User::find($id);
        return view('admin.customer.edit',compact('customer'));
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
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email|unique:App\User,email,'.$id, 
            'postcode'      => 'required',
            'address_1'     => 'required', 
            'town'          => 'required',
            'account'       => 'required',
        ]); 
        $customer = User::find($id);
        $data = [
            'first_name'  => $request->first_name, 
            'last_name'   => $request->last_name,
            'com_name'    => $request->com_name,
            'com_phone'   => $request->com_phone,
            'com_address' => $request->com_address,
            'com_vat'     => $request->com_vat,
            'or_name'     => $request->or_name,
            'or_phone'    => $request->or_phone,
            'or_address'  => $request->or_address,
            'account'     => $request->account,
            'or_reg'      => $request->or_reg, 
            'file_1'      => Boost::pdfUpload($request,'file_1','old_file_1','/uploads/customer_profile'), 
            'file_2'      => Boost::pdfUpload($request,'file_2','old_file_2','/uploads/customer_profile'),
            'address_1'   => $request->address_1,
            'address_2'   => $request->address_2,
            'postcode'    => $request->postcode,
            'town'        => $request->town,
		    'email' 	  => $request->email, 
        ];

        $customer->update($data);
        
        Session::flash('success','Customer profile update successfully');
        return redirect('boostadmin/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = User::find($id);
        $customer->delete();

        Session::flash('error','Customer profile deleted!');
        return redirect('boostadmin/customer');

    }

    private function validateForm($request){
        $validatedData = $request->validate([
               'first_name'  => 'required',
               'last_name'   => 'required',
               'dob'         => 'required',
               'gender'      => 'required',
               'description' => 'required',
        ]);
    }
}
