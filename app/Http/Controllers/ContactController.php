<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactusMail;
use App\Models\Dietary;
use Sentinel;
use Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('frontend.contact');
    }
    public function AdminIndex(){
        $messages = Contact::orderBy('id','desc')->get();
        // dd($messages);
        $i = 0;
        return view('admin.contacts.contact',compact('messages','i'));
    }

    public function DeleteMessage(Request $request){
        $message = Contact::find($request->id);
        if($message){
            $message->delete();
            session()->flash('success','Message Deleted Successfully!');
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function diretaries(){
        $diretaries = Dietary::orderBy('id','desc')->get();
        // dd($diretaries);
        $i = 0;
        return view('admin.contacts.diretary',compact('diretaries','i'));
    }
    public function DeleteDiretary(Request $request){
        $Dietary = Dietary::find($request->id);
        if($Dietary){
            $Dietary->delete();
            session()->flash('success','Dietary Deleted Successfully!');
            return redirect()->back();
        }
        return redirect()->back();
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
        $this->validateForm($request);

        $data = [
            'name'  => $request->name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'messages' => $request->message,
            'latter' => $request->latter,
            'tc' => $request->tc,
            'pp' => $request->pp,
            'created_at'  => now(),
        ];   

        $done = Contact::create($data);
        if($done){
            session()->flash('success','Your message sent successfully!');
        }else{
            session()->flash('error','Message not Sent');
        }
        return redirect()->back();
        // echo json_encode($comment);   
    }
    public function dieraryStore(Request $request){
        $request->validate([
            'dname'  => 'required',
            'dphone'   => 'required',
            'demail'       => 'email',
            'dmessage'         => 'required',
            'dpp'         => 'accepted',
            'dtc'         => 'accepted',
            'dcompany_name'         => 'required',
            'distribution'         => 'required',
        ]);
        $data = [
            'name'          => $request->dname,
            'email'         => $request->demail,
            'phone'         => $request->dphone,
            'distribution'  => $request->distribution,
            'company_name'  => $request->dcompany_name,
            'message'       => $request->dmessage,
            'tc'            => $request->dtc,
            'pp'            => $request->dpp,
        ];
        $done = Dietary::create($data);
        if($done){
            session()->flash('success','Your information sent successfully!');
        }else{
            session()->flash('error','Information not Sent');
        }
        return redirect()->back();
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
        //
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

    public function contactmailList(){
        $mailList = Contact::all(); 
        return view('admin.contacts.messagelist',compact('mailList'));
    }

    public function replayMail(Request $request,$id){
        
        $messageList = Contact::find($id);
        $messageList->update([
            'messages' => $request->messages,
            ]);

            $first_name = $messageList['first_name'];
            $last_name = $messageList['last_name']; 
            $sub = $messageList['sub'];

        \Mail::to($messageList)->send(new ContactusMail($messageList,$first_name,$last_name,$sub));  

        session()->flash('success','Repley mail send successfully');

        return back();
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'name'  => 'required',
            // 'phone'   => 'required',
            'email'       => 'email',
            // 'latter'       => 'required', 
            'message'         => 'required',
            'pp'         => 'accepted',
            'tc'         => 'accepted',
            // 'description' => 'required',
        ]);
    }
}
