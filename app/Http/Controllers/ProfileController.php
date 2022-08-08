<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class ProfileController extends Controller{
    public function index(){

        $details = DB::table('user_details')->get();

        // $id = Auth::user()->id;

        $posts = DB::table('post')
        // ->where('id_user', '=', $id)
        // ->where('status', '=', NULL)
        ->latest()
        ->get();

        return view('user_profile',['details'=>$details, 'posts'=>$posts]);
    }

    public function edit(){

        $details = DB::table('user_details')
        // ->where('id_user', '=', $id)
        ->get();

        return view('edit_profile',['details'=>$details]);
    }

    public function update(Request $request, $id)
    {
        $details = DB::table('users')
        ->where('id', '=', $id)
        ->update(
            ['name'=>request('name')]
        );

        if($request->file('profile_pict')!=NULL){
            $filenameWithExt = $request->file('profile_pict')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_pict')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('profile_pict')->storeAs('public/file_upload', $fileNameToStore);

            DB::table('user_details')
            ->where('id_user', '=', $id)
            ->update(
                ['location'=>request('location'),
                'work_place'=>request('work_place'),
                'subject'=>request('subject'),
                'profile_pict'=>$fileNameToStore]
            );

        }else{

            DB::table('user_details')
            ->where('id_user', '=', $id)
            ->update(
                ['location'=>request('location'),
                'work_place'=>request('work_place'),
                'subject'=>request('subject')]
            );
        }



        $details = DB::table('user_details')
        ->where('id_user', '=', $id)
        ->get();

        $posts = DB::table('post')
        ->latest()
        ->get();

        return view('user_profile', ['details'=>$details, 'posts'=>$posts]);
    }

    public function search(Request $request){

        $search = $request->input('search');

        $details = DB::table('users')
            ->where('name', '=', $search)
            ->join('user_details', 'users.id', '=', 'user_details.id_user')
            ->select('users.*','user_details.profile_pict', 'user_details.location', 'user_details.work_place', 'user_details.subject', 'user_details.joined_in')
            ->get();

        $user = DB::table('users')
        ->where('name', '=', $search)
        ->pluck('id');

        // $id = $user->id;

        $posts = DB::table('post')
            ->latest()
            ->where('id_user', '=', $user)
            ->get();

            // return dd($posts);

        return view('search_profile', ['details'=>$details, 'posts'=>$posts]);

    }


}
