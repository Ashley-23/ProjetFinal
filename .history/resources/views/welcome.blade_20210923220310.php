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
                <nav id="nav">
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
                        <a href="">Administrateur</a>
                    </ul>
                
                </nav>

            <!-- Main -->
                <div id="main">

                    <!-- Featured Post -->
                        <article class="post featured">
                            <header class="major">
                                <span class="date">April 25, 2017</span>
                                <h2><a href="#">GESTION | ECOLE <br />
                               </a></h2>
                                <p>L'éducation est l'un des investissements les plus importants qu'un pays puisse faire pour son avenir. <br />
                                    L'éducation est un puissant agent de changement. Elle améliore la santé et les moyens de subsistance, contribue à la stabilité sociale et stimule la croissance économique à long terme.<br />
                               </p>
                            </header>
                            <a href="#" class="image main"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
                            <ul class="actions special">
                                <li><a href="#" class="button large">Full Story</a></li>
                            </ul>
                        </article>

                    <!-- Posts -->
                        <section class="posts">
                            <article>
                                <header>
                                    <span class="date">April 24, 2017</span>
                                    <h2><a href="#">Sed magna<br />
                                    ipsum faucibus</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic02.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 22, 2017</span>
                                    <h2><a href="#">Primis eget<br />
                                    imperdiet lorem</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic03.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 18, 2017</span>
                                    <h2><a href="#">Ante mattis<br />
                                    interdum dolor</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic04.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 14, 2017</span>
                                    <h2><a href="#">Tempus sed<br />
                                    nulla imperdiet</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic05.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 11, 2017</span>
                                    <h2><a href="#">Odio magna<br />
                                    sed consectetur</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic06.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                            <article>
                                <header>
                                    <span class="date">April 7, 2017</span>
                                    <h2><a href="#">Augue lorem<br />
                                    primis vestibulum</a></h2>
                                </header>
                                <a href="#" class="image fit"><img src="{{asset('images/pic07.jpg')}}" alt="" /></a>
                                <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                                <ul class="actions special">
                                    <li><a href="#" class="button">Full Story</a></li>
                                </ul>
                            </article>
                        </section>








@endsection