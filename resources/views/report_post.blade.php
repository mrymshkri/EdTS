<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ml-2">
                                    <div class="h4 m-0">REPORT</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="h5 m-0">What's going on?</div>
                        <div class="h7 text-muted" style="font-size: 0.9rem;">I'm concerned about this post</div>

                        <br>

                        {{-- <form action="/action_page.php">

                              <input type="radio" id="html" name="fav_language" value="HTML">
                              <label for="html">HTML</label><br>

                              <input type="radio" id="css" name="fav_language" value="CSS">
                              <label for="css">CSS</label><br>

                              <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                              <label for="javascript">JavaScript</label><br><br>

                              <input type="submit" value="Submit">
                            </form> --}}
                            <form action={{ route('report.store', [$post_id, Auth::user()->id]) }} method="post">

                            @csrf
                            @method('PUT')

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="Nudity or sexual activity" id="report1" name="report">
                                <label class="custom-control-label" for="report1">Nudity or sexual activity</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="Harrasment or bullying" id="report2" name="report">
                                <label class="custom-control-label" for="report2"> Harrasment or bullying</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="Hate speech" id="report3" name="report">
                                <label class="custom-control-label" for="report3">Hate speech</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="Violence" id="report4" name="report">
                                <label class="custom-control-label" for="report4">Violence</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="False Information" id="report5" name="report">
                                <label class="custom-control-label" for="report5">False Information</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" value="Spam" id="report6" name="report">
                                <label class="custom-control-label" for="report6">Spam</label>
                            </div>
                            {{-- <div>
                                <label for="report7">Else : </label><br>
                                <input type="text" id="report7" name="report"><br>
                            </div> --}}


                            <br><button class="btn btn-primary" type="submit" style="text-align: center; width:100px; background-color: rgb(70, 122, 165); color:white">Submit</button>

                        </form>
                    </div>

            </div>
        </div>
    </div>

</x-app-layout>






