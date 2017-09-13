<nav class="navbar navbar-expand-lg navbar-light ">
	<a class="navbar-brand" href="{{route('welcome')}}" style="color: white">
		<img src="{{ asset('images/ic_home_white_48dp_2x.png') }} " width="25" height="25" class="d-inline-block align-top" alt="">
	Mi Hogar
	</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{route('map')}}" style="color: white"><img src="{{ asset('images/ic_map_white_48dp_2x.png') }} " width="20" height="20" class="d-inline-block align-top" alt="" >Mapa</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{route('map')}}" style="color: white"><img src="{{ asset('images/ic_report_problem_white_48dp_2x.png') }} " width="20" height="20" class="d-inline-block align-top" alt="" >PQR</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="{{route('map')}}" style="color: white"><img src="{{ asset('images/ic_question_answer_white_48dp_2x.png') }} " width="20" height="20" class="d-inline-block align-top" alt="" >Comuniquese</a>
			</li>
			
		</ul>

		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Buscas algo?" aria-label="Buscar">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white; border: none;">
			<img src="{{ asset('images/ic_search_white_48dp_2x.png') }} " width="20" height="20" class="d-inline-block align-top" alt="">Buscar</button>
		</form>

		<ul class="nav">
			@if (Route::has('login'))
				@auth
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; border: none;"><img src="{{ asset('storage/'.Auth::User()->image->original_filename) }}" width="20" height="20" class="rounded" alt="" >  {{ Auth::User()->fname }}</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="{{ route('logout') }}">Salir</a>
							
						</div>
					</li>
					
		            @if(Auth::User()->type == 'teacher')
			            @if(!Auth::User()->hogar->reg)
				            <li class="nav-item">
				            	<a class="nav-link" href="{{ route('register') }}">Registrar Mi Hogar</a>
				            </li>
				        @else
				        	<li class="nav-item">
				            	<a class="nav-link" href="{{ route('home/'.Auth::User()->id.'/hogarShow/'.Auth::User()->hogar->id) }}">{{ Auth::User()->hogar->fname }}</a>
				            </li>
			            @endif
		            @endif
		        @else
		        	<li class="nav-item">
		            	<a class="btn btn-outline-primary" href="{{ route('login') }}" style="color: white; border: none; font-weight: bold;">Entrar</a>
		            </li>
		        @endauth
	        @endif
			
			
		</ul>
	</div>
</nav>