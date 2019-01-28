<?php

namespace App\Http\Controllers;

use App\attendee;
use App\talk;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class talkController extends Controller
{
    Public function index(){
        return view('addTalk');
    }

    Public function index1(){
        return "welcome add talks";
    }

    Public function addTalk(Request $request){
        if($request){
            talk::create(['talk'=>$request->title]);
            return response()->json(['data'=>$request->title], 200);
        }else{
            return response()->json(['errors'=> 'no value inputed'], 204);
        }
    }

    Public function addTalk1(Request $request){
        if($request){
            talk::create(['talk'=>$request->title]);
            return response()->json(['data'=>$request->title], 200);
        }else{
            return response()->json(['errors'=> 'no value inputed'], 204);
        }
    }

    public function attdeeIndex(){
        $talks = talk::all();
        $attendees = attendee::all();
        return view('addAttendee')->with(['talks'=>$talks, 'attendees'=>$attendees]);
    }

    public function attdeeIndex1(){
        $talks = talk::all();
        $attendees = attendee::all();
        return response()->json(['talks'=>$talks, 'attendees'=>$attendees]);
    }



    Public function addAttendee(Request $request){

        if($request){
            attendee::create(['attendee'=>$request->attendee]);
            return response()->json(['data'=>$request->attendee], 200);
        }else{
            return response()->json(['errors'=>'Error'], 204);
        }
    }

    public  function  assignAttendee(Request $request){
        try{
            $talk = talk::where('id', $request->talk)->first();
            $talk->attendee_id = $request->attendee;
            $talk->update();
            return response()->json(['attendee'=>'success'], 200);
        }catch(\Exception $e){
            return response()->json(['errors'=>'Error'], 204);
        }

    }

    public  function getTalks(){
        try{
            $talks = talk::all();
            return view('gettalk')->with(['talks'=>$talks]);
        }catch(\Exception $e){
            return response()->json(['errors'=>'Error'], 204);
        }
    }

    public  function getTalks1(){
        try{
            $talks = talk::all();
            return response()->json(['talks'=>$talks], 200);
        }catch(\Exception $e){
            return response()->json(['errors'=>'Error'], 204);
        }
    }

    Public function removeTalk($id){
        talk::where('id', $id)->delete();
        return response()->json(['success'=>'Deleted'], 200);
    }
}
