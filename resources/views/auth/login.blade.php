<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>

      <!-- SITE TITTLE -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      
      <link href="{{asset('css/fonts/fonts.css')}}" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <!-- CUSTOM CSS -->
      <link href="{{asset('css/login.css')}}" rel="stylesheet">

    </head>
<body>

<div class="container">

    <div class='spacer40'></div>

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="images/logo.png" alt="" style="width: 135px; height:80px;" >
        </a>
        <p class='text-black pull-right m-t-small'>
            Not yet registered?
            <a class="btn btn-static-primary btn-small m-l" href="{{ route('register') }}">Create an Account
                <i class='  fa fa-arrow-right'></i>
             </a>
        </p>

        <div class='spacer80'></div>

        <h1 class='text-center text-black' style="padding-right: 494px;">
            Sign in
        </h1>
        <p class='subtitle text-center text-black' style="padding-right: 494px;">
            Welcome back
        </p>

         <div class="row">
             <div class="card-body m400 m-l-r-auto container-fluid">
                <div class="panel panel-default">        
                     <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''  }} ">                            
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>

                                <div class="col-md-6 adding" style="margin-left: 41px;">
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                         <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                               <span class="input-group-addon">
                                    <i class="fa fa-key"></i>
                                </span>

                                <div class="col-md-6 adding" style="margin-left: 41px;">
                                    <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group" style="margin-left: 41px;">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                     <a class="btn btn-default" style="padding-left: 235px;" href="{{ route('password.request') }}">
                                         Forgot Your Password?
                                     </a>   
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-default btn-signin">
                                    Sign in
                                </button>
                            </div>
                        </div>                                            
                     </form>

                     <P style="padding-left: 164px;">
                        Don't have an account? 
                        <a class="align-middle" href="{{ route('register') }}" style="color:#00aeff; ">
                            <strong>Get Started</strong>
                        </a>
                    </P>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>