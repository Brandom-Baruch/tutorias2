@extends('layouts.app')

@section('titulo','Tipos de mentalidad')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Cuestionario: Tipo de mentalidad</h2>
			<h4 style="margin-bottom: 20px; text-align: center;" >
				Lee cada enunciado y elige si  estás <b>de acuerdo</b> o <b>en desacuerdo</b>. No hay respuestas correctas o incorrectas
			</h4>			
			<form method="post" action="{{url('alumno/cuestionario/tipo_mentalidad')}}">
				{{ csrf_field() }}        												
				<div class="row" style="margin: auto;">
					<!--R1-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Tu inteligencia es algo muy básico de ti y no la puedes cambiar mucho.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="De acuerdo"
									@if(old('respuesta1') == "De acuerdo") checked @endif>
								De acuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="En desacuerdo"
									@if(old('respuesta1') == "En desacuerdo") checked @endif>
								En desacuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta1'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta1') }}</strong>
							</span>
						@endif										
					</div>
					<!--R2-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Puedes aprender nuevas cosas, pero realmente no puedes cambiar qué tan inteligente eres.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="De acuerdo"
									@if(old('respuesta2') == "De acuerdo") checked @endif>
								De acuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="En desacuerdo"
									@if(old('respuesta2') == "En desacuerdo") checked @endif>
								En desacuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta2'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta2') }}</strong>
							</span>
						@endif										
					</div>
					<!--R3-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>No importa qué tan inteligente seas, siempre podrás cambiar tu inteligencia aunque sea un poco.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="De acuerdo"
									@if(old('respuesta3') == "De acuerdo") checked @endif>
								De acuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="En desacuerdo"
									@if(old('respuesta3') == "En desacuerdo") checked @endif>
								En desacuerdo
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
					<!--R4-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Siempre puedes cambiar sustancialmente qué tan inteligente eres.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="De acuerdo"
									@if(old('respuesta4') == "De acuerdo") checked @endif>
								De acuerdo
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="En desacuerdo"
									@if(old('respuesta4') == "En desacuerdo") checked @endif>
								En desacuerdo
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
					</div>	
					<!--R5-->
					<div class="text-center col-md-12">
						<h4>Completa el siguiente enunciado de tal modo que los números en los dos espacios sumen 100%.</h4>
						@if (session('mensaje'))
							<span class="help-block text-danger">
								<strong>{{ session('mensaje') }}</strong>
							</span><br>
						@endif
					</div>
					<div class="table-responsive text-center">
						<table class="table">
							<tbody>
								<tr>
									<th><p class="h5">INTELIGENCIA=</p></th>
									<th>
										<input type="number" class="form-control form-check-inline " name="respuesta5" 
											   value="{{ old('respuesta5') }}"
										>										
									</th>
									<td><p class="h5">%</p></td>
									<th><p class="h5">HABILIDADES</p></th>
									<td><p class="h5">+</p></td>
									<th><input type="number" class="form-control form-check-inline" 
										name="r5" value="{{ old('r5') }}">
										@if ($errors->has('r5'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r5') }}</strong>
											</span>
										@endif	
									</th>
									<td><p class="h5">%</p></td>
									<th><p class="h5">ESFUERZO.</p></th>
								</tr>
							</tbody>
						</table>						
					</div>															
				</div>																							
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/cuestionario')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
