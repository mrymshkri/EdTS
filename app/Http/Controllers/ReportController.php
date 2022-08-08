<?php

namespace App\Http\Controllers;
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

class ReportController extends Controller{
    public function index($post_id){

        return view('report_post', ['post_id'=>$post_id]);
    }

    public function store(Request $request, $post_id, $id){

        DB::table('report')
        ->insert(
            ['id_post'=>$post_id,
            'issue'=>request('report'),
            'reported_byId'=>$id,]
        );

        return redirect(route('dashboard'));
    }

}
