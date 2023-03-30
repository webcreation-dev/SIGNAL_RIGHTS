<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{route('welcome')}}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/landing/amnesty.png')}}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/landing/amnesty.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{route('welcome')}}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{route('welcome')}}"><img class="img-fluid"
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
                            <h6>TABLEAU DE BORD</h6>
                        </div>

                    </li>

                    @can('user')

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                        class="sidebar-link sidebar-title link-nav active" href="{{route('denunciations.index')}}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg')}}#stroke-home"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg')}}#fill-home"></use>
                        </svg>
                        <span>Denonciation</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a></li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                        class="sidebar-link sidebar-title link-nav active" href="{{route('chat.discussion')}}">
                        <i class="icofont icofont-ui-chat" style="margin-right: 10px;"></i>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-task"> </use>
                        </svg><span>Discussions</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a></li>
                    @endcan

                    @can('admin')
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#fill-home"></use>
                            </svg><span>Denonciations </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('get.admin.dashboard')}}">Voir tout</a></li>
                            <li><a href="{{route('get.denunciation.by.status', ['status' => 'sent' ])}}">En
                                    attente<label class="badge badge-light-primary">{{
                                        App\Models\Denunciations::getNumberDenunciations('sent')}}</label></a></li>
                            <li><a href="{{route('get.denunciation.by.status', ['status' => 'viewed' ])}}">Non lu<label
                                        class="badge badge-light-primary">{{
                                        App\Models\Denunciations::getNumberDenunciations('viewed')}}</label></a></li>
                        </ul>




                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav active" href="{{route('emails.index')}}">
                            <i class="icon-user" style="margin-right: 10px;"></i>
                           <span>Collaborateurs</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a></li>

                        <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav active" href="{{route('statistiques')}}">
                            <i class="icofont icofont-pie-chart" style="margin-right: 10px;"></i>
                            <svg class="fill-icon">
                                <use href="../assets/svg/icon-sprite.svg#fill-task"> </use>
                            </svg><span>Statistiques</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a></li>


                    @endcan

                    @can('manager')
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg')}}#fill-home"></use>
                            </svg><span>Denociations</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('get.admin.dashboard')}}">Voir tout</a></li>
                            <li><a href="{{route('get.denunciation.by.status', ['status' => 'sent' ])}}">En
                                    attente<label class="badge badge-light-primary">{{
                                        App\Models\Denunciations::getNumberDenunciations('sent')}}</label></a></li>
                            <li><a href="{{route('get.denunciation.by.status', ['status' => 'viewed' ])}}">Non lu<label
                                        class="badge badge-light-primary">{{
                                        App\Models\Denunciations::getNumberDenunciations('viewed')}}</label></a></li>
                        </ul>
                    </li>
                    @endcan
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
