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

class NavigationController extends Controller{
    public function index(){

        $subjects = DB::table('subject')->get();

        return view('layouts.navigation',['subjects'=>$subjects]);
    }
}
