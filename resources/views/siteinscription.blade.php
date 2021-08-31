@extends('sitedefault')

@section('content')
    





				<!-- Nav -->
                <nav id="nav">
                    <ul class="links">
                        <li ><a href="{{route('vue_accueil')}}">Gestion|Ecole</a></li>
                        <li><a href="{{route('vue_connexion')}}">Connexion</a></li>
                        <li class="active" ><a href="{{route('vue_inscription')}}">Inscription</a></li>
                    </ul>
                
                </nav>

                <!-- Main -->
                    <div id="main">
                        <form action="">
                            <table>
                                {{-- pour la saisie du nom --}}
                                <tr>
                                    <td> Nom :</td>
                                    <td> 
                                        <input type="text" name="nom" id="" required placeholder="nom">
                                    </td>
                                </tr>
                        
                                 {{-- pour la saisie du prenom --}}
                                 <tr>
                                    <td> Prénoms :</td>
                                    <td> 
                                        <input type="text" name="prenom" id="" required placeholder="prenoms">
                                    </td>
                                </tr>
                                 {{-- pour la saisie du login --}}
                                 <tr>
                                    <td> Login :</td>
                                    <td> 
                                        <input type="text" name="login" id="" required placeholder="Login">
                                    </td>
                                </tr>
                        
                                 {{-- pour la saisie de la date de naissance --}}
                                 <tr>
                                    <td> Date de naissance :</td>
                                    <td> 
                                        <input type="date" name="dateNaiss" id="" required>
                                    </td>
                                </tr>
                                 {{-- pour la saisie du nom --}}
                                 <tr>
                                    <td> Genre:</td>
                                    <td> 
                                            <div>
                                              <input type="checkbox" id="masculin" name="sexe" value="m" onclick="onlyOne(this)" checked>
                                              <label for="masculin">masculin</label>
                                            </div>
                                            <div>
                                              <input type="checkbox" id="feminin" name="sexe" value="f" onclick="onlyOne(this)" >
                                              <label for="feminin">feminin</label>
                                            </div>
                                            {{-- Pour ne choisir qu'un seul item  --}}
                                            <script type="text/javascript">
                                                
                                                function onlyOne(checkbox) {
                                                    var checkboxes = document.getElementsByName('sexe')
                                                    checkboxes.forEach((item) => {
                                                        if (item !== checkbox) item.checked = false
                                                    })}
                                             </script>
                                    </td>
                                 </tr>
                                 {{-- pour la saisie de l'email --}}
                                <tr>
                                    <td> Email : </td>
                                    <td> 
                                        <input type="email" name="email" id="" required placeholder="utilisateur@gmail.com">
                                    </td>
                                </tr>
                        
                                {{-- pour la saisie du mot de passe --}}
                                <tr>
                                    <td> Mot de passe :</td>
                                    <td> 
                                        <input type="password" name="mdp1" id="mdp1" maxlength="20" required="" onblur="checkmdp()" >
                                    </td>
                                </tr>
                        
                                {{-- pour la vérification du mot de passe --}}
                                <tr>
                                    <td> Entrer à nouveau le mot de passe :</td>
                                    <td> 
                                        <input type="password" name="mdp2" id="mdp2 " maxlength="20" required="" onblur="checkmdp()">
                                    </td>
                                </tr>
                                
                        
                                     {{-- pour la saisie du numéro de téléphone --}}
                                <tr>
                                    <td> Téléphone :</td>
                                    <td> 
                                       <input type="tel" name="" id="" placeholder="90-06-04-09" required>
                                    </td>
                                </tr>
                        
                                 {{-- pour la saisie de l'addresse --}}
                                 <tr>
                                    <td> Adresse :</td>
                                    <td> 
                                        <input type="text" name="nom" id="" required placeholder="adresse">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            S'authentifier en tant que :
                                            
                                    </td>
                                    <td>
                                        <select name="mdp" id="mdp"  class="form-control"  >
                                            <option value="Eleve">Eleve</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Professeur">Professeur</option>
                                            <option value="Administrateur">Administrateur</option>
                                            <option value="SuperAdministrateur">SuperAdministrateur</option>
                                          </select>
                                    </td>
                                </tr>
                                  
                            </table>
                        
                        
                            {{-- <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label for="remember-me" class="form-check-label">Remember Me</label>
                                </div>
                                <a href="#" class="forgot-btn">Forgot Password?</a>
                            </div> --}}
                            <div class="form-group">
                                <div>  <button type="submit" class="login-btn">  <a href="{{route('vue_index')}}"> S'inscrire </a> </button> </div>
                               
                                <div class="sign-up">Vous avez déjà un compte ? <a href="{{route('vue_connexion')}}">Connectez-vous</a> </div>
                            </div>



                            {{-- Pour la vérification des mots de passe  --}}
                        
                            <script type="text/javascript">
                                
                                function checkmdp( ) {
                                    var mdp1=document.getElementById("mdp1").value;
                                    var mdp2=document.getElementById("mdp2").value;

                                    if (mdp1==mdp2) {
                                        return true;   
                                       }
                                    else
                                     if (mdp1!=mdp2) {
                                         alert('Les mot de passe ne sont pas les même');
                                               mdp1.focus();
                                               return false;
                                           }
                               }
                   
                           </script>
                           {{-- fin vérification des mots de passe  --}}
                        </form>
                        
                        
                        
                        
                        







@endsection