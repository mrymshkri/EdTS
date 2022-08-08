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

body{
    color: #6F8BA4;
    margin-top:10px;
}
.section {
    padding: 50px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me
---------------------*/
.about-text h3 {
  font-size: 40px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 20px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 0px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
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
          <a class="nav-link" href="{{route('posts')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
            <span class="ml-2">Posts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('users')}}">
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
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-2">
                  {{-- <h1 class="h2">View Profile</h1><br> --}}
                  {{-- <p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p> --}}
                    @foreach ($z as $zs)
                  <section class="section about-section gray-bg" id="about">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-lg-6">
                                <div class="about-text go-to">
                                    <h3 class="dark-color">{{$zs->name}}</h3>
                                    <h6 class="theme-color lead">A teacher at {{$zs->work_place}}</h6>

                                    <div class="row about-list">
                                        <div class="col-md-6">
                                            <div class="media">
                                                <label>ID User</label>
                                                <p>{{$zs->id}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Email</label>
                                                <p>{{$zs->email}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Location</label>
                                                <p>{{$zs->location}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="media">
                                                <label>Employee</label>
                                                <p>{{$zs->work_place}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Subjects</label>
                                                <p>{{$zs->subject}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Join date</label>
                                                <p>{{$zs->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-avatar">

                                    @if ($zs->profile_pict != NULL)
                                    <img src="/storage/file_upload/{{$zs->profile_pict}}" style="border-radius: 50%; display: block; width:250; height:350; margin-left: auto; margin-right: auto; " alt=""/>
                                    {{-- <img style="width: 50%" src="/storage/file_upload/{{$post->file_upload}}" alt=""> --}}
                                    @else
                                    <img style="border-radius: 50%; display: block; width:280; height:300; margin-left: auto; margin-right: auto;" src="http://cdn.onlinewebfonts.com/svg/img_104741.png" alt=""/>
                                    @endif

                                    {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt=""> --}}
                                </div>
                            </div>
                        </div>
                        <br><div class="counter">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="500" data-speed="500">{{$postLength}}</h6>
                                        <p class="m-0px font-w-600">Posts</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="150" data-speed="150">{{$reportLength}}</h6>
                                        <p class="m-0px font-w-600">Reported</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="850" data-speed="850">{{$messageLength}}</h6>
                                        <p class="m-0px font-w-600">Messages</p>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <div class="count-data text-center">
                                        <h6 class="count h2" data-to="190" data-speed="190">{{$commentLength}}</h6>
                                        <p class="m-0px font-w-600">Comments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @endforeach


            </main>
        </div>
      </div>
</body>
</html>


