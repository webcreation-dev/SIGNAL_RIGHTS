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
                  <input class="form-control" name="email" type="email" required="" placeholder="amnesty@gmail.com">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="form-group">
                  <label class="col-form-label">Mot de passe</label>
                  <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
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




{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
