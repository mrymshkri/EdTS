<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class MessageController extends Controller{
    public function index($id){

        $sender = DB::table('message')
        ->where('id_receiver', '=', $id)
        ->join('users', 'message.id_sender', '=', 'users.id')
        ->join('user_details', 'message.id_sender', '=', 'user_details.id_user')
        ->select('message.*','users.name','user_details.profile_pict', 'user_details.location', 'user_details.work_place', )
        ->get();

        return view('message',['sender'=>$sender]);
    }

    public function chat($id, $id_sender){

        $sender = DB::table('message')
        ->where('id_receiver', '=', $id)
        ->join('users', 'message.id_sender', '=', 'users.id')
        ->join('user_details', 'message.id_sender', '=', 'user_details.id_user')
        ->select('message.*','users.name','user_details.profile_pict', 'user_details.location', 'user_details.work_place', )
        ->get();

        $s = DB::table('user_details')
        ->where('id_user', '=', $id_sender)
        ->join('users', 'user_details.id_user', '=', 'users.id')
        // ->join('user_details', 'message.id_sender', '=', 'user_details.id_user')
        ->select('user_details.*','users.name')
        ->get();

        $me = DB::table('message')
        ->where('id_receiver', '=', $id)
        ->where('id_sender', '=', $id_sender)
        ->pluck('id');

        $you = DB::table('message')
        ->where('id_receiver', '=', $id_sender)
        ->where('id_sender', '=', $id)
        ->pluck('id');

        $messme = DB::table('message_details')
        ->where('id_message', '=', $me)
        ->get();

        $messyou = DB::table('message_details')
        ->where('id_message', '=', $you)
        ->get();

        $mess = $messme ->merge($messyou);

        // return dd($mess);

        return view('message_user',['sender'=>$sender, 'mess'=>$mess, 's'=>$s]);
    }

    public function store(Request $request, $id_sender, $id)
    {
        $a = DB::table('message')
        ->where('id_receiver', '=', $id)
        ->where('id_sender', '=', $id_sender)
        ->pluck('id');
        // ->get();

        // $b = $a->get('id');

        // $input = $request->all();

        DB::table('message_details')
        ->insert(
            ['id_message'=>$a,
            'message'=>request('message')]
        );

        return redirect()->back();
        // return dd($b);

    }


}
