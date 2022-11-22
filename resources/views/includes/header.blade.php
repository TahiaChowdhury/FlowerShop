<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawesome css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{asset('custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Flower Shop</title>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{asset('frontend/image/logo.jpg')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('manage') }}">Manage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('createFlower') }}">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">Services</a>
              </li>
              <li>
                <a class="nav-link active" href="#">About</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                
                <li>
                    <a class="nav-link active" href="">SignUp</a>
                </li>
                <li>
                    <a class="nav-link active" href="">LogIn</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

    </header>