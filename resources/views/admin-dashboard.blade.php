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
                                        <th>Categorie</th>
                                        <th>Lieu</th>
                                        <th>Date</th>
                                        <th>Code demande</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td><span class="badge rounded-pill badge-light-primary">System Architect</span>
                                        </td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td><span class="badge rounded-pill badge-light-secondary">Accountant</span>
                                        </td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td><span class="badge rounded-pill badge-light-primary">Junior Technical
                                                Author</span></td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td><span class="badge rounded-pill badge-light-primary">Senior Javascript
                                                Developer</span></td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td><span class="badge rounded-pill badge-light-secondary">Accountant</span>
                                        </td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td><span class="badge rounded-pill badge-light-info">Integration
                                                Specialist</span></td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td><span class="badge rounded-pill badge-light-primary">Sales Assistant</span>
                                        </td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td><span class="badge rounded-pill badge-light-info">Integration
                                                Specialist</span></td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td><span class="badge rounded-pill badge-light-danger">Javascript
                                                Developer</span></td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td><span class="badge rounded-pill badge-light-success">Software
                                                Engineer</span></td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td><span class="badge rounded-pill badge-light-primary">Office Manager</span>
                                        </td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td><span class="badge rounded-pill badge-light-primary">Support Lead</span>
                                        </td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
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
