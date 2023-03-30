@extends('layouts.auth')

@section('content')

<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">
        <div class="login-card login-dark">
          <div>
            <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{ asset('assets/images/landing/amnesty.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
            <div class="login-main">
              <form class="theme-form" method="POST" action="{{ route('login') }}">
                @csrf

                <h4>Connectez vous</h4>
                <p>Entrez votre email & mot de passe</p>

                <div class="form-group">
                  <label class="col-form-label">Adresse email</label>
                  <input class="form-control" name="email" type="email" value=" {{$email}} " required="" placeholder="amnesty@gmail.com">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                  <label class="col-form-label">Mot de passe</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password"  value=" {{$password}} "required="" placeholder="*********">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="form-group mb-0">
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Connexion</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


