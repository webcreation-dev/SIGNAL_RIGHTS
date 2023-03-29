@extends('layouts.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>DENONCIATIONS</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Accueil</li>
                        <li class="breadcrumb-item active">Denonciations</li>
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
                        <h3>Vos denonciations</h3>
                        <span>
                            Consulter et gérer les dénonciations de votre plateforme
                        </span>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-9">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Lieu</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($denunciations as $denunciation)
                                        <tr>
                                            <td>{{$denunciation->title}}</td>
                                            <td>{{$denunciation->type}}</td>
                                            <td>{{$denunciation->place}}</td>
                                            <td>{{$denunciation->date}}</td>
                                            <td><span class="badge badge-success">{{$denunciation->status}}</span></td>
                                            <td>
                                                <ul class="action">
                                                    {{-- <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                    <li class="delete"><a href="#"><i class="icon-trash"></i></a></li> --}}
                                                    <li class="delete"><a href=" {{ route('manage.denunciations', ['denunciation_id' => $denunciation->id ])}}"><i class="icon-pencil"></i>Voir</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Categorie</th>
                                        <th>Lieu</th>
                                        <th>Date</th>
                                        <th>Code demande</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
