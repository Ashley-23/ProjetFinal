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
                    <a href="{{route('vue_siteaccueil')}}">
                      <h2>   Gestion|Ecole </h2> 
                        {{-- <img src="img/logo.png" alt="logo"> --}}
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
                            <div class="admin-title">
                                <h5 class="item-title">Stevne Zone</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
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
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_allstudent')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les élèves </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_detailstudent')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details sur les élèves </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_admin_addstudent')}}" class="nav-link"><i
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
                            <a href="{{route('vue_admin_notice')}}" class="nav-link menu-active"><i
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

































@endsection