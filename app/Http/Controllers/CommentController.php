<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;

class CommentController extends Controller{

    public function index($post_id){

        $subjects = DB::table('subject')->get();

        $posts = DB::table('post')
        ->where('post.id', '=', $post_id)
        ->join('users', 'post.id_user', '=', 'users.id')
        ->join('user_details', 'post.id_user', '=', 'user_details.id_user')
        ->select('post.*','users.name', 'user_details.work_place', 'user_details.profile_pict')
        ->get();

        $coms = DB::table('comment')
        ->latest()
        ->where('id_post', '=', $post_id)
        ->join('users', 'comment.id_commentor', '=', 'users.id')
        ->join('user_details', 'comment.id_commentor', '=', 'user_details.id_user')
        ->select('comment.*','users.name', 'user_details.profile_pict')
        ->get();

        $details = DB::table('user_details')->get();

        return view('comment',['subjects'=>$subjects, 'posts'=>$posts, 'details'=>$details, 'coms'=>$coms]);
    }

    public function store(Request $request, $post_id, $id)
    {

        DB::table('comment')
        ->insert(
            ['id_post'=>$post_id,
            'id_commentor'=>$id,
            'comment'=>request('comment')]
        );

        // $a = request('comment');

        // return dd($a);

        return redirect()->back();
    }

}
