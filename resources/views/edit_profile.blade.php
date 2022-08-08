<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<x-app-layout>


    <div class="container emp-profile" style="padding: 2%; margin-top: 2%; margin-bottom: 2%; border-radius: 0.5rem; background: #fff;" >
            <form action="{{url('/profile/update/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" style="text-align: center; background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; ">

                            @foreach($details as $detail)
                            @if(Auth::user()->id == $detail->id_user)

                                @if ($detail->profile_pict != NULL)
                                <img src="/storage/file_upload/{{$detail->profile_pict}}"  style="border-radius: 50%; display: block; width:150; height:200; margin-left: auto; margin-right: auto; " alt=""/>
                                @else
                                <img style="border-radius: 50%; display: block; width:200; height:200; margin-left: auto; margin-right: auto;" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/>
                                    @endif

                            <br><h5 style="color: #333; font-size: 25px;">
                                {{ Auth::user()->name }}
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
                                            <p style="font-size: 15px; color: #f7f7f8;">{{ Auth::user()->email }}</p>
                                        </div>

                                        <div class="row" style="background-color: rgba(165, 162, 162, 0.873); padding: 10px; margin: 5px 5px 2px; ">
                                            <i class="fa fa-calendar fa-fw" style="font-size:18px; color:white;"></i>
                                            &nbsp;
                                            {{-- @if(Auth::user()->id == $detail->id_user) --}}
                                            <p style="font-size: 15px; color: #f7f7f8;">Joined {{ date('F Y', strtotime($detail->joined_in)) }}</p>
                                            {{-- @endif --}}
                                       </div>
                                       @endif
                                        @endforeach

                            </div>

                        </div>


                    </div>
                    <div class="col-md-8">
                        <div class="profile-head" style="background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; height:530px; width:auto; overflow:scroll;">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <br><div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <br><div class="form-group">
                                        <label for="eMail">Location</label>
                                        <input type="text" class="form-control" name="location" placeholder="Enter location" value="{{ $detail->location }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Employer</label>
                                        <input type="text" class="form-control" name="work_place" placeholder="Enter employer name" value="{{ $detail->work_place }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Subjects</label>
                                        <input type="text" class="form-control" name="subject" placeholder="Enter subjects teach" value="{{ $detail->subject }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="Street">Profile Picture</label><br>
                                        {{-- <input type="file" id="profile_pict" name="profile_pict" value="{{ $detail->profile_pict }}"> --}}
                                        <input type="file" id="profile_pict" name="profile_pict">
                                    </div>
                                </div>

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <a type="button" style="text-align: center; width: 20%; background-color: rgb(115, 129, 141); color:white; padding: 10px; margin: 5px 0px; border: none; border-radius: 4px;" href="{{route('user_profile')}}">Cancel</a>
                                        {{-- <a type="button" id="submit" name="submit" class="btn btn-primary" style="text-align: center; width: 20%; background-color: rgb(70, 122, 165); color:white; padding: 10px; margin: 5px 0px; border: none; border-radius: 4px;">Update</a> --}}
                                        <button type="submit" class="btn btn-primary" style="text-align: center; width: 20%; background-color: rgb(70, 122, 165); color:white; padding: 10px; margin: 5px 0px; border: none; border-radius: 4px;">Update</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>
