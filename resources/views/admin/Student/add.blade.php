@extends('admin.default')

@section('content')
    
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="http://127.0.0.1:8000/siteaccueil">
                      <h2>   Gestion|Ecole </h2> 
                        
                    </a>
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
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                   


                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-envelope"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                            <span>5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span> 
                                                <span class="item-time">18:30</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span> 
                                                <span class="item-time">10:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span> 
                                                <span class="item-time">02:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span> 
                                                <span class="item-time">12:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                            <span>8</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     {{-- <li class="navbar-item dropdown header-language">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" 
                        data-toggle="dropdown" aria-expanded="false"><i class="fas fa-globe-americas"></i>EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Spanish</a>
                            <a class="dropdown-item" href="#">Franchis</a>
                            <a class="dropdown-item" href="#">Chiness</a>
                        </div>
                    </li> --}}





                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div  class="admin-title" >
                                {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
        
                                    <span> Administrateur </span>
                            </div>       
                            
        

                            
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">
                                    {{ Auth::user()->nom }}
                                    {{ Auth::user()->prenom }}
                                </h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                    <li><a href="{{route('vue_deconnexion')}}"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>






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
                        <li class="nav-item">
                            <a href="{{route('vue_admin_accueil')}}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            {{-- <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link"><i class="fas fa-angle-right"></i>Admins</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index3.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Eleves</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index4.html" class="nav-link"><i class="fas fa-angle-right"></i>Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index5.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Professeurs</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Eleve</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_allstudent')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les élèves </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_detailstudent')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details sur les élèves </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addstudent')}}" class="nav-link menu-active"><i
                                            class="fas fa-angle-right"></i>Ajouter Eleve</a>
                                </li>
                                <li class="nav-item">
                                    <a href="student-promotion.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Student Promotion</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Professeurs</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_allteacher')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les professeurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_detailteacher')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details sur les professeurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addteacher')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter un 
                                        professeur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_allparent')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les 
                                        Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_detailparent')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details sur les parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addparent')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter un 
                                        Parent</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.html" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.html" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Book</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Comptes</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_fraisscolaire')}}" class="nav-link"><i class="fas fa-angle-right"></i>Frais 
                                        Scolaire</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_depense')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Dépenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addfrais')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter
                                        frais</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Classes</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_allclass')}}" class="nav-link"><i class="fas fa-angle-right"></i>Toutes les
                                        classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addclass')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter une nouvelle 
                                        classe</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vue_admin_subject')}}" class="nav-link"><i
                                    class="flaticon-open-book"></i><span>Matières</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vue_admin_classroutine')}}" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vue_admin_presence')}}" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Présences</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Examens</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_horaire')}}" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Horaire</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_mark')}}" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Notes</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="transport.html" class="nav-link"><i
                                    class="flaticon-bus-side-view"></i><span>Transport</span></a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="hostel.html" class="nav-link"><i class="flaticon-bed"></i><span>Hostel</span></a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{route('vue_admin_notice')}}" class="nav-link"><i
                                    class="flaticon-script"></i><span>Notification</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vue_admin_message')}}" class="nav-link"><i
                                    class="flaticon-chat"></i><span>Messages</span></a>
                        </li>
                        {{-- <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="notification-alart.html" class="nav-link"><i class="fas fa-angle-right"></i>Alart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="button.html" class="nav-link"><i class="fas fa-angle-right"></i>Button</a>
                                </li>
                                <li class="nav-item">
                                    <a href="grid.html" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="modal.html" class="nav-link"><i class="fas fa-angle-right"></i>Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="progress-bar.html" class="nav-link"><i class="fas fa-angle-right"></i>Progress Bar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-tab.html" class="nav-link"><i class="fas fa-angle-right"></i>Tab</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-widget.html" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Widget</a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="map.html" class="nav-link"><i
                                    class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{route('vue_admin_account')}}" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Compte</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">






                    <!-- Breadcubs Area Start Here -->
                    <div class="breadcrumbs-area">
                        <h3>Students</h3>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>Student Admit Form</li>
                        </ul>
                    </div>
                    <!-- Breadcubs Area End Here -->
                    <!-- Admit Form Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Add New Students</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>
    
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" onClick="history.go(0)" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel" onClick="history.go(0)"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <form class="new-added-form">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Nom </label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Prénom(s)</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Genre</label>
                                        <select class="select2">
                                            {{-- <option value="">Please Select Gender *</option> --}}
                                            <option value="m">Masculin</option>
                                            <option value="f">Feminin</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date de naissance</label>
                                        <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                                            data-position='bottom right'>
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Login</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Blood Group *</label>
                                        <select class="select2">
                                            <option value="">Please Select Group *</option>
                                            <option value="1">A+</option>
                                            <option value="2">A-</option>
                                            <option value="3">B+</option>
                                            <option value="3">B-</option>
                                            <option value="3">O+</option>
                                            <option value="3">O-</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Religion *</label>
                                        <select class="select2">
                                            <option value="">Please Select Religion *</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Hindu</option>
                                            <option value="3">Christian</option>
                                            <option value="3">Buddish</option>
                                            <option value="3">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Classe</label>
                                        <div class="classes" id="choixclasses">
                                            <select class="select2" onchange="chargertype()">
                                                <option value="s">selectionnez une classe</option>
                                                <option value="sixieme">sixieme</option>
                                                <option value="cinquieme">cinquieme</option>
                                                <option value="quatrieme">quatrieme</option>
                                                <option value="troisieme">troisieme</option>
                                                <option value="seconde">seconde</option>
                                                <option value="premiere">premiere</option>
                                                <option value="terminale">terminale</option>
                                            </select>

                                            
                                                <div class="typeclasse" id="typeclasse">       
                                                    {{-- Pour l'affichage des options selon la classe selectionné  --}}


                                                    &nbsp;
                                                    {{-- <label>Section *</label>
                                                    <select class="select2">
                                                        <option value="">Please Select Section *</option>
                                                        <option value="1">Pink</option>
                                                        <option value="2">Blue</option>
                                                        <option value="3">Bird</option>
                                                        <option value="3">Rose</option>
                                                        <option value="3">Red</option>
                                                    </select> --}}
                                                </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Adresse</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Telephone</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                    {{-- <div class="col-lg-6 col-12 form-group">
                                        <label>Short BIO</label>
                                        <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="9"></textarea>
                                    </div> --}}
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" class="form-control-file">
                                    </div>
                                    <div class="col-12 form-group mg-t-8">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Admit Form Area End Here -->


















<script type="text/javascript">
    function chargertype()
    {
        // 
        var tab_type=" ";
        var nb_type=0;
        var chaine_liste=" "; 
        var classe_selectionne=document.getElementById('choixclasses').value;

        if (classe_selectionne!="s") {
            tab_type= retour_type(classe_selectionne).split('|');

            nb_type=tab_type.lenght();
            chaine_liste="<select id='choixclasses' class='classes' onchange='retour_type("\" + classe_selectionne + "\")'>  ";

            chaine_liste+="<Option value='Selection'> Selectionner un type </option>";

                for( var defil=0; defil<nb_type;defil++)
                {
                    // 
                    chaine_liste+="<Option value=' "+ tab_type[defil] + " '> +  tab_type[defil] + </option>";
                }   

            chaine_liste+="</select>";

            document.getElementById("typeclasse").innerHTML = chaine_liste;
        }
        else
        {
            alert('Veuillez préciser une classe');
        }


    }
    function retour_type(classe_selectionne)
    {
        var chaine_type=" ";
        switch(classe_selectionne)
        {
            case "sixieme": 
            chaine_type="A | B"
            break;
        }
        switch(classe_selectionne)
        {
            case "cinquieme": 
            chaine_type="A | B"
            break;
        }
        switch(classe_selectionne)
        {
            case "quatrieme": 
            chaine_type="A | B"
            break;
        }
        switch(classe_selectionne)
        {
            case "troisieme": 
            chaine_type="A | B"
            break;
        }
        switch(classe_selectionne)
        {
            case "seconde": 
            chaine_type="CD1 | CD2 | A4"
            break;
        }
        switch(classe_selectionne)
        {
            case "premiere": 
            chaine_type="D1 | D2 | C4 | A4-1 | A4-2"
            break;
        }
        switch(classe_selectionne)
        {
            case "terminale": 
            chaine_type="D1 | D2 | C4 | A4-1 | A4-2"
            break;
        }
        return chaine_type;
    }
</script>



@endsection