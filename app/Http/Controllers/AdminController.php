<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Carbon\Carbon;

class AdminController extends Controller{
    public function index(){

        $p = DB::table('post')
        ->get();

        $posts = DB::table('post')
        ->join('users', 'post.id_user', '=', 'users.id')
        ->select('post.*','users.name')
        ->limit(4)
        ->latest()
        ->get();

        $u = DB::table('users')
        ->get();

        $users = DB::table('users')
        ->join('user_details', 'users.id', '=', 'user_details.id_user')
        ->select('users.*','user_details.work_place')
        ->limit(3)
        ->latest()
        ->get();

        $reports = DB::table('report')
        ->get();

        $postLength = count($p);
        $userLength = count($u);
        $reportLength = count($reports);

        $a = Post::latest()->first();
        $b = User::latest()->first();
        $c = Report::latest()->first();

        // return dd($posts);

        return view('dashboard_admin',[
            'posts'=>$posts,
            'users'=>$users,
            'postLength'=>$postLength,
            'userLength'=>$userLength,
            'reportLength'=>$reportLength,
            'a'=>$a,
            'b'=>$b,
            'c'=>$c
        ]);
    }

    public function report(){

        $reps = DB::table('report')
        ->where('action', '=', NULL)
        ->join('users', 'report.reported_byId', '=', 'users.id')
        ->join('post', 'report.id_post', '=', 'post.id')
        ->select('report.*','users.name','post.id_user')
        ->get();

        return view('report',['reps'=>$reps]);
    }

    public function view($post_id, $report_id){

        $b = $report_id;

        $a = DB::table('report')
        ->where('report.id', '=', $b)
        ->join('users', 'report.reported_byId', '=', 'users.id')
        ->join('post', 'report.id_post', '=', 'post.id')
        ->select('report.*','users.name','post.id_user')
        ->get();

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

        return view('view_report',['subjects'=>$subjects, 'posts'=>$posts, 'details'=>$details, 'coms'=>$coms, 'a'=>$a]);

    }

    public function hide($post_id, $report_id){

        DB::table('report')
        ->where('id', '=', $report_id)
        ->update(
            ['action'=>"HIDE"]
        );

        DB::table('post')
        ->where('id', '=', $post_id)
        ->update(
            ['status'=>"HIDE"]
        );

        return redirect(route('report'));
    }

    public function delete($post_id, $report_id){

        DB::table('report')
        ->where('id', '=', $report_id)
        ->update(
            ['action'=>"DELETE"]
        );

        DB::table('post')
        ->where('id', '=', $post_id)
        ->delete();

        return redirect(route('report'));
    }

    public function users(){

        $s = DB::table('user_details')
        ->join('users', 'user_details.id_user', '=', 'users.id')
        ->select('user_details.*','users.name','users.email','users.created_at')
        ->get();

        return view('users',['s'=>$s]);
    }

    public function posts(){

        $p = DB::table('post')
        ->latest()
        ->join('users', 'post.id_user', '=', 'users.id')
        ->select('post.*','users.name')
        ->get();

        return view('posts',['p'=>$p]);
    }

    public function viewUser($user_id){

        $z = DB::table('user_details')
        ->where('user_details.id_user', '=', $user_id)
        ->join('users', 'user_details.id_user', '=', 'users.id')
        ->select('user_details.*','users.name','users.email','users.created_at')
        ->get();

        $y = DB::table('post')
        ->where('id_user', '=', $user_id)
        ->get();

        $x = DB::table('report')
        ->join('post', 'report.id_post', '=', 'post.id')
        ->select('report.*','post.id_user')
        ->where('id_user', '=', $user_id)
        ->get();

        $w = DB::table('message')
        ->where('id_receiver', '=', $user_id)
        ->get();

        $v = DB::table('comment')
        ->where('id_commentor', '=', $user_id)
        ->get();

        $postLength = count($y);
        $reportLength = count($x);
        $messageLength = count($w);
        $commentLength = count($v);

        // return dd($z);

        return view('view_user',[
            'z'=>$z,
            'postLength'=>$postLength,
            'reportLength'=>$reportLength,
            'messageLength'=>$messageLength,
            'commentLength'=>$commentLength
        ]);
    }

    public function viewPost($post_id){

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

        return view('view_post',['subjects'=>$subjects, 'posts'=>$posts, 'details'=>$details, 'coms'=>$coms]);

    }


}
