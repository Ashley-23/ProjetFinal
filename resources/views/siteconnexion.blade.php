@extends('sitedefault')


@section('content')
    





            <!-- Nav -->
            <nav id="nav">
                <ul class="links">
                    <li ><a href="{{route('vue_siteaccueil')}}">Gestion|Ecole</a></li>
                    <li  class="active"  ><a href="{{route('vue_Siteconnexion')}}">Connexion</a></li>
                    <li><a href="{{route('vue_siteinscription')}}">Inscription</a></li>
                </ul>

            </nav>
            <!-- Main -->
            <div id="main">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>
                                Nom : 
                            </td>
                            <td>
                                <input type="text" name="login" id="" placeholder="login" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mot de passe :
                            </td>
                            <td>
                                <input type="password" name="" id="" placeholder="Mot de passe" required>
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
                                    <option value="Etablissement">Etablissement</option>
                                    <option value="SuperAdministrateur">SuperAdministrateur</option>
                                  </select>
                            </td>
                        </tr>
                    </table>
                <div class="form-group">
                    <div>  <button type="submit" class="login-btn">  <a href="{{route('vue_index')}}"> Se connecter </a> </button> <br></div>
                   
                    <div class="sign-up">Vous n'avez pas de compte ? <a href="{{route('vue_siteinscription')}}">Inscrivez-vous</a></div>
                </div>
                </form>








@endsection