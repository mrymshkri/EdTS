<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<x-app-layout>


    <div class="container emp-profile" style="padding: 2%; margin-top: 2%; margin-bottom: 2%; border-radius: 0.5rem; background: #fff;" >
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" style="text-align: center; background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; ">

                            @foreach($details as $detail)

                                @if ($detail->profile_pict != NULL)
                                    <img src="/storage/file_upload/{{$detail->profile_pict}}"  style="border-radius: 50%; display: block; width:150; height:200; margin-left: auto; margin-right: auto; " alt=""/>
                                    {{-- <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt=""> --}}
                                    @else
                                    <img style="border-radius: 50%; display: block; width:200; height:200; margin-left: auto; margin-right: auto;" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/>
                                @endif



                            <br><h5 style="color: #333; font-size: 25px;">
                                {{ $detail->name }}
                            </h5>
                            <h6>
                                <i class="fa fa-map-pin" style="color:red;"></i>

                                {{-- @if(Auth::user()->id == $detail->id_user) --}}
                                {{ $detail->location }}
                                {{-- @endif --}}
                            </h6><br>
                        </div>
                    {{-- </div> --}}
                    {{-- <div class="col-md-4"> --}}
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row" style="background-color: rgba(165, 162, 162, 0.873); padding: 10px; margin: 5px 5px 2px; ">
                                            <i class="fa fa-briefcase fa-fw" style="font-size:20px; color:white;"></i>
                                            &nbsp;
                                            {{-- @if(Auth::user()->id == $detail->id_user) --}}
                                            <p style="font-size: 15px; color: #f7f7f8;">Teacher at {{ $detail->work_place }}</p>
                                            {{-- @endif --}}
                                        </div>

                                        <div class="row" style="background-color: rgba(165, 162, 162, 0.873); padding: 10px; margin: 5px 5px 2px; ">
                                            <i class="fa fa-user fa-fw" style="font-size:20px; color:white;"></i>
                                            {{-- @if(Auth::user()->id == $detail->id_user) --}}
                                            <p style="font-size: 15px; color: #f7f7f8;">{{ $detail->subject }}</p>
                                            {{-- @endif --}}
                                       </div>

                                       <div class="row" style="background-color: rgba(165, 162, 162, 0.873); padding: 10px; margin: 5px 5px 2px; ">
                                            <i class="fa fa-at fa-fw" style="font-size:20px; color:white;"></i>
                                            <p style="font-size: 15px; color: #f7f7f8;">{{ $detail->email }}</p>
                                        </div>

                                        <div class="row" style="background-color: rgba(165, 162, 162, 0.873); padding: 10px; margin: 5px 5px 2px; ">
                                            <i class="fa fa-calendar fa-fw" style="font-size:18px; color:white;"></i>
                                            &nbsp;
                                            {{-- @if(Auth::user()->id == $detail->id_user) --}}
                                            <p style="font-size: 15px; color: #f7f7f8;">Joined {{ date('F Y', strtotime($detail->joined_in)) }}</p>
                                            {{-- @endif --}}
                                       </div>

                                        {{-- @endforeach --}}

                            </div>

                        </div>

                        <div>
                            <a type="button" style="text-align: center; width: 100%; background-color: rgb(27, 168, 102); color:white; padding: 14px 20px; margin: 5px 0px; border: none; height:50px; border-radius: 4px;" href="{{ route('message.chat', [Auth::user()->id, $detail->id]) }}"  data-original-title="Close">
                                Message
                            </a>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="profile-head" style="background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; height:590px; width:auto; overflow:scroll;">

                                @foreach($posts as $post)

                                    {{-- @if ($post->id_user != NULL) --}}

                                    <div class="card gedf-card" style="margin-bottom: 2.77rem;">

                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-muted h7 mb-2" style="font-size: 0.8rem;">
                                                <i class="fa fa-clock-o"></i> {{ $post->created_at }}</div>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                        {{-- <div class="h6 dropdown-header">Configuration</div>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Hide</a> --}}
                                                        <a class="dropdown-item" href="/report/{{$post->id}}">Report</a>

                                                </div>
                                            </div>
                                        </div>


                                            <p class="card-text">
                                                {{$post->description}}
                                            </p>
                                            <div style="margin-top: 10px;">
                                                {{-- @foreach ($arrays as $array) --}}
                                                {{-- @foreach($datas as $key=>$data) --}}

                                                {{-- <span class="badge badge-primary">{{json_decode($data)}}</span> --}}
                                                {{-- <span class="badge badge-primary">{{$post->subj}}</span> --}}

                                                {{-- @endforeach --}}

                                                <span class="badge badge-primary">{{$post->subj}}</span>

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
                                            {{-- <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a> --}}
                                            <a href="/comment/{{$post->id}}" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                                            {{-- <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a> --}}
                                        </div>
                                    </div>


                                    {{-- @elseif ($post->id_user==NULL) --}}


                                    {{-- @endif --}}
                                @endforeach

                                <br><h5 style="color: #333; font-size: 30px; text-align: center;">
                                    <b>Joined in {{ $detail->joined_in }}</b>
                                </h5>
                                <h6 style="color: #333; font-size: 30px; text-align: center;">
                                    <b>NO POST YET</b>
                                </h6><br>

                                @endforeach


                        </div>
                    </div>

                </div>

            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>
