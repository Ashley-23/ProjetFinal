@extends('SuperAdministrateur.default')

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
                            <a href="{{route('vue_superadmin_accueil')}}" class="nav-link "><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Paramétrage</span></a>
                            <ul class="nav sub-group-menu ">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>Etablissement
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Classe</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fas fa-angle-right"></i>
                                        Matiere</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Etablissements</span></a>
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_alletablissement')}}" class="nav-link "><i class="fas fa-angle-right"></i>Tous les 
                                        etablissements</a>
                                {{-- </li>
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_detailetablissement')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Details etablissement</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{route('vue_superadmin_addetablissementaff')}}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Ajouter etablissement</a>
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
                        <li class="nav-item">
                            <a href="{{route('vue_superadmin_inscription')}}" class="nav-link"><i
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
        <h3>Etablissement</h3>
        <ul>
            <li>
                <a href="index-2.html">Home</a>
            </li>
            <li>Tous les etablissements</li>
        </ul>
        <ul>

             {{-- <div class="item-title">
                    <h3> {{ $user->count() }} </h3>
                </div> --}}


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
                                    <div class="item-title">Etablissements</div>
                                    <div class="item-number"><span class="counter" data-num=" {{ $user->count() }} "> {{ $user->count() }} </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </ul>
    </div>
    
   
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Tous les etablissements</h3>
                </div>
               
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i
                                class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i
                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item"  onClick="history.go(0)" href="#"><i
                                class="fas fa-redo-alt text-orange-peel"  ></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Rechercher par nom ..." class="form-control" @keyup="SearchNom"  v-model="q"> {{--q comme query--}}
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Rechercher par login ..." @keyup="Searchlogin" class="form-control" v-model="q"> {{--q comme query--}}
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Rechercher par e-mail ..." class="form-control" @keyup="SearchEmail" v-model="q"> {{--q comme query--}}
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>




<script type="text/javascript">
    searchNom()
    {
        // 
        alert('ok');
    },
    searchLogin()
    {
        // 
        alert('ok');
    },
    searchEmail()
    {
        // 
        alert('ok');
    },
</script>




            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkAll">
                                    <label class="form-check-label"> Identifiant </label>
                                    
                                </div>
                            </th>
                            {{-- <th>Id</th> --}}
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Login</th>
                            <th>Date de naissance</th>
                            <th>Genre</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Photo</th>
                            <th>Adresse</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

 @forelse ($user as $user)

                         <tr> 

                           
                                
                                  <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"> 
                                                            {{-- <a href=" {{ route('vue_superadmin_detailetablissement') }},{{$id }}"> --}}
                                                                {{ $user->id }}
                                                            {{-- </a> --}}
                                                         </label>
                                                    </div>
                                                </td>
                                                {{-- <td class="text-center"><img src="img/figure/student2.png" alt="student"></td> --}}
                                                {{-- <td>  <a href=""> {{ $user->id }} </a> </td> --}}
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->nom }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->prenom }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->login }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->datenaiss }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->sexe }} </a>  </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->email }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->telephone }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->photo }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->adresse }} </a> </td>
                                                <td>  <a href=" {{ route('vue_superadmin_detailetablissement',$user->id) }} "> {{ $user->active }} </a> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            {{-- <a class="dropdown-item" href="#"><i
                                                                    class="fas fa-times text-orange-red"></i>Close</a> --}}
                                                            <a class="dropdown-item" href="{{route('vue_superadmin_editetablissement',$user->id)}}"><i
                                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                            <a class="dropdown-item" onClick="history.go(0)" href="#"><i
                                                                    class="fas fa-redo-alt text-orange-peel" ></i>Refresh</a>
                                                        </div>
                                                    </div>
                                                </td>


                            @empty
                                <p>Aucun élève dans la base de donnée </p>
                          
                        
                         </tr>

  @endforelse






                        {{-- <tr>

                            @forelse ($adminAff as $eleve)
                                
                                  <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label">#0021</label>
                                                    </div>
                                                </td>
                                                <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                                                <td>  <a href=""> {{eleve->nomEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->prenomEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->login}} </a> </td>
                                                <td>  <a href=""> {{eleve->dateNaissEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->sexeEleve}} </a>  </td>
                                                <td>  <a href=""> {{eleve->emailEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->telephoneEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->photoEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->adresseEleve}} </a> </td>
                                                <td>  <a href=""> {{eleve->activeEleve}} </a> </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
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


                            @empty
                                <p>Aucun élève dans la base de donnée </p>
                            @endforelse
                        
                            
                        </tr>       --}}


<h2> Affichage</h2>



                    </tbody>
                </table>
            </div>
        </div>







@endsection