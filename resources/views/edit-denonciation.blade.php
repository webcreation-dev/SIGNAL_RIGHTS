@extends('layouts.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>INFORMATIONS PERSONNELLES</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active"> Informations personelles</li>
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
                    <div class="card-header">
                        <h5>Ajouter vos informations personelles </h5>
                        <br>
                        <p style="text-align: justify; ">Enregistrer vos informations personnelles pour nous permettre de faire
                            un suivi correct de votre denonciation. Vos données sont en sécurité et ne sont vus que par les membres de notre administration.</p>
                    </div>
                    <div class="card-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step"><a class="btn btn-primary"
                                        href="#step-1">1</a>
                                    <p>Nomination</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light"
                                        href="#step-2">2</a>
                                    <p>Contact</p>
                                </div>

                            </div>
                        </div>
                        <form action="{{route('denunciations.update', ['denunciation' => $denunciation->id ])}}" class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="setup-content" id="step-1">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Nom</label>
                                            <input class="form-control" name="last_name"
                                                id="exampleFormControlInput1" type="text" value="{{ $denunciation->last_name ?? 'YESSIN' }}"
                                                placeholder="YESSIN">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Prenom</label>
                                            <input class="form-control" name="first_name"
                                                id="exampleFormControlInput1" type="text" value="{{ $denunciation->first_name ?? 'Géraud' }}"
                                                placeholder="Géraud">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary nextBtn pull-right"
                                    type="button">Suivant</button>
                            </div>

                            <div class="setup-content" id="step-2">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Email</label>
                                            <input class="form-control" name="email"
                                                id="exampleFormControlInput1" type="email"  value="{{ $denunciation->email ?? 'adjilan2403@gmail.com' }}"
                                                placeholder="geraudyessin@gmail.com">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Telephone</label>
                                            <input class="form-control" name="phone"
                                                id="exampleFormControlInput1" type="text"  value="{{ $denunciation->phone ?? '+229 96 32 14 52' }}"
                                                placeholder="+229 96 15 47 85">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Lieu de rédidence</label>
                                            <input class="form-control" name="place_personal"
                                                id="exampleFormControlInput1" type="text"  value="{{ $denunciation->place_personal ?? 'Calavi Cotonou' }}"
                                                placeholder="Benin Cotonou Qtier Houeyho">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mt-0 col-md-12">
                                    <div class="d-flex date-details">

                                      <div class="d-inline-block">
                                          <input class="checkbox_animated" name="accord" id="chk-ani" type="checkbox">Je souhaite etre cité
                                      </div>
                                    </div>
                                  </div>


                                <button class="btn btn-success nextBtn pull-right"
                                    type="submit">Terminé</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
