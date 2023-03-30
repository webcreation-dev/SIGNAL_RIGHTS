@extends('layouts.auth')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/3.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark">
            <div>
              <div><a class="logo text-start" href="index.html">
                <img class="img-fluid for-light" src="{{ asset('assets/images/landing/amnesty.png')}}" alt="looginpage">
                <img class="img-fluid for-dark" src="{{ asset('assets/images/landing/amnesty.png')}}" alt="looginpage"></a></div>

              <div class="login-main">
                <form method="POST" action="{{ route('post.anonymous.login') }}" class="theme-form">
                    @csrf

                    <h4>Suivre votre demande</h4>
                    <p>Entrez votre code secret & code de la demande</p>

                    <div class="form-group">
                      <label class="col-form-label">Code secret</label>
                      <input name="secret_code" class="form-control" type="text" required="" placeholder="452698">
                    </div>


                    <div class="form-group">
                        <label class="col-form-label">Code demande</label>
                        <input name="generate_code" class="form-control" type="password" required="" placeholder="854692">
                    </div>

                  <div class="form-group mb-0">

                    <button class="btn btn-primary btn-block w-100" type="submit">Connecter</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
