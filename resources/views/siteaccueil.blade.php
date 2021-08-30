@extends('sitedefault')
@section('content')
    








    

				<!-- Nav -->
                <nav id="nav">
                    <ul class="links">
                        <li class="active"><a href="{{route('vue_accueil')}}">Gestion|Ecole</a></li>
                        <li><a href="{{route('vue_connexion')}}">Connexion</a></li>
                        <li><a href="{{route('vue_inscription')}}">Inscription</a></li>
                    </ul>
                
                </nav>

            <!-- Main -->
                <div id="main">

                    <!-- Featured Post -->
                        <article class="post featured">
                            <header class="major">
                                <span class="date">April 25, 2017</span>
                                <h2><a href="#">And this is a<br />
                                massive headline</a></h2>
                                <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                                facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                                amet nullam sed etiam veroeros.</p>
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