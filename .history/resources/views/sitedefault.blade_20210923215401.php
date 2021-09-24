<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Gestion|Ecole</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Gestion|Ecole</h1>
						<p>
                            <p> Se former, c'est avancer <br> </p>
                            <p> Ensemble pour progresser <br> </p>
                            <p> Là où il y a la volonté,il y a l'amour  <br> </p>
                        </p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
                        <p>
                            <a href="{{ route('logincontrolleraff') }}" class="logo">Se connecter</a>
							<a href="{{ route('login') }}" class="logo">Administrateur</a>
                            {{-- <a href="{{ route('register') }}" class="logo">Administrateur</a> --}}
                        </p>
						{{-- Login et Register de Laravel controllé par le middleware d'authentification  --}}
							{{-- @if (Route::has('login'))
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
						{{-- Fin Login et Register de Laravel controllé par le middleware d'authentification  --}}
						
					</header>














    @yield('content')












                            
						{{-- <!-- Footer -->
							<footer>
								<div class="pagination">
									<!--<a href="#" class="previous">Prev</a>-->
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer> --}}

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							{{-- <form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section> --}}

                            coorodonnés du developpeur : 
                            <a href="mailto:ashleysatchivi92@gmail.com">ashleysatchivi92@gmail.com</a>
							
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy;copyright</li><li> Gestion|Ecole </li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<script src="{{asset('assets/js/main.js')}}"></script>

	</body>
</html>