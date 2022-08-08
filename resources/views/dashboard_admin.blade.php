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
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

<div class="position-sticky pt-md-5">
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{route('dashboard_admin')}}">
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
                  <h1 class="h2">Dashboard</h1>

                  <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Users</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$userLength}}</h5>
                              <p class="card-text">Latest registering on {{ date("jS F, Y", strtotime($b->created_at)) }} at {{ date('H:i', strtotime($b->created_at)) }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                        <div class="card">
                            <h5 class="card-header">Posts</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$postLength}}</h5>
                              <p class="card-text">Latest posting on {{ date("jS F, Y", strtotime($a->created_at)) }} at {{ date('H:i', strtotime($a->created_at)) }}</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                        <div class="card">
                            <h5 class="card-header">Reporting Issues</h5>
                            <div class="card-body">
                              <h5 class="card-title">{{$reportLength}}</h5>
                              <p class="card-text">Latest reported on {{ date("jS F, Y", strtotime($c->created_at)) }} at {{ date('H:i', strtotime($c->created_at)) }}</p>
                            </div>
                          </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Latest posts</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Subject</th>
                                            {{-- <th scope="col">Description</th> --}}
                                            <th scope="col">Owner Name</th>
                                            <th scope="col">Published date</th>
                                            {{-- <th scope="col"></th> --}}
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                            <tr>
                                                <th scope="row">{{$post->id}}</th>
                                                <td>{{$post->subj}}</td>
                                                {{-- <td>johndoe@gmail.com</td> --}}
                                                <td>{{$post->name}}</td>
                                                <td>{{$post->created_at}}</td>
                                                {{-- <td><a href="#" class="btn btn-sm btn-primary">View</a></td> --}}
                                            </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>
                                  <a href="{{route('posts')}}" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Latest users</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            {{-- <th scope="col">Description</th> --}}
                                            <th scope="col">Employee</th>
                                            {{-- <th scope="col">Published date</th> --}}
                                            {{-- <th scope="col"></th> --}}
                                          </tr>
                                        </thead>
                                        <tbody>
                                         @foreach ($users as $user)
                                          <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            {{-- <td>johndoe@gmail.com</td> --}}
                                            {{-- <td>Maryam Shukri</td> --}}
                                            <td>{{$user->work_place}}</td>
                                            {{-- <td><a href="#" class="btn btn-sm btn-primary">View</a></td> --}}
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>
                                  <a href="{{route('users')}}" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                  </div>

                  {{-- <footer class="pt-5 d-flex justify-content-between">
                    <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
                    <ul class="nav m-0">
                        <li class="nav-item">
                          <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Terms and conditions</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#">Contact</a>
                        </li>
                      </ul>
                  </footer> --}}



            </main>
        </div>
      </div>
</body>
</html>

{{-- <script>
    new Chartist.Line('#traffic-chart', {
    labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
    series: [
      [23000, 25000, 19000, 34000, 56000, 64000]
    ]
  }, {
  low: 0,
  showArea: true
});
    </script> --}}
