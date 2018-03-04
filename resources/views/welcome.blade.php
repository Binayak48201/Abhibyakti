@extends('layouts.app')

@section('content')


 {{-- <img class="" src="{{ asset('images/background.png') }}" alt="" width="244" height="196" > --}}
{{-- <img src="https://www.algolia.com/static_assets/images/svg/hero-background-fc97695d.svg"> --}}

	<div class="mainbody" id="home">
		@include('layouts.background')
		<div class="container">
			<form class="hero__form" action="" method="">
				{{csrf_field()}}
		            <div class="form-group">
		                <div class="form-group--search form-group--search--left">
		                    <input class="form-control form-control-lg form-control--rounded" name="s" type="search" id="" placeholder="Search">
		                    <button class="btn-submit" type="submit"><i class="????"></i></button>
		                </div>
		            </div>
		     </form>
		</div>

	<div class="tilt" >  </div>
<section class="case-vid">
		<div class="container tiltbody">
		    <div class="row ">
		  		<div class="col-md-6">
	  			<p>Lorem ipsdsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	  		</div>

	  	  	<div class="col-md-6">
			   <video src="{{asset('video/FinalFantasy.mp4')}}" {{-- autoplay="" --}} poster="{{asset('images/finalfanatasy.jpg')}}" controls=""></video>     	
	  		</div>
	  	
	  </div>	
	 
</div>
</section>
		</div>     
	            

	     


@endsection