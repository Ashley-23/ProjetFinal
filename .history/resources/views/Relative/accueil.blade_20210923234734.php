@extends('Relative.default')

@section('content')
    










<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light">
        <div class="nav-bar-header-one">
            <div class="header-logo">
                <h3>GESTION|ECOLE</h3>
            </div>
            <div class="toggle-button sidebar-toggle">
                <button type="button" class="item-link">
                    <span class="btn-icon-wrap">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="d-md-none mobile-nav-bar">
            <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
            <ul class="navbar-nav">
                {{-- <li class="navbar-item header-search-bar">
                    <div class="input-group stylish-input-group">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="flaticon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control" placeholder="Find Something . . .">
                    </div>
                </li> --}}
            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item dropdown header-admin">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        <div class="admin-title">
                            <h5 class="item-title">{{$confirmeconnexionparent->nomRelative}} {{$confirmeconnexionparent->prenomRelative}} </h5>
                            <span>Eleve</span>
                        </div>
                        <div class="admin-img">
                            <img src="{{asset('img/figure/admin.jpg')}}" alt="Admin">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">{{$confirmeconnexionparent->nomRelative}} {{$confirmeconnexionparent->prenomRelative}}</h6>
                        </div>
                        <div class="item-content">
                            <ul class="settings-list">
                                <li><a href="{{route('deconnexion')}}"><i class="flaticon-turn-off"></i>Deconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                    </div>
            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
           <div class="mobile-sidebar-header d-md-none">
                <div class="header-logo">
                    <a href="index-2.html"><img src="img/logo1.png" alt="logo"></a>
                </div>
           </div>
            <div class="sidebar-menu-content">
                <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                    <li class="nav-item ">
                        <a href="#" class="nav-link menu-active "><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Informations sur un élève</h3>
                <ul>
                    <li>
                        Home
                    </li>
                    <li>Eleves</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <div class="row">
                <!-- Student Info Area Start Here -->
                <div class="col-4-xxxl col-12">
                    <div class="card dashboard-card-ten">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Mes informations</h3>
                                </div>
                            </div>
                            <div class="student-info">
                                <div class="table-responsive info-table">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Nom :</td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->nomRelative}}</td>
                                            </tr>
                                            <tr>
                                                <td>Prenom(s):</td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->prenomRelative}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nom d'utilisateur :</td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->login}}</td>
                                            </tr>
                                            <tr>
                                                <td>Date de naissance</td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->dateNaissRelative}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail : </td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->emailRelative}}</td>
                                            </tr>
                                            <tr>
                                                <td>Telephone :</td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->telephoneRelative}}</td>
                                            </tr>
                                            <tr>
                                                <td>Adresse : </td>
                                                <td class="font-medium text-dark-medium">{{$confirmeconnexionparent->adresseRelative}}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Info Area End Here -->
                <div class="col-8-xxxl col-12">
                    <div class="row">
                        <!-- Summery Area Start Here -->
                        <div class="col-lg-4">
                            <div class="dashboard-summery-one">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="item-icon bg-light-magenta">
                                            <i class="flaticon-shopping-list text-magenta"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-content">
                                            <div class="item-title">Notes</div>
                                            {{-- <div class="item-number"><span class="counter" data-num="{{$notecompte}}">{{$notecompte}}</span></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-summery-one">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="item-icon bg-light-blue">
                                            <i class="flaticon-calendar text-blue"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-content">
                                            <div class="item-title">Events</div>
                                            <div class="item-number"><span class="counter" data-num="06">06</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-summery-one">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="item-icon bg-light-yellow">
                                            <i class="flaticon-percentage-discount text-orange"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="item-content">
                                            <div class="item-title">Attendance</div>
                                            <div class="item-number"><span class="counter" data-num="94">94</span><span>%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Summery Area End Here -->
                        <!-- Exam Result Area Start Here -->
                        <div class="col-lg-12">
                            <div class="card dashboard-card-eleven">
                                <div class="card-body">
                                    <div class="heading-layout1">
                                        <div class="item-title">
                                            <h3>Notes</h3>
                                        </div>
                                    </div>
                                    <div class="table-box-wrap">
                                        <div class="table-responsive result-table-box">
                                            <table class="table display data-table text-nowrap">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>
                                                            <div class="form-check">
                                                                <input type="checkbox"
                                                                    class="form-check-input checkAll">
                                                                <label class="form-check-label">ID</label>
                                                            </div>
                                                        </th> --}}
                                                        <th>Nom Eleve</th>
                                                        <th>Prenom Eleve</th>
                                                        <th>Classe</th>
                                                        <th>Matiere</th>
                                                        <th>Interrogation</th>
                                                        <th>Devoir</th>
                                                        <th>Composition</th>
                                                        <th>Moyenne de classe</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($notekids as $notekids)
                                                         <tr>
                                                            <td> {{$notekids->nomEleve}} </td>
                                                            <td> {{$notekids->prenomEleve}} </td>
                                                            <td> {{$notekids->nomClasse}} {{$notekids->typeClasse}} </td>
                                                            <td> {{$notekids->nomMatiere}} </td>
                                                            <td> {{$notekids->note1}} </td>
                                                            <td> {{$notekids->note2}} </td>
                                                            <td> {{$notekids->note3}} </td>
                                                            <td> {{$notekids->moyclasse}} </td>
                                                        {{-- <td> {{$elevenote->note1}} </td> --}}
                                                        <td>
                                                          
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <span> Vous n'avez aucune note </span>
                                                    @endforelse
                                                   
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Exam Result Area End Here -->
                    </div>
                </div>
            </div>











@endsection