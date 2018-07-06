@extends('surveyexp.layouts.app')

@section('content')
	<form class="form-signin" method="post" action="{{ route('login') }}">
      <div class="text-center mb-4">
        <img class="mb-4" src="{{ public_path('img/Logo Expert')}}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Encuesta</h1>
        <!--<p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>-->
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Correo electrónico</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <!--<label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
    </form>
@endsection