@extends('layouts.app')

@section('titulo', 'Bienvenido')

@section('body-class', 'landing-page sidebar-collapse')

@section('contenido')

	@include('includes.temas')

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style=" background-image: url('{{asset('img/identidad-gobierno-federal.jpg')}}') ">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<h1 class="title">Bachillerato "Profra. Ignacia Islas"</h1>				
				<img src="{{ asset('img/logo_bachiller.png') }}" style="width:250px;">          
			</div>
		</div>
	</div>
</div>
<div class="main main-raised">
	<div class="container">
		<div class="section text-center">
			<div class="row">
				<div class="col-md-9 ml-auto mr-auto">
					<h2 class="title">Acerca del Bachillerato "Profra. Ignacia Islas"</h2>
					<h5 class="description text-justify" style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
				</div>
			</div>
			<div class="features">
				<div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info">
								<i class="material-icons">chat</i>
							</div>
							<h5 class="info-title">Descripción del programa</h5>
							<p style= "color: black;" class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">chrome_reader_mode</i>
							</div>
							<h5 class="info-title">Guía para padres de familia</h5>
							<p style= "color: black;" class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger">
								<i class="material-icons">warning</i>
							</div>
							<h5 class="info-title">Como detectar un posible abandono escolar</h5>
							<p style= "color: black;" class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<button type="button" class="btn btn-info">Saber más</button>
						</div>
					</div>
				</div>
			</div>
		</div>   
	</div>
</div>
@include('includes.footer')
@endsection