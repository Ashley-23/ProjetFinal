{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}



    @extends('sitedefault')
@section('content')
    








    

				<!-- Nav -->
                {{-- <nav id="nav">
                    <ul class="links">
                        <li class="active"><a href="{{route('vue_siteaccueil')}}">Gestion|Ecole</a></li>
                        <li><a href="{{route('vue_Siteconnexion')}}">Connexion</a></li>
                        <li><a href="{{route('vue_siteinscription')}}">Inscription</a></li>
                    </ul>
                    <ul>
                             @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"> Connexion</a>

                                @endauth
                            </div>
                        @endif
                        {{-- {{ route('logincontrolleraff') }}   --}}
                        {{-- <a href="{{ route('logincontrolleraff') }}">Administrateur</a> --}}
                    {{-- </ul>
                
                </nav> --}} 

            <!-- Main -->
                <div id="main">

                    <!-- Featured Post -->
                        <article class="post featured">
                            <header class="major">
                            <span class="date"> 25  , 2021</span>
                                <h2><a href="">GESTION | ECOLE <br />
                               </a></h2>
                                <p>L'éducation est l'un des investissements les plus importants qu'un pays puisse faire pour son avenir. <br />
                                    L'éducation est un puissant agent de changement. Elle améliore la santé et les moyens de subsistance, contribue à la stabilité sociale et stimule la croissance économique à long terme.<br />
                               </p>
                            </header>
                            <img src="{{asset('images/ecole.jpg')}}" alt="" />
                            {{-- <ul class="actions special">
                                <li><a href="#" class="button large">Full Story</a></li>
                            </ul> --}}
                        </article>

                    <!-- Posts -->
                        <section class="posts">
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                                {{-- <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul> --}}
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 22, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                                {{-- <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul> --}}
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                                {{-- <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul> --}}
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                                {{-- <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul> --}}
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2>College Saint Joseph<br /></h2>
                                </header>
                                <img src="{{asset('images/csj.jpg')}}" alt="" />
                                <p> Du 12 Septembre 1948 jusqu’à nos jours. « Le collège Saint Joseph est un institut catholique, d’utilité publique à caractère privé »
                                </p>
                                {{-- <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul> --}}
                            </article>
                        </section>








@endsection