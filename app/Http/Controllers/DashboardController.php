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

class DashboardController extends Controller{
    public function index(){

        $subjects = DB::table('subject')->get();

        $posts = DB::table('post')
        ->latest()
        ->where('status', '=', NULL)
        ->join('users', 'post.id_user', '=', 'users.id')
        ->join('user_details', 'post.id_user', '=', 'user_details.id_user')
        ->select('post.*','users.name', 'user_details.work_place', 'user_details.profile_pict')
        ->get();

        $datas = DB::table('post')
        ->select('post.subj')
        ->get();

        $sets = json_decode($datas);
       foreach($sets as $set){
            $subjectData[] = $set->subj;
       }

       foreach($subjectData as $subjData)
       {
        $dataReplace[] = str_replace(array("[","]"),"",$subjData);
       }

       foreach($dataReplace as $dataReplaced){
        $oneSubjOnly[] = explode(",",$dataReplaced);
       }
    //    $subjectCount =
        $arrlength=count($posts);

        // return dd($arrlength);

        // return view('dashboard',['subjects'=>$subjects, 'posts'=>$posts, 'sets' => $oneSubjOnly, 'arrlength' => $arrlength]);
        return view('dashboard',['subjects'=>$subjects, 'posts'=>$posts, 'arrlength' => $arrlength]);
    }

    public function store(Request $request, $id)
    {

        $input = $request->all();
        $input['subj'] = json_encode($input['subj']);
        // $input['subj'] = $request->input('subj');

        // return dd($request->file('file_upload'));

        if($request->file('file_upload')!=NULL){
            $filenameWithExt = $request->file('file_upload')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file_upload')->getClientOriginalExtension();
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            $path = $request->file('file_upload')->storeAs('public/file_upload', $fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpeg';
        }
        // return dd($extension);

        DB::table('post')
        ->insert(
            ['id_user'=>$id,
            'subj'=>$input['subj'],
            'description'=>$input['description'],
            'file_upload'=>$fileNameToStore,
            'extension'=>$extension]
        );
        // ->pluck('id');

        $id_post = DB::table('post')
        ->where('description', '=', $input['description'])
        ->pluck('id');

        // $a = DB::table('subject_post')
        // ->insert(
        //     ['id_post'=>$id_post,
        //     'subj'=>implode("",$input)
        //     ]
        // );

        return redirect()->back();
        // return dd($id_post);
    }

    public function download($file)
    {
        return Storage::download("public/file_upload/{$file}");
        return redirect()->back();
    }



}
