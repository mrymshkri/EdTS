<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<x-app-layout>


    <div class="container emp-profile" style="padding: 2%; margin-top: 2%; margin-bottom: 2%; border-radius: 0.5rem; background: #fff;" >
            {{-- <form method="post"> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" style="background-color: rgb(248, 244, 244); padding: 20px; margin: 5px; height:570px; width:auto; overflow-y: scroll;">
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
                                        <img src="http://cdn.onlinewebfonts.com/svg/img_104741.png"  class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
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
                    @foreach ($s as $ss)


                    <div class="col-md-8">
                        <div class="py-2 px-4 border-bottom d-none d-lg-block" style="padding-right: 1.5rem!important; padding-left: 1.5rem!important;" id="name-chat">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative">
                                    @if ($ss->profile_pict == NULL)
                                        {{-- <img class="rounded-circle mr-1" width="40" height="40" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/> --}}
                                        <img src="http://cdn.onlinewebfonts.com/svg/img_104741.png"  class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    @else
                                        <img class="rounded-circle mr-1" width="40" height="40" src="/storage/file_upload/{{$ss->profile_pict}}" alt="">
                                    @endif
                                </div>
                                <div class="flex-grow-1 pl-3" >
                                    <strong>{{$ss->name}}</strong>
                                    <div class="text-muted small"><em>Teacher at {{$ss->work_place}} </em></div>
                                </div>
                                <div>
                                    {{-- <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button --}}
                                    {{-- <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button> --}}
                                    {{-- <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="profile-head" style="background-color: rgb(219, 214, 214); padding: 20px; margin: 5px; height:430px; width:auto; overflow-y: scroll;">

                            <div class="position-relative">
                                <div class="chat-messages p-4" style="display: flex; flex-direction: column; max-height: 800px;">
                                    {{-- @php
                                        $a = DB::table('message') ->where('id_receiver', '=', Auth::user()->id) ->pluck('id');
                                    @endphp --}}
                                    @foreach ($mess as $message )
                                        @php
                                            $id = $message->id_message;

                                            $a = DB::table('message')
                                            ->where('id', '=', $id)
                                            ->pluck('id_sender');

                                            $b = DB::table('user_details')
                                            ->where('id_user', '=', $a)
                                            ->join('users', 'user_details.id_user', '=', 'users.id')
                                            ->select('user_details.*','users.name')
                                            ->get();

                                        @endphp
                                        @foreach ($b as $bb )

                                        @if($bb->id_user != Auth::user()->id)
                                        <div class="chat-message-left pb-4" style="margin-right: auto; display: flex; flex-shrink: 0">
                                            <div>
                                                @if ($bb->profile_pict == NULL)
                                                    {{-- <img class="rounded-circle mr-1" width="40" height="40" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/> --}}
                                                    <img src="http://cdn.onlinewebfonts.com/svg/img_104741.png"  class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                @else
                                                    <img class="rounded-circle mr-1" width="40" height="40" src="/storage/file_upload/{{$bb->profile_pict}}" alt="">
                                                @endif
                                                <div class="text-muted small text-nowrap mt-2">{{ date('H:i', strtotime($message->created_at)) }}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                <div class="font-weight-bold mb-1">{{$bb->name}}</div>
                                                {{$message->message}}
                                            </div>
                                        </div>

                                        @else
                                        <div class="chat-message-right pb-4" style="display: flex; flex-shrink: 0; flex-direction: row-reverse; margin-left: auto">
                                            <div>
                                                @if ($bb->profile_pict == NULL)
                                                    {{-- <img class="rounded-circle mr-1" width="40" height="40" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/> --}}
                                                    <img src="http://cdn.onlinewebfonts.com/svg/img_104741.png"  class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                                @else
                                                    <img class="rounded-circle mr-1" width="40" height="40" src="/storage/file_upload/{{$bb->profile_pict}}" alt="">
                                                @endif
                                                <div class="text-muted small text-nowrap mt-2">{{ date('H:i', strtotime($message->created_at)) }}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                {{$message->message}}
                                            </div>
                                        </div>

                                        @endif
                                        @endforeach
                                        @endforeach
                                    @endforeach


                                </div>
                            </div>


                        </div>

                        <form action={{ route('message.store', [$senders->id_sender, Auth::user()->id]) }} method="post">
                            @csrf
                            @method('PUT')

                            <div class="flex-grow-0 py-3 px-4 border-top" style="padding-top: 1rem!important; padding-bottom: 1rem!important; padding-right: 1.5rem!important; padding-left: 1.5rem!important; flex-grow: 0!important; border-top: 1px solid #dee2e6!important;">
                                <div class="input-group">
                                    <input type="text" name="message" class="form-control" placeholder="Type your message">
                                    <button class="btn btn-primary" type="submit" style="background-color: rgb(70, 122, 165); color:white;">Send</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

            {{-- </form> --}}
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>
