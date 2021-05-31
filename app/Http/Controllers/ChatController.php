<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Auth;

class ChatController extends Controller
{
    public function rooms(Request $request){
        return ChatRoom::all();
    }

    public function room($slug){
        $data['chatroom'] = ChatRoom::where('slug', $slug)->first();
        $data['user_id'] = Auth::user()->id;
        $data['role_id'] = Auth::user()->role_id;
        $data['name_user'] = Auth::user()->username;
        $data['room_chat'] = $data['chatroom']->id;
        return view('chat.index')->with($data);
    }

    public function messages(Request $request, $roomId){
        return ChatMessage::where('chat_rooom_id', $roomId)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function allMessages($slug){
        $data['room'] = ChatRoom::where('slug', $slug)->get();
        $data['user_id'] = Auth::user()->id;
        $data['role_id'] = Auth::user()->role_id;
        $data['room_chat'] = $data['room']->id;
        return $data;
    }

    public function newMessage(Request $request){
        $newMessage = new ChatMessage;
        $newMessage->user_id = $request['user_id'];
        $newMessage->role_id = $request['role_id'];
        $newMessage->chat_room_id = $request['room'];
        $newMessage->message = $request['message'];
        $newMessage->save();

        return $newMessage;
    }
}
