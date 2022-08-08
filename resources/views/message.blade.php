<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<x-app-layout>


    <div class="container emp-profile" style="padding: 2%; margin-top: 2%; margin-bottom: 2%; border-radius: 0.5rem; background: #fff;" >
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" style="background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; height:500px; width:auto; overflow:scroll;">
                            <div class="px-4 d-none d-md-block" style="padding-right: 1.5rem!important; padding-left: 1.5rem!important;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <input type="text" class="form-control my-3" placeholder="Search...">
                                    </div>
                                </div>
                            </div>

                            @foreach($sender as $senders)
                            <a href="{{ route('message.chat', [Auth::user()->id, $senders->id_sender]) }}"  class="list-group-item list-group-item-action border-0" style="background-color: rgb(248, 244, 244);">
                                {{-- <div class="badge bg-success float-right">5</div> --}}
                                <div class="d-flex align-items-start">
                                    @if ($senders->profile_pict == NULL)
                                        {{-- <img class="rounded-circle mr-1" width="40" height="40" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/> --}}
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    @else
                                        <img class="rounded-circle mr-1" width="40" height="40" src="/storage/file_upload/{{$senders->profile_pict}}" alt="">
                                    @endif

                                    <div class="flex-grow-1 ml-3" id="list_chat">
                                        {{$senders->name}}
                                        <div class="text-muted small"><em>{{$senders->location}} </em></div>
                                    </div>
                                </div>
                            </a>
                            @endforeach


                            <hr class="d-block d-lg-none mt-1 mb-0">

                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="profile-head" style="background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; height:500px; width:auto; overflow:scroll;">

                            {{-- <br><h5 style="color: #333; font-size: 30px; text-align: center;">
                                <b>Joined in April 2022</b>
                            </h5> --}}
                            <br><br><h6 style="color: #333; font-size: 20px; text-align: center;">
                                <b>Select a chat to start messaging</b>
                            </h6><br>


                        </div>
                    </div>

                </div>

            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>
