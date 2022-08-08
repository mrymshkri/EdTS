<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<style>
    .sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100;
  padding: 90px 0 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
  z-index: 99;
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 11.5rem;
    padding: 0;
  }
}

.navbar {
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
}

@media (min-width: 767.98px) {
  .navbar {
    top: 0;
    position: sticky;
    z-index: 999;
  }
}

.sidebar .nav-link {
  color: #333;
}

.sidebar .nav-link.active {
  color: #0d6efd;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EdTS Admin Dashboard</title>
    <!-- insert stylesheets here -->
</head>
<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                EdTS ADMIN
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Admin
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Messages</a></li>
                  <li><a class="dropdown-item" href="#">Log out</a></li>
                </ul>
              </div> --}}
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

<div class="position-sticky pt-md-5">
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('dashboard_admin')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            <span class="ml-2">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('posts')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            <span class="ml-2">Posts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('users')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            <span class="ml-2">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('report')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            <span class="ml-2">Reporting Issues</span>
          </a>
        </li>

      </ul>
  </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                  <h1 class="h2">View Post</h1><br>

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
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2" style="font-size: 0.8rem;"> <i class="fa fa-clock-o"></i> {{ $post->created_at }}</div>

                                    <p class="card-text">
                                        {{$post->description}}
                                    </p>
                                    <div style="margin-top: 10px;">

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
                                    <div class="container mt-3 mb-3">
                                        <div class="d-flex justify-content-center row">
                                            <div class="d-flex flex-column col-md-12">
                                                <div class="coment-bottom bg-white p-2 px-4">

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
                                                                            <a href="#" style="color: #383b43; font-size: 15px;">{{$com->name}}</a>
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


            </main>
        </div>
      </div>
</body>
</html>


