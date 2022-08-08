<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 style="font-family: Brush Script MT; font-size: 40px; color: rgb(48, 48, 94); ">
            {{ __('Education Toolkit System') }}
        </h2>
        <p>
            {{ __('Online Platform for Malaysian Teachers') }}
        </p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!--- \\\\\\\Post-->
                {{-- @foreach ($datas as $data) --}}
                @foreach ($posts as $post)

                <div class="card gedf-card" style="margin-bottom: 2.77rem;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="40" src="/storage/file_upload/{{$post->profile_pict}}" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">{{$post->name}}</div>
                                    <div class="h7 text-muted" style="font-size: 0.8rem;">Teacher at {{$post->work_place}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2" style="font-size: 0.8rem;"> <i class="fa fa-clock-o"></i> {{ $post->created_at }}</div>

                        <p class="card-text">
                            {{$post->description}}
                        </p>
                        <div style="margin-top: 10px;">
                            {{-- @foreach ($arrays as $array) --}}
                            {{-- @foreach($sets as $key=>$set) --}}

                            {{-- <span class="badge badge-primary">{{json_decode($data)}}</span> --}}
                            <span class="badge badge-primary">{{$post->subj}}</span>

                            {{-- @endforeach --}}

                            {{-- <span class="badge badge-primary">Android</span>
                            <span class="badge badge-primary">PHP</span>
                            <span class="badge badge-primary">Node.js</span>
                            <span class="badge badge-primary">Ruby</span>
                            <span class="badge badge-primary">Paython</span> --}}
                        </div>
                        <div style="margin-top: 10px;">
                            @if ($post->extension == "jpg")
                                <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt="">
                            @elseif ($post->extension == "jpeg")
                                <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt="">
                            @elseif ($post->extension == "png")
                                <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt="">
                            @elseif ($post->extension == "gif")
                                <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt="">
                            @else
                                <div style="background-color: lightgrey; width: 100%; border: none; padding: 30px; text-align: center;">
                                    <a href="/dashboard/download/{{$post->file_upload}}">{{$post->file_upload}}</a>
                                </div>
                            @endif


                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="container mt-3 mb-3">
                            <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="coment-bottom bg-white p-2 px-4">

                                        <form action={{ route('comment.store', [$post->id, Auth::user()->id]) }} method="post">

                                            @csrf
                                            @method('PUT')

                                            {{-- <div class="be-comment-block" style="margin-bottom: 5px !important; border: 1px solid #edeff2; border-radius: 2px; padding: 20px 10px; border:1px solid #ffffff;">

                                                <div class="be-comment">
                                                    <div class="be-img-comment" style="width: 60px; height: 60px; float: left; margin-bottom: 15px;">
                                                        <a href="blog-detail-2.html">
                                                            @foreach($details as $detail)
                                                                @if(Auth::user()->id == $detail->id_user)
                                                                    <img class="img-fluid img-responsive rounded-circle mr-2" src="/storage/file_upload/{{$detail->profile_pict}}" width="38">
                                                                @endif
                                                            @endforeach
                                                        </a>
                                                    </div>

                                                    <div class="be-comment-content" style="margin-left: 60px;">

                                                        <input type="text" name="comment" class="form-control mr-3" placeholder="Add comment">
                                                        <button class="btn btn-primary" type="submit" style="text-align: center; width:100px; background-color: rgb(70, 122, 165); color:white;">Comment</button>
                                                    </div>
                                                </div>

                                            </div> --}}

                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                                @foreach($details as $detail)
                                                    @if(Auth::user()->id == $detail->id_user)
                                                        <img class="img-fluid img-responsive rounded-circle mr-2" src="/storage/file_upload/{{$detail->profile_pict}}" width="38">
                                                    @endif
                                                @endforeach
                                                <input type="text" name="comment" class="form-control mr-3" placeholder="Add comment">
                                                <button class="btn btn-primary" type="submit" style="text-align: center; width:100px; background-color: rgb(70, 122, 165); color:white;">Comment</button>
                                            </div>

                                        </form>

                                        @foreach ($coms as $com)

                                            <div class="be-comment-block" style="margin-bottom: 5px !important; border: 1px solid #edeff2; border-radius: 2px; padding: 20px 10px; border:1px solid #ffffff;">

                                                <div class="be-comment">
                                                    <div class="be-img-comment" style="width: 60px; height: 60px; float: left; margin-bottom: 15px;">
                                                        <a href="blog-detail-2.html">
                                                            <img src="/storage/file_upload/{{$com->profile_pict}}" alt="" class="be-ava-comment" style="width: 45px; height: 60px; border-radius: 50%;">
                                                        </a>
                                                    </div>

                                                    <div class="be-comment-content" style="margin-left: 60px;">

                                                            <span class="be-comment-name" style="font-size: 13px; font-family: 'Conv_helveticaneuecyr-bold';  display: inline-block; margin-bottom: 5px; padding-left: 10px;">
                                                                <a href="blog-detail-2.html" style="color: #383b43; font-size: 15px;">{{$com->name}}</a>
                                                            </span>
                                                            <span class="be-comment-time" style="font-size: 11px; color: #b4b7c1; padding-left: 5px;">
                                                                <i class="fa fa-clock-o"></i>
                                                                {{ date("F jS, Y", strtotime($com->created_at)) }} at {{ date('H:i', strtotime($com->created_at)) }}
                                                            </span>

                                                        <p class="be-comment-text" style="font-size: 13px; line-height: 18px; color: #7a8192; display: block; background: #f6f6f7; border: 1px solid #edeff2; padding: 15px 20px 20px 20px;">
                                                            {{$com->comment}}
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>

                                        @endforeach
                                </div>



                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Post /////-->

                </div>

            </div>
        </div>
    </div>

</x-app-layout>






