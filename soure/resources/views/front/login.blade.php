<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{  asset('bower_components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
</head>
<body style="background: none">

    <form class="form-signin" action="{{ route('action') }}" method="post" enctype="multipart/form-data">
      <div class="text-center mb-4">     
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>       
      </div>

      <div class="form-label-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="inputEmail">Email address</label>
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        
      </div>

      <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">
        
      </div>

      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a class="btn btn-lg btn-secondary btn-block" href="registration.php">Đăng kí</a>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
  
 <<script src="{{  asset('js/jquery.js')}}"></script>
    <script src="{{  asset('js/bootstrap.min.js')}}"></script>

</body>
</html>