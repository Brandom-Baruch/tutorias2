@extends('layouts.app')

@section('titulo','Datos Adicionales')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black; margin-top: 10px;">Datos Adicionales</h2>			
			<form method="post" action="{{url('alumno/entrevista/datos/adicionales')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-3"><!--R1-->
						<label style="color: black;"><b>¿Consideras que tienes alguna capacidad diferente?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Si" 
									@if(old('respuesta1') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="No"
									@if(old('respuesta1') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>											
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r1" value="{{ old('r1') }}">
							</div>
						</div>
						@if ($errors->has('respuesta1'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta1') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group col-md-3"><!--R2-->
						<label style="color: black;"><b>¿Padeces alguna enfermedad?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Si"
									@if(old('respuesta2') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="No"
									@if(old('respuesta2') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r2" value="{{ old('r2') }}">
							</div>
						</div>
						@if ($errors->has('respuesta2'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta2') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group col-md-3"><!--R4-->
						<label style="color: black;"><b>¿Te han intervenido quirúrgicamente?</b></label><br>
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
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r4" value="{{ old('r4') }}">
							</div>
						</div>
						@if ($errors->has('respuesta4'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta4') }}</strong>
							</span>
						@endif
					</div>	
					<div class="form-group col-md-3"><!--R5-->
						<label style="color: black;"><b>¿Te ha llamado la atención probar alguna droga?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Si"
									@if(old('respuesta5') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="No"
									@if(old('respuesta5') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r5" value="{{ old('r5') }}">
							</div>
						</div>
						@if ($errors->has('respuesta5'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta5') }}</strong>
							</span>
						@endif
					</div>
					<div class="form-group col-md-3"><!--R6-->
						<label style="color: black;"><b>¿Tienes acceso a una computadora portátil o de escritorio en casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Si"
									@if(old('respuesta6') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="No"
									@if(old('respuesta6') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta6'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta6') }}</strong>
							</span>
						@endif												
					</div>
					<div class="form-group col-md-3"><!--R7-->
						<label style="color: black;"><b>¿Tienes acceso a internet en casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Si"
									@if(old('respuesta7') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="No"
									@if(old('respuesta7') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta7'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta7') }}</strong>
							</span>
						@endif													
					</div>	
					<div class="form-group col-md-3"><!--R8-->
						<label style="color: black;"><b>¿Tienes celular propio?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="Si"
									@if(old('respuesta8') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="No"
									@if(old('respuesta8') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						@if ($errors->has('respuesta8'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta8') }}</strong>
							</span>
						@endif												
					</div>	
					<div class="form-group col-md-3"><!--R9-->
						<label style="color: black;"><b>¿Cuántas horas al día haces uso del tu celular?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="Menos de 2 hrs"
									@if(old('respuesta9') == "Menos de 2 hrs") checked @endif>
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="De 2 a 4 hrs"
									@if(old('respuesta9') == "De 2 a 4 hrs") checked @endif>
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="Más de 4 hrs"
									@if(old('respuesta9') == "Más de 4 hrs") checked @endif>
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						@if ($errors->has('respuesta9'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta9') }}</strong>
							</span>
						@endif											
					</div>
					<div class="form-group col-md-3"><!--R10-->
						<label style="color: black;"><b>¿Cuántas horas al día ves televisión en tu casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="Menos de 2 hrs"
									@if(old('respuesta10') == "Menos de 2 hrs") checked @endif>
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="De 2 a 4 hrs"
									@if(old('respuesta10') == "De 2 a 4 hrs") checked @endif>
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta10" value="Más de 4 hrs"
									@if(old('respuesta10') == "Más de 4 hrs") checked @endif>
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta10'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta10') }}</strong>
							</span>
						@endif												
					</div>
					<div class="form-group col-md-3"><!--R11-->
						<label style="color: black;"><b>¿Cuántas horas al día haces uso de videojuegos?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="Menos de 2 hrs"
									@if(old('respuesta11') == "Menos de 2 hrs") checked @endif>
								Menos de 2 hrs 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="De 2 a 4 hrs"
									@if(old('respuesta11') == "De 2 a 4 hrs") checked @endif>
								De 2 a 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta11" value="Más de 4 hrs"
									@if(old('respuesta11') == "Más de 4 hrs") checked @endif>
								Más de 4 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta11'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta11') }}</strong>
							</span>
						@endif												
					</div>
					<div class="form-group col-md-3"><!--R12-->
						<label style="color: black;"><b>¿A qué hora te levantas para venir a la escuela?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="5:30 am"
									@if(old('respuesta12') == "5:30 am") checked @endif>
								5:30 am 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="6:00am"
									@if(old('respuesta12') == "6:00am") checked @endif>
								6:00am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="6:30 am"
									@if(old('respuesta12') == "6:30 am") checked @endif>
								6:30 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="7:00 am"
									@if(old('respuesta12') == "7:00 am") checked @endif>
								7:00 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta12" value="7:30 am"
									@if(old('respuesta12') == "7:30 am") checked @endif>
								7:30 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta12'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta12') }}</strong>
							</span>
						@endif											
					</div>
					<div class="form-group col-md-3"><!--R13-->
						<label style="color: black;"><b>¿A qué hora te duermes entre semana?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 9 y 10 pm"
									@if(old('respuesta13') == "Entre 9 y 10 pm") checked @endif>
								Entre 9 y 10 pm 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 11 y 12 pm"
									@if(old('respuesta13') == "Entre 11 y 12 pm") checked @endif>
								Entre 11 y 12 pm
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Entre 12 y 1 am"
									@if(old('respuesta13') == "Entre 12 y 1 am") checked @endif>
								Entre 12 y 1 am
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta13" value="Más de la 1"
									@if(old('respuesta13') == "Más de la 1") checked @endif>
								Más de la 1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta13'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta13') }}</strong>
							</span>
						@endif																	
					</div>
					<div class="form-group col-md-3"><!--R15-->
						<label style="color: black;"><b>¿Consideras que tu horario de alimentación es el correcto?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta15" value="Si"
									@if(old('respuesta15') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta15" value="No"
									@if(old('respuesta15') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Por qué?</label>
								<input type="text" class="form-control text-dark" name="r15" value="{{ old('r15') }}">
							</div>
						</div>
						@if ($errors->has('respuesta15'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta15') }}</strong>
							</span>
						@endif																					
					</div>
					<div class="form-group col-md-3"><!--R14-->
						<label style="color: black;"><b>¿Se te dificulta conciliar el sueño?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta14" value="Si"
									@if(old('respuesta14') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta14" value="No"
									@if(old('respuesta14') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Por qué?</label>
								<input type="text" class="form-control text-dark" name="r14" value="{{ old('r14') }}">
							</div>
						</div>
						@if ($errors->has('respuesta14'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta14') }}</strong>
							</span>
						@endif																					
					</div>
					<div class="form-group col-md-3"><!--R16-->
						<label style="color: black;"><b>¿Qué responsabilidades tienes dentro de casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Lavar trastes"
									@if(old('respuesta16') == "Lavar trastes") checked @endif>
								Lavar trastes 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Limpiar mi cuarto"
									@if(old('respuesta16') == "Limpiar mi cuarto") checked @endif>
								Limpiar mi cuarto
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Hacer de comer"
									@if(old('respuesta16') == "Hacer de comer") checked @endif>
								Hacer de comer
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta16" value="Comer"
									@if(old('respuesta16') == "Comer") checked @endif>
								Comer
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Otros?</label>
								<input type="text" class="form-control text-dark" placeholder="¿Cuales?" name="r16"
									value="{{ old('r16') }}">
							</div>
						</div>
						@if ($errors->has('respuesta16'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta16') }}</strong>
							</span>
						@endif																					
					</div>
					<div class="form-group col-md-3"><!--R17-->
						<label style="color: black;"><b>¿Cuentas con algún trabajo después de la escuela?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta17" value="Si"
									@if(old('respuesta17') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta17" value="No"
									@if(old('respuesta17') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">Cuál?</label>
								<input type="text" class="form-control text-dark"  name="r17" value="{{ old('r17') }}">
							</div>
						</div>																					
						<div class="form-check">
							<div class="form-check col-md-12">
								<label style="color: black;">¿Horario?</label>
								<input type="text" class="form-control text-dark"  name="r17_2" value="{{ old('r17_2') }}">
							</div>
						</div>
						@if ($errors->has('respuesta17'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta17') }}</strong>
							</span>
						@endif																						
					</div>						
					<div class="form-group col-md-4"><!--R18-->
						<label style="color: black;"><b>¿A qué persona le tienes confianza?</b></label><br>
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark"  name="respuesta18"
									value="{{ old('respuesta18') }}">
							</div>
						</div>
						@if ($errors->has('respuesta18'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta18') }}</strong>
							</span>
						@endif																						
					</div>
					<div class="form-group col-md-4"><!--R19-->
						<label style="color: black;"><b>¿A 	que persona le cuentas tus problemas?</b></label><br>
						<div class="form-check">
							<div class="form-check col-md-10">								
								<input type="text" class="form-control text-dark"  name="respuesta19"
									value="{{ old('respuesta19') }}">
							</div>
						</div>
						@if ($errors->has('respuesta19'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta19') }}</strong>
							</span>
						@endif																					
					</div>
					<div class="form-group col-md-4"><!--R3-->
						<label style="color: black;"><b>¿Te encuentras bajo tratamiento médico?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Si"
									@if(old('respuesta3') == "Si") checked @endif>
								Si 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="No"
									@if(old('respuesta3') == "No") checked @endif>
								No 
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
						<div class="form-check">
							<div class="form-check col-md-9">
								<label style="color: black;">¿Cuál?</label>
								<input type="text" class="form-control text-dark" name="r3" value="{{ old('r3') }}">	
							</div>
							<div class="form-check col-md-9">							
								<label style="color: black;">Horario</label>
								<input type="text" class="form-control text-dark" name="r3_2" value="{{ old('r3_2') }}">		
							</div>
						</div>
					</div>
					<h3>Marca SI o NO en las características y cualidades que consideres que tienes o no como persona</h3>	
					<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Características y Cualidades</th>								
								<th class="text-center">Si o No</th>
								<th class="text-center">#</th>
								<th class="text-center">Características y Cualidades</th>								
								<th class="text-center">Si o No</th>
							</tr>
						</thead>
						<tbody>
							<!--1/10-->
							<tr>
								<td class="text-center">1</td>
								<td class="text-center">ALEGRE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_1"  value="Si"
													@if(old('r20_1') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_1" value="No"
													@if(old('r20_1') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r20_1'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r20_1') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="text-center">10</td>
								<td class="text-center">CARIÑOSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_10" value="Si"
													@if(old('r20_10') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_10" value="No"
													@if(old('r20_10') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_10'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_10') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--2/11-->
							<tr>
								<td class="text-center">2</td>
								<td class="text-center">TRISTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_2" value="Si"
													@if(old('r20_2') == "Si") checked @endif> 
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_2" value="No"
													@if(old('r20_2') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_2'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_2') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">11</td>
								<td class="text-center">FRIO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_11" value="Si"
													@if(old('r20_11') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_11" value="No"
													@if(old('r20_11') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_11'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_11') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--3/12-->
							<tr>
								<td class="text-center">3</td>
								<td class="text-center">AGRESIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_3" value="Si"
													@if(old('r20_3') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_3" value="No"
													@if(old('r20_3') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_3'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_3') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">12</td>
								<td class="text-center">OBEDIENTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_12" value="Si"
													@if(old('r20_12') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_12" value="No"
													@if(old('r20_12') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_12'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_12') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--4/13-->
							<tr>
								<td class="text-center">4</td>
								<td class="text-center">DOCIL</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_4" value="Si"
													@if(old('r20_4') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_4" value="No"
													@if(old('r20_4') == "Si") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_4'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_4') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">13</td>
								<td class="text-center">MENTIROSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_13" value="Si"
													@if(old('r20_13') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_13" value="No"
													@if(old('r20_13') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_13'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_13') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--5/14-->
							<tr>
								<td class="text-center">5</td>
								<td class="text-center">TRANQUILO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_5" value="Si"
													@if(old('r20_5') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_5"  value="No"
													@if(old('r20_5') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_5'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_5') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">14</td>
								<td class="text-center">MEDIOSO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_14" value="Si"
													@if(old('r20_14') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_14" value="No"
													@if(old('r20_14') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_14'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_14') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--6/15-->
							<tr>
								<td class="text-center">6</td>
								<td class="text-center">INQUIETO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_6" value="Si"
													@if(old('r20_6') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_6" value="No"
													@if(old('r20_6') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_6'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_6') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">15</td>
								<td class="text-center">VALIENTE</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_15" value="Si"
													@if(old('r20_15') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio"  name="r20_15" value="No"
													@if(old('r20_15') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_15'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_15') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--7/16-->
							<tr>
								<td class="text-center">7</td>
								<td class="text-center">IMAGINATIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_7" value="Si" 
													@if(old('r20_7') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_7" value="No" 
													@if(old('r20_7') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_7'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_7') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">16</td>
								<td class="text-center">DISTRAIDO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_16" value="Si" 
													@if(old('r20_16') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_16" value="No" 
													@if(old('r20_16') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_16'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_16') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--8/17-->
							<tr>
								<td class="text-center">8</td>
								<td class="text-center">REALISTA</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_8" value="Si" 
													@if(old('r20_8') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_8" value="No" 
													@if(old('r20_8') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_8'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_8') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">17</td>
								<td class="text-center">ATENTO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_17" value="Si" 
													@if(old('r20_17') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_17" value="No" 
													@if(old('r20_17') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_17'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_17') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--9/18-->
							<tr>
								<td class="text-center">9</td>
								<td class="text-center">EXPRESIVO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_9" value="Si" 
													@if(old('r20_9') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_9" value="No" 
													@if(old('r20_9') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_9'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_9') }}</strong>
										</span>
									@endif
								</td>
								<td class="text-center">18</td>
								<td class="text-center">INTROVERTIDO</td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_18" value="Si" 
													@if(old('r20_18') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" name="r20_18" value="No" 
													@if(old('r20_18') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>										
									</div><br>
									@if ($errors->has('r20_18'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_18') }}</strong>
										</span>
									@endif
								</td>
							</tr>															
						</tbody>
					</table>														
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
