<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('Majestic/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('Majestic/vendors/base/vendor.bundle.base.css')}}">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <link rel="stylesheet" href="{{asset('Majestic/css/style.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('../../css/style.css')}}"> --}}
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('Majestic/images/favicon.png')}}" />
  {{-- <link rel="shortcut icon" href="{{asset('../../images/favicon.png')}}" /> --}}
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                {{-- <img src="{{asset('Majestic/images/logo.svg')}}" alt="logo"> --}}
              </div>

              <h1>Gestion|Ecole</h1>

              {{-- <h4>Welcome back!</h4> --}}
              {{-- <h6 class="font-weight-light">Happy to see you again!</h6> --}}
              <form  action="{{route('loginController')}}">
                {{-- <form action="{{route('vue_superadmin_addclasse')}}" method="POST"> --}}
                <div class="form-group">
                  <label for="exampleInputEmail">Nom d'utilisateur</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="
                    <label for="exampleInputEmail">Nom d'utilisateur" name="login">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Mot de passe</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Mot de passe" name="password">                        
                  </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword">Se connecter en tant que : </label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="mdi mdi-account-circle"></i>
                          {{-- <i class="mdi mdi-lock-outline text-primary"></i> --}}
                        </span>
                      </div>
                      {{-- <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                         --}}
                      <select name="" id="" >
                        <option value="eleve">Eleve</option>
                        <option value="parent">Parent</option>
                        <option value="professeur">Professeur</option>
                        <option value="administrateur">Administrateur</option>
                        <option value="etablissement">Etablissement</option>
                        {{-- <option value=""></option> --}}
                    </select>
                    </div>
                  </div>

                <div class="my-2 d-flex justify-content-between align-items-center">
                 
                </div>
                <div class="my-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{route('loginController')}}">LOGIN</a>
                </div>
               
              
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('Majestic/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('Majestic/js/off-canvas.js')}}"></script>
  <script src="{{asset('Majestic/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Majestic/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
