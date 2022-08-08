<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<x-app-layout>
    <x-slot name="header">
        <h2 style="font-family: Brush Script MT; font-size: 40px; color: rgb(48, 48, 94); ">
            {{ __('Education Toolkit System') }}
        </h2>
        <p>
            {{ __('Online Platform for Malaysian Teachers') }}
        </p>
    </x-slot>

    {{-- <div class="input-group-prepend" style="padding-right:110px; padding-top:10px; float: right;">
        <button class="btn btn-outline-default dropdown-toggle waves-effect waves-themed" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="filter" id="filter">Filter Subjects</button>
        <div class="dropdown-menu" style="">


            @foreach($subjects as $subject)
                <a class="dropdown-item" value="{{$subject->subject_name}}">{{$subject->subject_name}}</a>
            @endforeach

        </div>
    </div> --}}

    <div class="py-12" id="post">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                                   <!--- \\\\\\\Post-->

                <form action="{{url('/dashboard/store/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                    <div class="card gedf-card" style="margin-bottom: 2.77rem;">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                        a post</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                    <!--- Multiple select subject dropdown-->
                                    <div class="form-group" style="border: 1px solid rgb(218, 212, 212); width: 250px;">
                                        <select id="category" name="subj[]" multiple class="form-control" >
                                            @foreach($subjects as $subject)
                                            <option>{{$subject->subject_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--- End multiple select subject dropdown-->
                                    <div class="form-group">
                                        <label class="sr-only" for="message">post</label>
                                        <textarea class="form-control" name= "description" id="description" rows="3" placeholder="What's on your mind {{ Auth::user()->name }} ?"></textarea>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file_upload" name="file_upload">
                                        <label class="custom-file-label" for="customFile">Add to your post</label>
                                    </div>
                                    {{-- <div class="form-group">
                                        {{Form::file('file_upload')}}
                                    </div> --}}

                                </div>

                            </div>
                            <div class="btn-toolbar justify-content-between" style="margin-top: 20px;">

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary" style="text-align: center; width:100px; background-color: rgb(70, 122, 165); color:white;">Share</button>
                                </div>
                                {{-- <div class="btn-group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-globe"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Post /////-->

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
                                        {{-- <div class="h6 dropdown-header">Configuration</div> --}}
                                        {{-- <a class="dropdown-item" href="#">Save</a> --}}
                                        {{-- <a class="dropdown-item" href="#">Hide</a> --}}
                                        <a class="dropdown-item" href="/report/{{$post->id}}">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2" style="font-size: 0.8rem;">
                            <i class="fa fa-clock-o"></i>
                            {{ date("jS F, Y", strtotime($post->created_at)) }} at {{ date('H:i', strtotime($post->created_at)) }}
                        </div>
                        {{-- <a class="card-link" href="#">
                            <h5 class="card-title" > Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur
                                deserunt illo esse distinctio.</h5>
                        </a> --}}

                        <p class="card-text">
                            {{$post->description}}
                        </p>
                        <div style="margin-top: 10px;">

                            {{-- @php
                                 $datas = DB::table('post')
                                    ->select('post.subj')
                                    ->where('id', '=', $post->id)
                                    ->get();

                                // $arrlength=count($posts);

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
                            @endphp --}}

                                {{-- @for ($i=0; $i<5; $i++) --}}
                                {{-- <span class="badge badge-primary">{{ $oneSubjOnly[0][0] }}</span> --}}
                                <span class="badge badge-primary">{{ $post->subj }}</span>
                                {{-- @endfor --}}


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
                @endforeach
                {{-- @endforeach --}}
                <!-- Post /////-->

                </div>

            </div>
        </div>
    </div>

</x-app-layout>

<script>
    $(document).ready(function(){
        $('#category').multiselect({
            nonSelectedText: 'Select subjects related',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth:'250px'
            // buttonBorder:'100px'
        });
        $('#category_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:"{{url('/dashboard/store/'.Auth::user()->id)}}",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#category option:selected').each(function(){
                    $(this).prop('selected', false);
                    });
                    $('#category').multiselect('refresh');
                    alert(data['success']);
                }
            });
        });
    });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script type="text/javascript">
//filtering subject's post
    $(document).ready(function() {
        $(document).on('change', '#filter', function() {
            // var subject =  $(this).val();

            // var a = $(this).parent();
            // var op = "";

            $.ajax({
                url:"{{url('/dashboard')}}",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#filter option:selected').each(function(){
                    $(this).prop('selected', false);
                    });
                    // $('#category').multiselect('refresh');
                    alert(data['success']);
                }
            });
        });
    });
    </script>

