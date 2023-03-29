@extends('layouts.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Dénonciation</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">
                  <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home')}}"></use>
                  </svg></a></li>
              <li class="breadcrumb-item">Accueil</li>
              <li class="breadcrumb-item active">Denonciation</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="email-wrap bookmark-wrap">
        <div class="row">
          <div class="col-xl-9 col-md-12 box-col-12">
            <div class="email-right-aside bookmark-tabcontent">
              <div class="card email-body radius-left">
                <div class="ps-0">
                  <div class="tab-content">


                    <div class="tab-pane fade active show" id="pills-created" role="tabpanel" aria-labelledby="pills-created-tab">
                      <div class="card mb-0">
                        <div class="card-header d-flex">
                          <h5 class="mb-0">Votre dénonciation</h5><a href="#">STATUT : </i><span class="badge badge-success">{{ App\Models\Denunciations::getNameStatus($denunciation->status)}}</span></a>
                        </div>
                        <div class="card-body p-0">
                          <div class="taskadd">
                            <div class="table-responsive">
                              <table class="table">
                                <tr>
                                  <td>
                                    <h6 class="task_title_0">TITRE</h6>
                                    {{-- <p class="project_name_0">General</p> --}}
                                  </td>
                                  <td>
                                    <p class="task_desc_0">{{$denunciation->title}}</p>
                                  </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">CATEGORIE</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0">{{$denunciation->type}}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">LIEU & DATE</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0"><span>{{$denunciation->place}} | {{$denunciation->date}}</span></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">DESCRIPTION</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0" style="text-align: justify;">{{$denunciation->description}}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">NIVEAU DE PRIORITE</h6>
                                    </td>
                                    <td>
                                      <p class="task_desc_0" style="text-align: justify;">{{$denunciation->level}}</p>
                                    </td>
                                </tr>

                              </table>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                    <div class="fade tab-pane" id="personal" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                        <div class="card mb-0">
                          <div class="card-header d-flex">
                            <h6 class="mb-0">Infos personnelles</h6><a href="#"><i class="me-2" data-feather="printer"></i>Imprimer</a>
                          </div>
                          <div class="card-body">

                            <div class="taskadd">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">NOM</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0"> @if($denunciation->last_name == null ) AUCUN @else {{$denunciation->last_name}} @endif </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">PRENOMS</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">@if($denunciation->first_name == null ) AUCUN @else {{$denunciation->first_name}} @endif</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">EMAIL</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">@if($denunciation->email == null ) AUCUN @else {{$denunciation->email}} @endif</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">TELEPHONE</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">@if($denunciation->phone == null ) AUCUN @else {{$denunciation->phone}} @endif</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">LIEU DE RESIDENCE</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">@if($denunciation->place_personal == null ) AUCUN @else {{$denunciation->place_personal}} @endif</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <h6 class="task_title_0">VEUT ETRE CITE OU PAS ?</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">@if($denunciation->accord == 'non' ) NON @else OUI @endif</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                          </div>
                        </div>
                    </div>

                    <div class="fade tab-pane" id="pills-todaytask" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                      <div class="card mb-0">
                        <div class="card-header d-flex">
                          <h6 class="mb-0">Rapports</h6><a href="#"><i class="me-2" data-feather="printer"></i>Imprimer</a>
                        </div>
                        <div class="card-body">

                            @if($rapports->isEmpty())

                                <div class="details-bookmark text-center">
                                    <div class="row" id="favouriteData"></div>
                                    <div class="no-favourite"><span>Vous n'aviez ajouté aucun rapport.</span></div>
                                </div>
                            @else
                                <div class="taskadd">
                                    <div class="table-responsive">
                                        <table class="table">
                                            @foreach ($rapports as $rapport)
                                            <tr>
                                            <td>
                                                <h6 class="task_title_0">{{ $rapport->title }}</h6>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">{{ $rapport->description }}</p>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            @endif
                        </div>
                      </div>
                    </div>

                    <div class="fade tab-pane" id="proofs" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                        <div class="card mb-0">
                          <div class="card-header d-flex">
                            <h6 class="mb-0">PREUVES</h6><a href="#"><i class="me-2" data-feather="printer"></i>Imprimer</a>
                          </div>
                          <div class="card-body">

                            <div class="gallery my-gallery card-body row" itemscope="">
                                @foreach ($proofs as $proof)
                                    <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope=""><a href="{{ asset('storage/' . $proof->file_name) }}" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="{{ asset('storage/' . $proof->file_name) }}" itemprop="thumbnail" alt="Image description"></a>
                                    <figcaption itemprop="caption description">Image caption  1</figcaption>
                                    </figure>
                                @endforeach


                              </div>
                              <!-- Root element of PhotoSwipe. Must have class pswp.-->
                              <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="pswp__bg"></div>
                                <div class="pswp__scroll-wrap">
                                  <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                  </div>
                                  <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                      <div class="pswp__counter"></div>
                                      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                      <button class="pswp__button pswp__button--share" title="Share"></button>
                                      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                      <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                          <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                      <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                                    <div class="pswp__caption">
                                      <div class="pswp__caption__center"></div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                          </div>
                        </div>
                    </div>

                    <div class="fade tab-pane" id="complement" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                        <div class="card mb-0">
                          <div class="card-header d-flex">
                            <h6 class="mb-0">Infos supplémentaires</h6><a href="#"><i class="me-2" data-feather="printer"></i>Imprimer</a>
                          </div>
                          <div class="card-body">

                            @if($complements->isEmpty())

                                <div class="details-bookmark text-center">
                                    <div class="row" id="favouriteData"></div>
                                    <div class="no-favourite"><span>Aucune infos ajouté.</span></div>
                                </div>
                            @else
                                <div class="taskadd">
                                    <div class="table-responsive">
                                        <table class="table">
                                            @foreach ($complements as $complement)
                                            <tr>
                                            <td>
                                                <h6 class="task_title_0">{{ $complement->title }}</h6>
                                                <p class="project_name_0">{{ $complement->type }}</p>
                                            </td>
                                            <td>
                                                <p class="task_desc_0">{{ $complement->content }}</p>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            @endif

                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 box-col-6">
            <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">task filter</a>
              <div class="md-sidebar-aside job-left-aside custom-scrollbar">
                <div class="email-left-aside">
                  <div class="card">
                    <div class="card-body">
                      <div class="email-app-sidebar left-bookmark task-sidebar">
                        <div class="media">
                          <div class="media-size-email"><img class="me-3 rounded-circle" width="35" height="35" src="{{ asset('assets/images/landing/profil.png')}}" alt=""></div>
                          <div class="media-body">
                            <h6 class="f-w-600">ADMINISTRATEUR</h6>
                            <p>#{{ Auth::user()->secret_code }}</p>
                          </div>
                        </div>
                        <ul class="nav main-menu" role="tablist">
                          <li class="nav-item" style="text-align: center;">
                            <a class="badge-light-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#form_status"><span style="display: block; margin: auto;">EDITER STATUS</span></a>
                            <a class="badge-light-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span style="display: block; margin: auto;">AJOUTER RAPPORT</span></a>
                          </li>
                          <li class="nav-item"><span class="main-title"> Details</span></li>
                          <li><a id="pills-created-tab" data-bs-toggle="pill" href="#pills-created" role="tab" aria-controls="pills-created" aria-selected="true"><span class="title"> Denonciation</span></a></li>
                          <li><a class="show" id="personal" data-bs-toggle="pill" href="#personal" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title">Infos personnelles</span></a></li>
                          <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill" href="#pills-todaytask" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title"> Voir les rapports</span></a></li>
                          <li><a class="show" id="complement" data-bs-toggle="pill" href="#complement" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title">   Ajouter infos <label class="badge badge-light-primary">1</label></span></a></li>
                          <li><a class="show" id="proofs" data-bs-toggle="pill" href="#proofs" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title"> Voir les preuves <label class="badge badge-light-primary">1</label></span></a></li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ajouter un rapport</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route('rapports.store')}}" class="needs-validation" enctype="multipart/form-data" method="POST" class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                @csrf

                <input type="hidden" name="denunciation_id" value="{{ $denunciation->id }}">

                <div class="row">

                  <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Titre</label>
                    <input class="form-control" id="task-title" required="" name="title" type="text" required="" autocomplete="off">
                  </div>


                  <div class="mb-3 col-md-12 my-0">
                    <label for="task-title">Description</label>
                    <textarea class="form-control" required="" name="description" required="" autocomplete="off">  </textarea>
                  </div>


                </div>
                <input id="index_var" type="hidden" value="6">
                <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Envoyer</button>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Annuler</button>
              </form>
            </div>
          </div>
        </div>
      </div>























      <div class="modal fade modal-bookmark" id="form_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editer le statut</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{route('edit.status')}}" class="needs-validation" method="POST" class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                @csrf

                <input type="hidden" name="denunciation_id" value="{{ $denunciation->id }}">

                <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Status</label>
                    <select class="js-example-basic-single" required="" name="status">
                      <option value="review">En révision</option>
                      <option value="processing">En cours</option>
                      <option value="solved">Résolu</option>
                      <option value="closed">Annulé</option>
                    </select>
                </div>
                <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Niveau de priorité</label>
                    <select class="js-example-basic-single" required="" name="level">
                      <option value="not-important">Pas très important</option>
                      <option value="important">Imortant</option>
                      <option value="very-important">Très important</option>
                    </select>
                </div>

                <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Enregistrer</button>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Annuler</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

@endsection
