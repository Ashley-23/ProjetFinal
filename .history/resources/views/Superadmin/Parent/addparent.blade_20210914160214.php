@extends('Superadmin.default')

@section('content')
    


<style>
    .error {
        color: red;
        font-weight: bold;
        font-style: italic;
    }
</style>


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
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div  class="admin-title" >
                                {{ Auth::user()->nom }}
                                {{ Auth::user()->prenom }}
        
                                    <span>Super Admin</span>
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
                                    <li>
                                        <x-slot name="content">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                    </li>
                                    <li>

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Deconnexion') }}
                                            </x-dropdown-link>
                                        </form>

                                    </li>
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
                        <li class="nav-item ">
                            <a href="{{route('vue_superadmin_accueil')}}" class="nav-link  "><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Paramétrage</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_alleleve') }}" class="nav-link"><i class="fas fa-angle-right"></i>
                                        Inscription</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_alletablissement')}}" class="nav-link"><i class="fas fa-angle-right"></i>Etablissement
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_allclasse')}}" class="nav-link "><i
                                            class="fas fa-angle-right"></i>Classe</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_allmatiere')}}" class="nav-link"><i class="fas fa-angle-right"></i>
                                        Matiere</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_allcm') }}" class="nav-link"><i class="fas fa-angle-right"></i>
                                        Classe_Matiere</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_allprof') }}" class="nav-link "><i class="fas fa-angle-right"></i>
                                        Professeurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_allparent') }}" class="nav-link menu-active"><i class="fas fa-angle-right"></i>
                                        Parents</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->










   

 


















            






            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">






                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Parents</h3>
                    <ul>
                        <li>
                            <a href="{{route('vue_superadmin_accueil')}}">Home</a>
                        </li>
                        <li>Ajouter un parent </li>
                    </ul>

                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-light-green ">
                                        <i class="flaticon-classmates text-green"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Parents </div>
                                        <div class="item-number"><span class="counter" data-num=" {{ $parent->count() }} "> {{ $parent->count() }} </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    


                    



                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <form action="{{route('vue_superadmin_addparent')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Ajouter Parent</h3>
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
                            <form  action="{{route('vue_superadmin_addparent')}}" method="POST">
                                    {{ csrf_field() }}

                                    
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Nom </label>
                                        <input type="text" placeholder="" class="form-control" name="nomRelative">
                                        {!! $errors->first('nomRelative','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Prenom </label>
                                        <input type="text" placeholder="" class="form-control" name="prenomRelative">
                                        {!! $errors->first('prenomRelative','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Login</label>
                                        <input type="text" placeholder="" class="form-control" name="login">
                                        {!! $errors->first('login','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date de naissance </label>
                                        <input type="date" placeholder="" class="form-control" name="dateNaissRelative">
                                         {!! $errors->first('dateNaissRelative','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Genre</label>
                                        <div>
                                            <select class="select2" name="sexeRelative">
                                            <option value="">Selectionnez le genre</option>
                                            <option value="m">Masculin</option>
                                            <option value="f">Feminin</option>
                                        </select>
                                        {!! $errors->first('sexeRelative','<span class="error">:message </span>') !!}
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>E-mail</label>
                                        <input type="email" placeholder="" class="form-control" name="emailRelative">
                                         {!! $errors->first('emailRelative','<span class="error">:message </span>') !!}
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Mot de passse </label>
                                        <input type="password" placeholder="" class="form-control" name="passwordRelative">
                                        {!! $errors->first('passwordRelative','<span class="error">:message </span>') !!}
                                    </div>     
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Telephone</label>
                                        <input type="tel" placeholder="" class="form-control"  name="telephoneRelative">
                                        {!! $errors->first('telephoneRelative','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Adresse</label>
                                        <input type="text" placeholder="" class="form-control"  name="adresseRelative">
                                        {!! $errors->first('adresseRelative','<span class="error">:message </span>') !!}
                                    </div>

                                    
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" class="form-control-file" name="photo">
                                    </div>







                                  {{-- Pour ajouter la classe --}}

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Selectionner vos enfants </label>
                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                            <option value="">Selectionnez vos enfants</option>
                                            @forelse ($eleve as $eleve)
                                                <option value="{{ $eleve->idEleve }}">{{ $eleve->nomEleve }} {{ $eleve->prenomEleve }} {{ $eleve->dateNaissEleve }}</option>
                                                @empty
                                                <option value="">Veuillez ajouter un élève</option>
                                            @endforelse
                                        </select>
                                        
                                        <p>
                                            Si vous avez le champ "Veuillez ajouter un élève" <br>
                                            Celà signifie que vous n'avez ajouter aucun élève <br>
                                            dans votre base de donnée 😊😊😊
                                        </p>
                                        {!! $errors->first('EleveParent','<span class="error">:message </span>') !!}
                                 
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        
                                     {!! Form::open(['Route']) !!}

                                    </div>








                                    <div class="col-12 form-group mg-t-8">
                                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Valider">
                                        {{-- <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Valider</button> --}}
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        <a href="{{route('vue_superadmin_allparent')}}"><button type="button" class="btn-fill-lmd radius-4 text-light bg-true-v"> Voir la liste</button></a>
                                        
                                          
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- Admit Form Area End Here -->





















            












            @endsection

            @push('scripts')
                <script>
                    $('#category').select2();
                </script>
            @endpush