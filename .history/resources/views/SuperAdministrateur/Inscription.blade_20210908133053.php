@extends('SuperAdministrateur.default')

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
                                    <li><a href="{{route('vue_superadmin_lockscreen')}}"><i class="flaticon-turn-off"></i>Log Out</a></li>
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
                            <ul class="nav sub-group-menu ">
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_alladmin')}}" class="nav-link"><i class="fas fa-angle-right"></i>Etablissement
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_detailadmin')}}" class="nav-link "><i
                                            class="fas fa-angle-right"></i>Classe</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_addadmin')}}" class="nav-link"><i class="fas fa-angle-right"></i>
                                        Matiere</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Administrateurs</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_alladmin')}}" class="nav-link"><i class="fas fa-angle-right"></i>Tous les 
                                        administrateurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_detailadmin')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details administrateurs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_addadmin')}}" class="nav-link"><i class="fas fa-angle-right"></i>Ajouter
                                        Administrateur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('vue_superadmin_inscription')}}" class="nav-link menu-active"><i
                                class="flaticon-technological"></i><span>Inscription</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{route('vue_superadmin_notice')}}" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Notification</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->










             <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">






                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Inscription</h3>
                    <ul>
                        <li>
                            <a href="{{ route('vue_superadmin_accueil') }}">Home</a>
                        </li>
                        <li> Inscription </li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <form action="{{route('vue_superadmin_addinscription')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3> Inscrire un élève </h3>
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
                                        <input type="text" placeholder="" class="form-control" name="nomEleve">
                                        {!! $errors->first('nomEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Prénom(s)</label>
                                        <input type="text" placeholder="" class="form-control" name="prenomEleve">
                                        {!! $errors->first('prenomEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Genre</label>
                                        <select class="select2" name="sexeEleve">
                                            {{-- <option value="">Please Select Gender *</option> --}}
                                            <option value="">Selectionnez le genre</option>
                                            <option value="m">Masculin</option>
                                            <option value="f">Feminin</option>
                                            {{-- <option value="3">Others</option> --}}
                                        </select>
                                        {!! $errors->first('sexeEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Date de naissance</label>
                                        <input type="date" placeholder="dd/mm/yyyy" class="form-control air-datepicker " name="datenaissEleve"
                                            data-position='bottom right <i class="far fa-calendar-alt"></i>'>
                                        
                                        {!! $errors->first('datenaissEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Login</label>
                                        <input type="text" placeholder="" class="form-control" name="loginEleve">
                                        {!! $errors->first('loginEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    
                                     <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe ')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="passwordEleve"
                                required autocomplete="new-password" />
            </div>

            {{-- <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer le mot de passe ')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}
                                   
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>E-Mail</label>
                                        <input type="email" placeholder="" class="form-control" name="emailEleve">
                                        {!! $errors->first('emailEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    
                                    
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Adresse</label>
                                        <input type="text" placeholder="" class="form-control" name="adresseEleve">
                                        {!! $errors->first('adresseEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Telephone</label>
                                        <input type="text" placeholder="" class="form-control" name="telephoneEleve">
                                        {!! $errors->first('telephoneEleve','<span class="error">:message </span>') !!}
                                    </div>
                                    {{-- <div class="col-lg-6 col-12 form-group">
                                        <label>Short BIO</label>
                                        <textarea class="textarea form-control" name="message" id="form-message" cols="10"
                                            rows="9"></textarea>
                                    </div> --}}
                                    <div class="col-lg-6 col-12 form-group mg-t-30">
                                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                                        <input type="file" class="form-control-file" name="photo">
                                    </div>
                                      

                                    {{-- Pour ajouter la classe --}}

                                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Nom de la classe</label>
                                        <select class="select2" name="classeEleve">
                                            <option value="">Selectionnez une classe</option>
                                            @forelse ($classe as $classe)
                                                <option value="{{ $classe->idClasse }}">{{ $classe->nomClasse }} {{ $classe->typeClasse }}</option>
                                                @empty
                                                <option value="">Veuillez ajouter une classe</option>
                                            @endforelse
                                        </select>
                                        
                                        <p>
                                            Si avez le champ "Veuillez ajouter une classe" <br>
                                            Celà signifie que vous n'avez ajouter aucune classe <br>
                                            dans votre base de donnée 😊😊😊
                                        </p>
                                        {!! $errors->first('classeEleve','<span class="error">:message </span>') !!}
                                        {{-- {!! $errors->first('adresseEleve','<span class="error">:message </span>') !!} --}}
                                    </div>



                                    <div class="col-12 form-group mg-t-8">
                                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Valider">
                                        {{-- <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Valider</button> --}}
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        <a href="{{route('vue_superadmin_alleleve')}}"> <button type="button" class="btn-fill-md radius-30 text-light bg-orange-peel">Liste des élèves <i class="fas fa-cog mg-l-10"></i></button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- Admit Form Area End Here -->



                


{{-- AJOUTER UNE MATIERE  --}}









             <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">






                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Matieres</h3>
                    <ul>
                        <li>
                            <a href="{{ route('vue_superadmin_accueil') }}">Home</a>
                        </li>
                        <li> Ajouter une matiere</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <form action="{{route('vue_superadmin_addmatiere')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3> Ajouter une matiere </h3>
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
                                        <label>Nom de la matiere </label>
                                        <input type="text" placeholder="" class="form-control" name="nomMatiere">
                                        {!! $errors->first('nomMatiere','<span class="error">:message </span>') !!}
                                    </div>
                                    {{-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                                        <label>Nom de la classe </label>
                                        <select class="select2" name="nomClasse">
                                            <option value="sixieme">Sixieme</option>
                                            <option value="cinquieme">cinquieme</option>
                                            <option value="quatrieme">quatrieme</option>
                                            <option value="f">troisieme</option>
                                            <option value="troisieme">Feminin</option>
                                            <option value="seconde">seconde</option>
                                            <option value="terminale">terminale</option>
                                            
                                        </select>
                                        {!! $errors->first('nomClasse','<span class="error">:message </span>') !!}
                                    </div> --}}
                                   
        

                                    <div class="col-12 form-group mg-t-8">
                                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Valider">
                                        {{-- <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Valider</button> --}}
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        <a href="{{route('vue_superadmin_allmatiere')}}"> <button type="button" class="btn-fill-md radius-30 text-light bg-orange-peel">Liste des matières <i class="fas fa-cog mg-l-10"></i></button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- Admit Form Area End Here -->








{{--    AJOUTER UNE CLASSE   --}}








                
             <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">






                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Classes</h3>
                    <ul>
                        <li>
                            <a href="{{ route('vue_superadmin_accueil') }}">Home</a>
                        </li>
                        <li> Ajouter une classe </li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Admit Form Area Start Here -->
                <div class="card height-auto">
                    <form action="{{route('vue_superadmin_addclasse')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3> Ajouter une classe</h3>
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
                                    <div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Nom de la classe</label>
                                            <select class="select2" name="nomClasse">
                                                <option value="">Selectionnez une classe</option>
                                                <option value="sixieme">sixième</option>
                                                <option value="cinquieme">cinquième</option>
                                                <option value="quatrieme">quatrième</option>
                                                <option value="troisieme">troisième</option>
                                                <option value="seconde">seconde</option>
                                                <option value="premiere">première</option>
                                                <option value="terminale">terminale</option>
                                            </select>
                                            {!! $errors->first('nomClasse','<span class="error">:message </span>') !!}
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                            <label>Type de la classe</label>
                                            <select class="select2" name="typeClasse">
                                                <option value="">Selectionnez un type</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="CD">CD</option>
                                                <option value="A4">C4</option>
                                                <option value="C4">D</option>
                                                <option value="D">A4</option>
                                            </select>
                                            {!! $errors->first('typeClasse','<span class="error">:message </span>') !!}
                                        </div>

                                        
                                    </div>
                                    
            <div class="mt-4">
               <label for="affichage"> Choissisez comme suit : </label>
               <textarea name="c" id="" cols="30" rows="7" >
                    Sixième A ou B 
                    Cinquième A ou B 
                    Quatrième A ou B 
                    Troisième A ou B 
                    Seconde CD ou A4
                    Première D, C4 ou A4 
                    Terminale D, C4 ou a4 
               </textarea>
            </div>

           
                </select>

            </div>

                                    <div class="col-12 form-group mg-t-8">
                                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Valider">
                                        {{-- <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Valider</button> --}}
                                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        <a href="{{route('vue_superadmin_allclasse')}}"> <button type="button" class="btn-fill-md radius-30 text-light bg-orange-peel">Liste des classes <i class="fas fa-cog mg-l-10"></i></button></a>
                                        {{-- <input type="button" value=""> --}}
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <!-- Admit Form Area End Here -->

















@endsection