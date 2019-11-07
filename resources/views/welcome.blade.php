<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta autor = "Raul">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--  bootstrap css -->
        <link rel="stylesheet" href="{{asset('css\bootstrap.css')}}">
        
        <title>Rio Aro App</title>
       
    </head>
    <body>
       <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container">
						<a class="navbar-brand" href="./">
							<img src="{{asset('img/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
							RioAroApp
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse " id="navbarToggler"  >
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="./nosotros">¿Quienes somos?</a>
								</li>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="./contacto" >Contáctanos</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link " href="./contacto" >Registrarse</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link btn btn-outline-primary " href="./contacto" >Login</a>
								</li>
							</ul>
						</div>
					</div>	
			</nav>	
       </header>     
       <main>
           @yield('content')
        </main>
        <footer class="bg-dark pb-4 pt-4 text-center text-light" >
				<div class="container ">
						<span >Rio Aro App</span>
				</div>
		</footer>
        <!-- scripts -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
		<script src="{{asset('js/popper.js')}}"></script>
		<script src="{{asset('js/bootstrap.js')}}"></script>
    </body>
</html>
