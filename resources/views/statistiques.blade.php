@extends('layouts.master')

@section('content')

<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Statistiques des denonciaions par mois</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
                  <svg class="stroke-icon">
                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Accueil</li>
              <li class="breadcrumb-item active">Statistiques</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 col-md-12 box-col-12">
          <div class="card">
            <div class="card-header">
              <h5>Point mensuel des 6 derniers mois</h5>
            </div>
            <div class="card-body chart-block">
              <canvas id="myBarGraph"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection

