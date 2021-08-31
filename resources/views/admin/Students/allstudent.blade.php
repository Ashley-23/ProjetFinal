@extends('admin/default')

@section('content')
    












 <!-- Sidebar Area End Here -->
 <div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="index-2.html">Home</a>
            </li>
            <li>All Students</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Students Data</h3>
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
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Roll ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Class ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkAll">
                                    <label class="form-check-label">Roll</label>
                                </div>
                            </th>
                            <th>Id</th>
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