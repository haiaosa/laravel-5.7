<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xxx</title>
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> --}}
	<link rel="stylesheet" href="{{ asset('css/truyen1vs3.css') }}">
	<link rel="stylesheet" href="{{ asset('css/debug.css') }}">
</head>
<body class="has-navbar-fixed-bottom">
	@include('truyen.dung-chung.menu-ngang')

	<section class="hero has-background-black is-fullheight">
		<!-- Hero head: will stick at the top -->
		<div class="hero-head">
			<header class="navbar">
				<div class="container">
					<div class="navbar-brand">
						<a class="navbar-item">
							<img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
						</a>
						<span class="navbar-burger burger" data-target="navbarMenuHeroC">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</div>
					<div id="navbarMenuHeroC" class="navbar-menu">
						<div class="navbar-end">
							<a class="navbar-item is-active">
								Home
							</a>
							<a class="navbar-item">
								Examples
							</a>
							<a class="navbar-item">
								Documentation
							</a>
							<span class="navbar-item">
								<a class="button is-success is-inverted">
									<span class="icon">
										<i class="fab fa-github"></i>
									</span>
									<span>Download</span>
								</a>
							</span>
						</div>
					</div>
				</div>
			</header>
		</div>

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
		</div>

		<!-- Hero footer: will stick at the bottom -->
		<div class="hero-foot">
			<nav class="tabs is-boxed is-fullwidth">
				<div class="container">
					<ul>
						<li class="is-active"><a>Overview</a></li>
						<li><a>Modifiers</a></li>
						<li><a>Grid</a></li>
						<li><a>Elements</a></li>
						<li><a>Components</a></li>
						<li><a>Layout</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</section>

</body>
</html>