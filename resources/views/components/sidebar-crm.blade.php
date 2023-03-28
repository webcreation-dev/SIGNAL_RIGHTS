<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/landing/amnesty.png')}}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/landing/amnesty.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>DENONCIATIONS</h6>
                        </div>

                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary">1</label><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#fill-home"></use>
                            </svg><span>Administrateur </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('denunciations.index')}}">Voir les denonciations</a></li>
                            <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                            {{-- <li><a href="dashboard-03.html">Online course</a></li>
                            <li><a href="dashboard-04.html">Crypto</a></li>
                            <li><a href="dashboard-05.html">Social</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
