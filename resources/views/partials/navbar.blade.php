<nav class="navbar navbar-expand-lg navbar-blog">
	<div class="container">
		<a class="navbar-brand text-white" href="{{ route('home') }}">Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				@guest
				<li class="nav-item">
					<a class="nav-link text-white" href="{{ route('login') }}">Iniciar Sesión</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="{{ route('register') }}">Registrarse</a>
				</li>
				@else
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="dropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu" aria-labelledby="dropDown">
						<a class="dropdown-item" href="{{ route('profile', Auth::user()->slug) }}">Mi perfil</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();document.getElementById('logout').submit();">
						Cerrar sesión
						</a>
					</div>
					<form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
				</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>