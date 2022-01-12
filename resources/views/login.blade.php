<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{URL:: asset('lib/fontawesome-free/css/all.min.css'); }}" rel="stylesheet">
    <link href="{{URL:: asset('lib/ionicons/css/ionicons.min.css'); }}" rel="stylesheet">
    <link href="{{URL:: asset('lib/typicons.font/typicons.css'); }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{URL:: asset('css/azia.css'); }}">

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">az<span>i</span>a</h1>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>
          @if(session()->has('success'))
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('success') }}
          </div>
          @endif
          <form action="{{ route('login.post') }}" method="POST">
           
            @csrf
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
              @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('email') }}</span>
              @endif
            </div><!-- form-group -->
            <button type="submit" class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p><a href="">Forgot password?</a></p>
          <p>Don't have an account? <a href="{{ url('signup');}}">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="{{URL:: asset('lib/jquery/jquery.min.js'); }}"></script>
    <script src="{{URL:: asset('lib/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <script src="{{URL:: asset('lib/ionicons/ionicons.js'); }}"></script>
    <!-- <script src="{{URL:: asset('js/jquery.cookie.js'); }}" type="text/javascript"></script>
    <script src="{{URL:: asset('js/jquery.cookie.js'); }}" type="text/javascript"></script> -->

    <script src="{{URL:: asset('js/azia.js'); }}"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
