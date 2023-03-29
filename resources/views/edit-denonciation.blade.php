@extends('layouts.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Modification</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active"> Modification</li>
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
                        <h5>Modifier votre dénonciation</h5>
                        <br>
                        <p style="text-align: justify; ">Votre signalement nous permet d'agir pour défendre les droits humains et lutter contre l'impunité. Toutes les informations que vous fournissez resteront confidentielles.</p>
                    </div>
                    <div class="card-body">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step"><a class="btn btn-primary"
                                        href="#step-1">1</a>
                                    <p>Informations générales</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light"
                                        href="#step-2">2</a>
                                    <p>Détails de l'incident</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light"
                                        href="#step-3">3</a>
                                    <p>Confidentialité et preuves</p>
                                </div>

                            </div>
                        </div>
                        <form action="{{route('denunciations.update', ['denunciation' => $denunciation[0]->id ])}}" class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="setup-content" id="step-1">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left">Titre de la
                                                dénonciation</label>
                                            <input class="form-control" name="title"
                                                id="exampleFormControlInput1" type="text" required="required" value="{{ $denunciation[0]->title }}"
                                                placeholder="Maltraitance des enfants">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label pull-left"
                                                for="exampleFormControlTextarea4">Type de
                                                dénonciation</label>
                                            <select name="type" class="js-example-basic-single  col-sm-12" value="{{ $denunciation[0]->type }}"
                                             required="required">
                                                {{-- <option value="" selected disabled>Sélectionnez un type de dénonciation</option> --}}
                                                <optgroup label="Developer">
                                                    <option value="AL">Alabama</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Designer">
                                                    <option value="WY">Peter</option>
                                                    <option value="WY">Hanry Die</option>
                                                    <option value="WY">John Doe</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="valid-feedback pull-left">Validé !</div>
                                    </div>
                                </div>

                                <button class="btn btn-primary nextBtn pull-right"
                                    type="button">Suivant</button>
                            </div>

                            <div class="setup-content" id="step-2">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left"
                                                for="exampleFormControlTextarea4">Lieu de l'incident</label>
                                            <input class="form-control" id="validationDefault03" required="required" value="{{ $denunciation[0]->place }}"
                                                type="text" name="place" placeholder="Parakou">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label class="form-label pull-left" for="exampleFormControlTextarea4">Date</label>
                                                <input required class="form-control digits" name="date" type="date" value="{{ $denunciation[0]->date }}" value="2018-01-01">
                                                <div class="valid-feedback pull-left">Validé !</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left"
                                                for="exampleFormControlTextarea4">Description de l'incident</label>
                                            <textarea class="form-control" name="description" required
                                                id="exampleFormControlTextarea4" value="{{ $denunciation[0]->description }}"
                                                rows="3"></textarea>
                                                <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary nextBtn pull-right"
                                    type="button">Suivant</button>
                            </div>

                            <div class="setup-content" id="step-3">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left"
                                                for="exampleFormControlTextarea4">Code secret de suivi
                                                </label>
                                            <div class="input-group"><span class="input-group-text"
                                                    id="inputGroupPrepend2">@</span>
                                                <input class="form-control" name="secret_code"
                                                    id="validationDefaultUsername" type="text"
                                                    placeholder="56892" required="required"
                                                    aria-describedby="inputGroupPrepend2" value="{{ $denunciation[0]->secret_code }}"
                                                    >
                                                    <div class="valid-feedback pull-left">Validé !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label pull-left"
                                                for="exampleFormControlTextarea4">Preuves de l'incident
                                                </label>
                                            <input class="form-control" name="file_name" type="file" >
                                            <div class="valid-feedback pull-left">Validé !</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-success pull-right"
                                    type="submit">Terminé!</button>
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
