<?php

namespace App\Http\Controllers;

use App\Mail\VendorProfileRejectMail;
use App\Mail\VendorProfilResubmitMail;
use Illuminate\Http\Request;
use Sentinel;
use App\Agent;
use App\User;
use App\Events\SellerRegistration;
use App\Models\Shop;
use App\Mail\VendorProfileApprovalMail;
use App\Mail\VendorProfileAcceptMail;
use Session;
use Baazar;
class AgentController extends Controller{

    /***************
     * Agent Registration
     ***************/
    public function agentRegistration(Request $request){
        $agent = Agent::where('slug',$request->slug)->first();

        if(!$agent){
            return redirect('/');
        }

        return view('auth.agent.registration',compact('agent'));
    }

    /***************
     * Agent Login
     ***************/
    public function merchantlogin(){
        return view('auth.agent.login');
    }
}