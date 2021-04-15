@extends('layouts.app')

@section('titulo','Datos Academicos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black;">Datos Academicos</h2>			
			<form method="post" action="{{url('alumno/entrevista/datos/academicos')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿En dónde cursaste la secundaria?</b></label>						
						<div class="form-check">
							<div class="form-check col-md-8">								
								<input type="text" class="form-control text-dark" name="respuesta1" value="{{old('respuesta1')}}">
							</div>							
						</div>
						@if ($errors->has('respuesta1'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta1') }}</strong>
							</span>
						@endif

					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Qué materias te gustaron más en la secundaria?</b></label>					
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark" name="respuesta2" value="{{old('respuesta2')}}">
							</div>							
						</div>

						@if ($errors->has('respuesta2'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta2') }}</strong>
							</span>
						@endif

						<div class="form-check {{ $errors->has('r2') ? ' has-error' : '' }}">						
							<label style="color: black;">Porque?</label>							
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark" name="r2">
							</div>													
						</div>

						@if ($errors->has('r2'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('r2') }}</strong>
							</span>
						@endif

					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Cómo consideras tu desempeño escolar al momento?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Bueno"
									@if(old('respuesta3') == "Bueno") checked @endif>
								Bueno 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Regular"
									@if(old('respuesta3') == "Regular") checked @endif>
								Regular
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Malo"
									@if(old('respuesta3') == "Malo") checked @endif>
								Malo  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta3'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta3') }}</strong>
							</span>
						@endif						
					</div>	
					<div class="form-group col-md-12">
						<label style="color: black;"><b>¿Crees que tus resultados escolares obtenido, corresponden con el esfuerzo que invierte en ellos?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Si"
									@if(old('respuesta4') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="No"
									@if(old('respuesta4') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						@if ($errors->has('respuesta4'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta4') }}</strong>
							</span>
						@endif

						<div class="form-check">
							<label style="color: black;">Porque?</label>
							<div class="form-check col-md-6">								
								<input type="text" class="form-control text-dark" name="r4" value="{{ old('r4') }}">
							</div>
						</div>
						@if ($errors->has('r4'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('r4') }}</strong>
							</span>
						@endif

					</div>										
				</div>																							
				<div class="col-md-12 text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/entrevista')}}" class="btn btn-danger">Cancelar</a> 					
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
