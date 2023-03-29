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
                          <h5 class="mb-0">Votre dénonciation</h5><a href="#"><i class="me-2" data-feather="printer"></i><span class="badge badge-success">En attente</span></a>
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
                                    <p class="task_desc_0">{{$denunciation[0]->title}}</p>
                                  </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">CATEGORIE</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0">{{$denunciation[0]->type}}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">LIEU & DATE</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0"><span>{{$denunciation[0]->place}} | {{$denunciation[0]->date}}</span></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">DESCRIPTION</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0" style="text-align: justify;">{{$denunciation[0]->description}}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                      <h6 class="task_title_0">CODE DE LA DEMANDE</h6>
                                      {{-- <p class="project_name_0">General</p> --}}
                                    </td>
                                    <td>
                                      <p class="task_desc_0">{{ Auth::user()->generate_code}}</p>
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
                          <div class="details-bookmark text-center">
                            <div class="row" id="favouriteData"></div>
                            <div class="no-favourite"><span>Aucun rapport aujourd'hui.</span></div>
                          </div>
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
                            <h6 class="f-w-600">ANONYME</h6>
                            <p>#{{ Auth::user()->secret_code }}</p>
                          </div>
                        </div>
                        <ul class="nav main-menu" role="tablist">
                          <li class="nav-item" style="text-align: center;">
                            <a href="{{route('denunciations.edit', ['denunciation' => $denunciation[0]->id ])}}" class="badge-light-primary btn-block btn-mail w-100"><span style="display: block; margin: auto;">MODIFIER</span></a>
                            <a class="badge-light-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span style="display: block; margin: auto;">ANNULER</span></a>
                          </li>
                          <li class="nav-item"><span class="main-title"> Details</span></li>
                          <li><a id="pills-created-tab" data-bs-toggle="pill" href="#pills-created" role="tab" aria-controls="pills-created" aria-selected="true"><span class="title"> Denonciation</span></a></li>
                          <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill" href="#pills-todaytask" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title"> Rapports</span></a></li>

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
              <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                <div class="row">
                  <div class="mb-3 mt-0 col-md-12">
                    <label for="task-title">Task Title</label>
                    <input class="form-control" id="task-title" type="text" required="" autocomplete="off">
                  </div>
                  <div class="mb-3 mt-0 col-md-12">
                    <label for="sub-task">Sub task</label>
                    <input class="form-control" id="sub-task" type="text" required="" autocomplete="off">
                  </div>
                  <div class="mb-3 mt-0 col-md-12">
                    <div class="d-flex date-details">
                      <div class="d-inline-block">
                        <label class="d-block mb-0" for="chk-ani">
                          <input class="checkbox_animated" id="chk-ani" type="checkbox">Remind on
                        </label>
                      </div>
                      <div class="d-inline-block">
                        <input class="datepicker-here form-control" type="text" data-language="en" placeholder="Date">
                      </div>
                      <div class="d-inline-block">
                        <select class="form-control">
                          <option>7:00 am</option>
                          <option>7:30 am</option>
                          <option>8:00 am</option>
                          <option>8:30 am</option>
                          <option>9:00 am</option>
                          <option>9:30 am</option>
                          <option>10:00 am</option>
                          <option>10:30 am</option>
                          <option>11:00 am</option>
                          <option>11:30 am</option>
                          <option>12:00 pm</option>
                          <option>12:30 pm</option>
                          <option>1:00 pm</option>
                          <option>2:00 pm</option>
                          <option>3:00 pm</option>
                          <option>4:00 pm</option>
                          <option>5:00 pm</option>
                          <option>6:00 pm</option>
                        </select>
                      </div>
                      <div class="d-inline-block">
                        <label class="d-block mb-0" for="chk-ani1">
                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">Notification
                        </label>
                      </div>
                      <div class="d-inline-block">
                        <label class="d-block mb-0" for="chk-ani2">
                          <input class="checkbox_animated" id="chk-ani2" type="checkbox">Mail
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 mt-0 col-md-6">
                    <select class="js-example-basic-single">
                      <option value="task">My Task</option>
                    </select>
                  </div>
                  <div class="mb-3 mt-0 col-md-6">
                    <select class="js-example-disabled-results" id="bm-collection">
                      <option value="general">General</option>
                    </select>
                  </div>
                  <div class="mb-3 col-md-12 my-0">
                    <textarea class="form-control" required="" autocomplete="off">  </textarea>
                  </div>
                </div>
                <input id="index_var" type="hidden" value="6">
                <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Save</button>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>

@endsection
