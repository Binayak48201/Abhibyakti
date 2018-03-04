@extends('admin.layouts.app')

@section('fuck')

  <img  src="{{asset ('images/cover.png')}}" style="
    width: 990px;
    height: 624px;
">

   <form class="form-signin" method="POST" action="{{ route('admin.login.submit') }}">

        {{ csrf_field() }}

        <img class="mb-4" src="{{ asset('images/Logo.png') }}" alt="" width="244" height="196">

        <h1 class="h3 mb-3 font-weight-normal">Super Admin</h1>

        <label for="inputEmail" class="sr-only">Email address</label>      
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus> <br>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
       <br>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <button class="btn btn-info" type="submit">LOGIN</button>
       
    </form>

@endsection