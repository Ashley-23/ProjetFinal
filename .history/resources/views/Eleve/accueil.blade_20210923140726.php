@extends('Eleve.default')

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
                            <h5 class="item-title">{{$confirmeconnexioneleve->nomEleve}} {{$confirmeconnexioneleve->prenomEleve}} </h5>
                            <span>Admin</span>
                        </div>
                        <div class="admin-img">
                            <img src="{{asset('img/figure/admin.jpg')}}" alt="Admin">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title">Steven Zone</h6>
                        </div>
                        <div class="item-content">
                            <ul class="settings-list">
                                <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                <li><a href="login.html"><i class="flaticon-turn-off"></i>Log Out</a></li>
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
                                    <h3>About Me</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student-info">
                                <div class="table-responsive info-table">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">Jessia Rose</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">Female</td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium">Fahim Rahman</td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="font-medium text-dark-medium">Jannatul Kazi</td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium">07.08.2006</td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium">Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Father Occupation:</td>
                                                <td class="font-medium text-dark-medium">Graphic Designer</td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail:</td>
                                                <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="font-medium text-dark-medium">05.01.2019</td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium">2</td>
                                            </tr>
                                            <tr>
                                                <td>Section:</td>
                                                <td class="font-medium text-dark-medium">Pink</td>
                                            </tr>
                                            <tr>
                                                <td>Roll:</td>
                                                <td class="font-medium text-dark-medium">10005</td>
                                            </tr>
                                            <tr>
                                                <td>Adress:</td>
                                                <td class="font-medium text-dark-medium">House #10, Road #6,
                                                    Australia</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">+ 88 9856418</td>
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
                                            <div class="item-title">Notification</div>
                                            <div class="item-number"><span class="counter" data-num="12">12</span></div>
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
                                                        <th>
                                                            <div class="form-check">
                                                                <input type="checkbox"
                                                                    class="form-check-input checkAll">
                                                                <label class="form-check-label">ID</label>
                                                            </div>
                                                        </th>
                                                        <th>Exam Name</th>
                                                        <th>Subject</th>
                                                        <th>Grade</th>
                                                        <th>Percent</th>
                                                        <th>Date</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label">#0021</label>
                                                            </div>
                                                        </td>
                                                        <td>Class Test</td>
                                                        <td>English</td>
                                                        <td>A</td>
                                                        <td>99.00 > 100</td>
                                                        <td>22/02/2019</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle"
                                                                    data-toggle="dropdown" aria-expanded="false">
                                                                    <span
                                                                        class="flaticon-more-button-of-three-dots"></span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#"><i
                                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                   
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