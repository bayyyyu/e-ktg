<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/assets-login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public')}}/assets-login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public')}}/assets-login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{url('public')}}/assets-login/css/style.css">

    <title>Login Admin E-KTG</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{url('public')}}/assets-login/images/1.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login Admin</h3>
            </div>
             @include('backend.template.utils.notif')
            <form action="{{url('auth/login')}}" method="post">
               @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                {{-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  --}}
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{url('public')}}/assets-login/{{url('public')}}/assets-login/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/assets-login/{{url('public')}}/assets-login/js/popper.min.js"></script>
    <script src="{{url('public')}}/assets-login/{{url('public')}}/assets-login/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets-login/{{url('public')}}/assets-login/js/main.js"></script>
  </body>
</html>