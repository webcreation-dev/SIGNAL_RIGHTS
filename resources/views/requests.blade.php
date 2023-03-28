<!DOCTYPE html>
<html lang="en">
<x-head-crm />

<body class="landing-page">

    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"> <span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page">
        <!-- Page Body Start            -->
        <div class="landing-home">
            <div class="container-fluid">
                <div class="sticky-header">
                    <header>
                        <nav style="background: #262128;"
                            class="navbar navbar-b navbar-dark navbar-trans navbar-expand-xl fixed-top nav-padding"
                            id="sidebar-menu"><a class="navbar-brand p-0" href="#"><img class="img-fluid"
                                    src="{{ asset('assets/images/landing/logo.png')}}" alt=""></a>
                            <button class="navbar-toggler navabr_btn-set custom_nav" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault"
                                aria-expanded="false"
                                aria-label="Toggle navigation"><span></span><span></span><span></span></button>
                            <div class="navbar-collapse justify-content-center collapse hidenav" id="navbarDefault">
                                <ul class="navbar-nav navbar_nav_modify" id="scroll-spy">
                                    <li class="nav-item"><a class="nav-link" href="#layout">ACCUEIL</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#frameworks">RENSEIGNEMENTS</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('denunciations.create')}}">DENONCER</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('get.anonymous.login')}}">SUIVRE MA DEMANDE</a></li>
                                    {{-- <li class="nav-item"><a class="nav-link" href="#documentation">Documentation</a> --}}
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="buy-btn rounded-pill"><a class="nav-link js-scroll"
                                  href="https://1.envato.market/3GVzd" target="_blank">CONNEXION</a></div>
                        </nav>
                    </header>
                </div>
                <div style="padding-top: 150px;">
                </div>
            </div>
        </div>

        <section class="section-space customer-support">
            <div class="container">
                <ul class="decoration d-sm-block d-none">
                    <li class="round-gif"><img src="{{ asset('assets/images/landing/gifs/5.gif')}}" alt=""></li>
                </ul>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="landing-title text-justify">
                            {{-- <div class="rating-title gap-2"><img class="decore-1"
                                    src="{{ asset('assets/images/landing/decore/arrow-3.svg')}}" alt="">
                                <ul class="d-flex ratings gap-1">
                                    <li> <i class="fa fa-star"></i></li>
                                    <li> <i class="fa fa-star"></i></li>
                                    <li> <i class="fa fa-star"></i></li>
                                    <li> <i class="fa fa-star"></i></li>
                                    <li> <i class="fa fa-star"></i></li>
                                </ul>
                                <h6 class="rating-title mb-0">4.5 <span class="f-light">(110 rating)</span></h6>
                            </div> --}}
                            <h2> <span class="gradient-1">Signalement anonyme </span> de violations des droits</h2>
                            <p>Aidez-nous à lutter contre les abus et à protéger les droits fondamentaux en signalant de
                                manière confidentielle les cas de violations des droits humains.</p>
                        </div>
                    </div>
                    <div class="col-xxl-10">
                        <div class="row customer-wrap">
                            <div class="col-md-3 col-6">
                                <div class="customer-wrapper">
                                    <div class="customer-box"> <img
                                            src="{{ asset('assets/images/landing/customers/alert.png')}}" alt="">
                                        <h6 class="f-light mb-0 mt-2">Signalement de la plainte </h6>
                                    </div><img class="outline-box"
                                        src="{{ asset('assets/images/landing/decore/arrow-style-1.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="customer-wrapper">
                                    <div class="customer-box"> <img
                                            src="{{ asset('assets/images/landing/customers/treatment.png')}}" alt="">
                                        <h6 class="f-light mb-0 mt-2">Traitement de votre plainte</h6>
                                    </div><img class="outline-box"
                                        src="{{ asset('assets/images/landing/decore/arrow-style-2.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="customer-wrapper">
                                    <div class="customer-box"> <img
                                            src="{{ asset('assets/images/landing/customers/suivi.png')}}" alt="">
                                        <h6 class="f-light mb-0 mt-2">Suivi de votre plainte</h6>
                                    </div><img class="outline-box"
                                        src="{{ asset('assets/images/landing/decore/arrow-style-3.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="customer-wrapper">
                                    <div class="customer-box"> <img
                                            src="{{ asset('assets/images/landing/customers/confidentiality.png')}}" alt="">
                                        <h6 class="f-light mb-0 mt-2">Confidentialité des plaignants</h6>
                                    </div><img class="outline-box"
                                        src="{{ asset('assets/images/landing/decore/arrow-style-4.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-10 pt-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Signaler une violation de droits humains</h5>
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

                                            <form action="{{route('denunciations.store')}}" class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST">
                                                @csrf

                                                <div class="setup-content" id="step-1">

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <label class="form-label pull-left">Titre de la
                                                                    dénonciation</label>
                                                                <input class="form-control" name="title"
                                                                    id="exampleFormControlInput1" type="text" required="required"
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
                                                                <select name="type" class="js-example-basic-single  col-sm-12"
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
                                                                <input class="form-control" id="validationDefault03" required="required"
                                                                    type="text" name="place" placeholder="Parakou">
                                                                    <div class="valid-feedback pull-left">Validé !</div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label pull-left" for="exampleFormControlTextarea4">Date</label>
                                                                    <input required class="form-control digits" name="date" type="date" value="2018-01-01">
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
                                                                    id="exampleFormControlTextarea4"
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
                                                                        aria-describedby="inputGroupPrepend2"
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
                                                                <input class="form-control" name="file_name" type="file" required="required" >
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

                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>

    <x-footer-landing />
    <x-footer-crm />


</body>

</html>
