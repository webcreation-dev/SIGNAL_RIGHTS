@extends('layouts.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>EQUIPE DE COLLABORATEURS</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active">Collaborateurs</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h3>Vos collaborateurs</h3>
                        <span>
                            Consulter et ajouter les collaborateurs
                        </span>

                        <span><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="example-popover btn btn-primary mb-0 me-0" type="button" >Ajouter un collaborateur </button></span>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-9">
                                <thead>
                                    <tr>
                                        <th>N&ordm;</th>
                                        <th>Nom</th>
                                        <th>Mail</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $n = 0;
                                    @endphp

                                    @foreach ($emails as $email)

                                        @php
                                            $n += 1;
                                        @endphp
                                        <tr>
                                            <td>{{$n}}</td>
                                            <td>{{$email->name}}</td>
                                            <td>{{$email->mail}}</td>
                                            <td>{{$email->role}}</td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>















<div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un collaborateur</h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('emails.store')}}" class="needs-validation" enctype="multipart/form-data" method="POST" class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
            @csrf

            <div class="row">

                <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Role</label>
                    <select class="js-example-basic-single" required="" name="role">
                      <option value="manager">Manager</option>
                      <option value="admin">Administrateur</option>
                    </select>
                </div>

                <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Nom</label>
                    <input class="form-control" id="task-title" required="" value="Jacob" name="name" type="text" required="" autocomplete="off">
                </div>

                <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Email du collaborateur</label>
                    <input class="form-control" id="task-title" required="" value="adjibiadechinan@gmail.com" name="mail" type="email" required="" autocomplete="off">
                </div>

            </div>
            <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Envoyer</button>
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Annuler</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
