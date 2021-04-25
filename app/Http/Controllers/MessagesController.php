<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Messages;
use App\User;
use App\Replies;

class MessagesController extends Controller
{
    //
    public function index()
    {
    $ikiciro=Categories::get()->all();
    return view('Client.askquestion')->with('ikiciro',$ikiciro);
        
    }
    
    public function UserProfile($id)
    {
    $user=User::get()->where('id',$id)
    ->all();
    return view('Client.Profile')->with('user_profile',$user);
        
    }
    
    public function ubutumwa()
    {
        
    $mess=Messages::get()->all();
    return view('Client.Posts')->with('posts',$mess);
        
    }
    
    public function Ubutumwaconselor()
    {
    
        $mess=Messages::get()->where('expert',auth()->user()->role)
        ->all();
    return view('Client.Posts')->with('posts',$mess);
        
    }
    
    public function addmessage(Request $request){

        $request->validate([
           'title' => 'required|min:3',
           'description' => 'required',
           'expert' => 'required',
       ]);       
    
       
                  $ubutumwa = new Messages([
                      'title'    =>  $request->get('title'),
                      'description'    =>  $request->get('description'),
                      'expert'     =>  $request->get('expert'),
                      'client_id'=>auth()->user()->id,
                      'client_name'=>auth()->user()->name,
                      'status'=>'Not answered',
                      
                      ]);
                      
                  $ubutumwa->save(); 
    
            return redirect()->back()->with('message', 'Message is posted well !!!');
    
    }

    public function showreplies($id){
     
    $rep=Messages::get()->where('id',$id)
    ->all();

    $ibisubizo=Replies::get()->where('replier_id',auth()->user()->id)
    ->all();
    
    return view('Client.Repliesmessage')->with('mes',$rep)
    ->with('ibisubizo',$ibisubizo);
    }

public function  replymessage(Request $request,$client_id){


    $request->validate([
        'answer' => 'required|unique:replies',
    ]);       


    
    $subiza = new Replies([
        'user_id'    =>  auth()->user()->id,
        'replier_id'     =>  auth()->user()->id,
        'replier_name'     =>  auth()->user()->name,
        'answer'     =>$request->get('answer'),
        'replier_expert'     =>  auth()->user()->role,
        
        ]);
    $subiza->save(); 

return redirect()->back()->with('message', 'Your reply message have been sent successfully !');


}


}
