<!DOCTYPE html>
<html lang="en">
<x-head-crm />

<body class="landing-page">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="landing-page">
        <!-- Page Body Start            -->
        <div class="landing-home" id="home">
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
                                    {{-- <li class="nav-item"><a class="nav-link" href="#home">ACCUEIL</a></li> --}}
                                    <li class="nav-item"><a class="nav-link" href="#about-us">A PROPOS DE NOUS</a></li>
                                    {{-- <li class="nav-item"><a class="nav-link" href="#demo">GUIDE</a></li> --}}
                                    {{-- <li class="nav-item"><a class="nav-link" href="#renseignements">RENSEIGNEMENTS</a></li> --}}
                                    <li class="nav-item"><a class="nav-link" href="http://localhost/SIGNAL_RIGHTS/public/denoncer_droits/#denoncer">DENONCER</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('denunciations.index')}}">SUIVRE MA DEMANDE</a></li>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="buy-btn "><a class="nav-link js-scroll"
                                  href="{{route('login')}}">CONNEXION</a></div>
                        </nav>
                    </header>
                </div>
                <div class="row justify-content-center" >
                    <div class="col-lg-8 col-sm-10" style="margin-top: 40px;">
                        <div class="content text-center">
                            <div>
                                <h6 class="content-title"><img class="arrow-decore"
                                        src="{{ asset('assets/images/landing/decore/arrow.svg')}}" alt=""><span
                                        class="sub-title">Bienvenue sur AMNESTY-BENIN </span></h6>
                                <h1 class="wow fadeIn">Plateforme de  <span>denonciation </span> des <br>
                                faits attentatoires aux <span>droits humains</span></h1>

                                <div class="row" style="margin-top: 80px;">
                                    <div class="col-7 d-flex align-items-center justify-content-center">
                                        <p class="mt-3 wow fadeIn text-center" style="text-align: justify !important; ">Dénoncez les faits et Suivez en temps réel l'évolution de vos dénonciations sur notre plateforme!</p>
                                    </div>
                                    <div class="col-5 d-flex align-items-center justify-content-center">
                                        <a class="btn btn-primary btn-lg purchase-btn" href="http://localhost/SIGNAL_RIGHTS/public/denoncer_droits/#denoncer">DENONCER MAINTENANT </a>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 30px;" class="col-xl-7 col-lg-8 col-md-10"> <br>
                        {{-- <img class="screen1 img-fluid"
                            src="{{ asset('assets/images/preview.png')}}" alt=""> --}}
                        </div>
                </div>
            </div>
        </div>

        <section class="section-space premium-wrap">
            <div class="container">
                <ul class="decoration">
                    <li class="flower-gif">
                        <div class="mesh-loader">
                            <div class="set-one">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                            <div class="set-two">
                                <div class="circle"></div>
                                <div class="circle"></div>
                            </div>
                        </div>
                    </li>
                    <li class="wavy-gif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 38">
                            <path fill="none" stroke-width="10" stroke-miterlimit="10"
                                d="M0,9C17.93,9,17.93,29,35.85,29S53.78,9,71.71,9s17.92,20,35.85,20S125.49,9,143.42,9s17.93,20,35.86,20S197.21,9,215.14,9,233.07,29,251,29">
                            </path>
                        </svg>
                    </li>
                </ul>
            </div>
        </section>

        <section class="section-space premium-wrap" id="about-us">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="landing-title">
                            <h2> <span class="gradient-1">Dénoncer </span> en tout anonymat</h2>
                            <p >Notre application est une plateforme simple et sécurisé pour vous permettre de dénoncer tout actes attentoires aux droits de l'homme. Et tout ceci dans l'anonymat et la sécurité de vos données. </p>
                        </div>
                        <div class="vector-image"> <img src="{{ asset('assets/images/landing/vectors/1.svg')}}" alt=""></div>
                    </div>
                    <div class="col-xxl-8">
                        <div class="row g-lg-5 g-3">
                            <div class="col-md-3 col-6">
                                <div class="benefit-box pink">
                                    <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#tag"></use>
                                    </svg>
                                    <h6 class="mb-0">Anonymat et Confidentialité</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="benefit-box purple">
                                    <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#ratings"></use>
                                    </svg>
                                    <h6 class="mb-0">Accessibilité</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="benefit-box red">
                                    <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#user_circle"></use>
                                    </svg>
                                    <h6 class="mb-0">Facilité d'utilisation</h6>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="benefit-box warning">
                                    <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#gear"></use>
                                    </svg>
                                    <h6 class="mb-0">Assistance Juridique</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-space feature-section pt-0">
            <ul class="decoration">
                <li class="round-gif">
                    <img src="{{ asset('assets/images/landing/gifs/5.gif')}}" alt="">
                </li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow pulse">
                        <div class="landing-title">
                            <h2>
                                En savoir plus sur nous</h2>
                            <p>Nous luttons contre l’injustice au Bénin et dans le monde.
                                Nous faisons partie d’un mouvement mondial qui se mobilisent pour la protection des droits humains. </p>
                        </div>
                        <div class="vector-image">
                             <img src="{{ asset('assets/images/landing/vectors/2.svg')}}" alt="vector women">
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature-1">
                            <div class="feature-icon">
                                <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#tag"></use>
                                    </svg>
                                {{-- <img src="{{ asset('assets/images/landing/feature-icon/1.svg')}}" alt=""> --}}
                            </div>
                            <h5>Qui sommes-nous ?</h5>
                            <p class="mb-0 f-light">Nous sommes une association nationale convaincue que lorsque les droits humains sont en jeu, chaque combat mérite une victoire. </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature-2">
                            <div class="feature-icon">
                                <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#ratings"></use>
                                    </svg>
                                {{-- <img src="{{ asset('assets/images/landing/feature-icon/2.svg')}}" alt=""> --}}
                            </div>
                            <h5>Que faisons-nous ?</h5>
                            <p class="mb-0 f-light">Nous faisons pression sur les autorités et décideurs par des campagnes de mobilisation pour changer la vie des victimes.</p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-sm-6">
                        <div class="feature-box common-card bg-feature-3">
                            <div class="feature-icon">
                                <svg>
                                        <use href="{{ asset('assets/svg/landing-icons.svg')}}#user_circle"></use>
                                    </svg>
                                {{-- <img src="{{ asset('assets/images/landing/feature-icon/3.svg')}}" alt=""> --}}
                            </div>
                            <h5>Participer</h5>
                            <p class="mb-0 f-light">Vous pouvez participer en dénoncant les faits attentoires aux droits de l'homme……chaque geste compte, passez à l’action maintenant.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>





        <section class="section-space customer-support" id="demo">
            <div class="container">
                <ul class="decoration d-sm-block d-none">
                    <li class="round-gif"><img src="{{ asset('assets/images/landing/gifs/5.gif')}}" alt=""></li>
                </ul>
                <div class="row justify-content-center">
                    <div class="col-sm-12">
                        <div class="landing-title text-center">

                            <h2> Un processus <span class="gradient-1"> simple et rapide</span> </h2>
                            <p >Notre plateforme de dénonciation offre un processus de signalement simple
                                et rapide, qui vous permet de faire vos dénonciations en quelques étapes faciles et rapides.</p>
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
                                        <h6 class="f-light mb-0 mt-2">Résolution de votre plainte</h6>
                                    </div><img class="outline-box"
                                        src="{{ asset('assets/images/landing/decore/arrow-style-4.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="customization-wrap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="landing-title text-start">
                            {{-- <h5 class="sub-title">Theme Customization</h5> --}}
                            <h2> <span class="gradient-3">Guide </span> de notre application</h2>
                            <p class="m-0">Testez notre application en direct : découvrez ses fonctionnalités en temps réel.</p>
                        </div>
                        <div class="customization-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">Processus de denonciation</button>
                                    </h2>



                                    <div class="accordion-collapse collapse" id="collapseOne"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                                        <div class="accordion-body f-light" style="text-align: justify;">Pour vous faciliter le processus, un diagramme d'images
                                            précède le formulaire pour montrer les différentes etapes du processus de traitement de votre dénonciation.
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">Formulaire de denonciation</button>
                                        </h2>
                                        <div class="accordion-collapse collapse show" id="collapseTwo"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body f-light" style="text-align: justify;">
                                                Notre formulaire de denonciation est répartie en 3 étapes : Informations personnelles -
                                                Détail de l'incident - Confidentialité et Preuves, ou il vous est demandé de facon concise et
                                                précise les informations de votre dénonciation.Il vous permet de faire votre denonciation très
                                                rapidement de facon très fluide. Après votre denonciation vous pourrez decider d'ajouter vos
                                                informations personnelles, pour le suivi de la dénonciation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="customization-img"> <img style="border: solid 1px black; border-radius: 10px; " class="img-fluid"
                                src="{{ asset('assets/images/request.png')}}" alt=""></div>
                    </div>
                </div>
                <br>
                <br>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="customization-img"> <img style="border: solid 1px black; border-radius: 10px; " class="img-fluid"
                                src="{{ asset('assets/images/preview.png')}}" alt=""></div>
                    </div>
                    <div class="col-lg-6">

                        <div class="customization-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">Tableau de bord</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapseOne"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body f-light" style="text-align: justify;">
                                            Une fois que votre dénonciation a été fait, vous serez redirigé sur votre
                                            tableau de bord doté d'une barre latérale gauche avec un menu, où vous pourrez suivre l'avancement de votre dénonciation
                                            en fonction des différents status.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">Barre latérale droite</button>
                                    </h2>
                                    <div class="accordion-collapse collapse show" id="collapseTwo"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body f-light" style="text-align: justify;">A ce niveau vous aurez différentes options
                                            comme la possibilité de laisser vos informations personnelles, d'ajouter des informations
                                            supplémentaires à votre dénonciation et d'annuler votre denonciation en précisant la cause.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">Options Détails</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapseThree" style="text-align: justify;"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body f-light">
                                            A ce niveau vous aviez différentes options telles que voir les preuves de
                                            votre denonciation, les informations supplémentaires et surtout de pouvoir consulter les rapports
                                            redigé par les administrateurs sur votre dénonciation afin de suivre l'enquete.
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <br>
                <br>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="customization-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">Chat de discussion</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapseOne"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body f-light">
                                            Notre application est doté d'un système de chat intégré pour vous permettre
                                             de rester en contact avec notre equipe pour vous permettre de suivre votre
                                             denonciation, et tout ceci est préservé par votre anonymat.
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="customization-img"> <img style="border: solid 1px black; border-radius: 10px; " class="img-fluid"
                                src="{{ asset('assets/images/chat.png')}}" alt=""></div>
                    </div>

                </div>
            </div>
        </section>



        <section class="section-space framework-section" id="renseignements">
            <div class="container">
                <ul class="decoration">
                    <li class="loader-line-gif"><img src="{{ asset('assets/images/landing/gifs/6.gif')}}" alt=""></li>
                    <li class="wavy-gif">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 38">
                            <path fill="none" stroke-width="10" stroke-miterlimit="10"
                                d="M0,9C17.93,9,17.93,29,35.85,29S53.78,9,71.71,9s17.92,20,35.85,20S125.49,9,143.42,9s17.93,20,35.86,20S197.21,9,215.14,9,233.07,29,251,29">
                            </path>
                        </svg>

                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-title">
                            {{-- <h5 class="sub-title">10+ frameworks available</h5> --}}
                            <h2>Quelques  <span class="gradient-7">droits humains</span></h2>

                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="html" role="tabpanel" aria-labelledby="html-tab">
                                <div class="row g-xxl-5 g-4">
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique.png')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à l'éducation</h5>
                                                <p class="f-light">
                                                    Le droit à l'éducation pour tous, garanti par la Déclaration universelle des droits de l'homme, est essentiel pour le développement personnel et la participation citoyenne.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique1.png')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à la vie privée</h5>
                                                <p class="f-light">
                                                    La protection de la vie privée est un droit fondamental garanti par
                                                    les lois internationales et nationales sur les droits humains, qui doit
                                                    être respecté partout.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique3.jpg')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à l'égalité</h5>
                                                <p class="f-light">
                                                    Le principe d'égalité devant la loi, sans distinction de race, de genre, d'orientation sexuelle ou d'autres critères, est un élément clé des lois sur les droits humains..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique4.jpg')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à la liberté d'expression</h5>
                                                <p class="f-light">La liberté d'expression, y compris la liberté de la presse
                                                    et la liberté d'opinion, est un droit fondamental qui doit être protégé dans toutes les sociétés démocratiques.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique.png')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à la santé</h5>
                                                <p class="f-light">Le droit à la santé est un droit universel garanti par les lois
                                                    sur les droits humains, qui nécessite des politiques et des actions pour
                                                    garantir l'accès aux soins de santé pour tous.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique1.png')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit au travail</h5>
                                                <p class="f-light">
                                                    Le droit au travail, y compris des conditions de travail justes et
                                                    équitables, est un droit fondamental garanti par les lois sur les droits
                                                    humains.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique3.jpg')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à la non-discrimination</h5>
                                                <p class="f-light">
                                                    Le principe de non-discrimination est une norme juridique universelle qui interdit la discrimination, qu'elle soit fondée sur la race, le genre, l'âge, le handicap ou tout autre critère.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="framework-box">
                                            <div class="frame-icon"> <img
                                                    src="{{ asset('assets/images/juridique4.jpg')}}" alt=""></div>
                                            <div class="frame-details">
                                                <h5>Droit à la liberté de religion</h5>
                                                <p class="f-light">
                                                    La liberté de religion ou de conviction est un droit fondamental qui permet
                                                    à chacun de pratiquer sa religion ou sa conviction de manière libre et sans
                                                    ingérence.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bottom-section-grad" id="faq">

            <section class="faq-section section-space" id="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="landing-title text-center">
                                {{-- <h5 class="sub-title">Notre FAQ</h5> --}}
                                <h2>Notre <span class="gradient-11">FAQ ? </span> </h2>
                                <p>Questions fréquentes concernant l'utilisation de notre plateforme
                                    to serve you.</p>
                            </div>
                            <div class="vector-image"> <img src="{{ asset('assets/images/landing/vectors/4.svg')}}"
                                    alt="vector women"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="accordion" id="faqaccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">Comment fonctionne l'anonymat sur la plateforme de dénonciation des droits humains ?</button>
                                    </h2>
                                    <div class="accordion-collapse collapse show" id="faqOne" aria-labelledby="faq1"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body f-light">
                                            Vous pouvez dénoncer les violations des droits humains de manière anonyme sans renseigner votre
                                            identité. Mais pour des raisons de suivi nous demandons de renseigner vos informations personnelles
                                            qui restent optionnelles, pour des questions de suivi de votre denonciation.
                                            Vos données ne sont connus que de notre equipe et ne seront pas divulgués sans
                                            votre consentement                                       </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false"
                                            aria-controls="faqTwo">Quels types de violations des droits humains puis-je signaler sur la plateforme ?</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="faqTwo" aria-labelledby="faq2"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body f-light">
                                            Vous etes en mesure de signaler toutes les violations portant
                                            atteinte aux droits humains, telles que abus de pouvoir, les violences
                                            physiques et psychologiques, les discriminations et les atteintes aux
                                            libertés fondamentales.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false"
                                            aria-controls="faqThree">Comment puis-je suivre l'état de mon signalement ?</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="faqThree" aria-labelledby="faq3"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body f-light">
                                            La plateforme vous permet aux utilisateurs de suivre l'état de vos
                                            denonciation en temps réel jusqu'à la cloture. Vous etes notifié à chaque étape de l'enquete
                                             par des rapports directement sur notre plateforme ou par mail.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false"
                                            aria-controls="faqFour">Comment puis-je contacter l'équipe de la plateforme de dénonciation des droits humains ?</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="faqFour" aria-labelledby="faq4"
                                        data-bs-parent="#faqaccordion">
                                        La plateforme dispose d'un système de chat intégré pour vous permettre
                                        d'etre en contact avec notre equipe.

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faq5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false"
                                            aria-controls="faqFive">Comment puis-je savoir que ma dénonciation est prise en compte et qu'elle sera traitée de manière appropriée ?
                                            </button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="faqFive" aria-labelledby="faq5"
                                        data-bs-parent="#faqaccordion">
                                        <div class="accordion-body f-light">
                                            Notre plateforme dispose d'un système de statut pour vous permettre de
                                            suivre l'evolution de votre dénonciation. De plus, vous etes notifié à chaque étape de l'enquete
                                             par des rapports directement sur notre plateforme ou par mail.
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
