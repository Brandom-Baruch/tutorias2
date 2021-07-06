@extends('layouts.app')

@section('titulo','Perfil Academico')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
<a href="{{url('alumno/encuestas')}}" class="dropdown-item">Panel de entrevistas</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center">
				Cuestionario sobre el perfil academico				
			</h3>
			<form method="post" action="{{url('alumno/cuestionario/perfil_academico')}}">		
				{{csrf_field()}}		
				<div class="row">					
					<div class="col-md-6">
						<label for="inputState">Escuela de procedencia</label>
						<input type="text" name="escuela_procedencia" class="form-control mt-1" 
							value="{{ old('escuela_procedencia') }}"
						>
						@if ($errors->has('escuela_procedencia'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('escuela_procedencia') }}</strong>
							</span>
						@endif					    
					</div>
					<div class="col-md-6">
						<label for="inputState">Ubicación de la escuela secundaria de prosedencia</label>
						<input type="text" name="ubicacion_escuela" class="form-control mt-1" 
							value="{{ old('ubicacion_escuela') }}"
						>
						@if ($errors->has('ubicacion_escuela'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('ubicacion_escuela') }}</strong>
							</span>
						@endif					    
					</div>
				</div><br>				
				<div class="table-responsive">
					<table class="table table-bordered">				
					 	<thead>
						    <tr>
						      <th scope="col" class="text-center">N°</th>
						      <th scope="col" class="text-center">Descripción</th>
						      <th scope="col" class="text-center">Respuesta <br> (V/F)</th>						      
						    </tr>
					  	</thead>	
						<tbody>							
							<!--R1-->
							<tr>
								<td>1</td>							
								<td>Mi promedio de la secundaria es de igual o mayor a 7</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta1" value="V"
									    	@if(old('respuesta1') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta1" value="F"
									    	@if(old('respuesta1') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta1'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta1') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R2-->
							<tr>
								<td>2</td>							
								<td>Reprobé 2 o más materias en la secundaria</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta2" value="V"
									    	@if(old('respuesta2') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta2" value="F"
									    	@if(old('respuesta2') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta2'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta2') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R3-->
							<tr>
								<td>3</td>							
								<td>Yo elegí el plantel de bachillerato al que asisto</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta3" value="V"
									    	@if(old('respuesta3') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta3" value="F"
									    	@if(old('respuesta3') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta3'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta3') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>													
							<!--R4-->
							<tr>
								<td>4</td>							
								<td>Asisto a la Media Superior porque creo que me sería útil</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta4" value="V"
									    	@if(old('respuesta4') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta4" value="F"
									    	@if(old('respuesta4') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta4'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta4') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R5-->
							<tr>
								<td>5</td>							
								<td>Me gusta la escuela</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta5" value="V"
									    	@if(old('respuesta5') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta5" value="F"
									    	@if(old('respuesta5') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta5'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta5') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R6-->
							<tr>
								<td>6</td>							
								<td>Soy bueno para estudiar</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta6" value="V"
									    	@if(old('respuesta6') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta6" value="F"
									    	@if(old('respuesta6') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta6'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta6') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R7-->
							<tr>
								<td>7</td>							
								<td>En la secundaria sentía confianza con algún maestro(a) como para platicar con él(ella)</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta7" value="V"
									    	@if(old('respuesta7') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta7" value="F"
									    	@if(old('respuesta7') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta7'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta7') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R8-->
							<tr>
								<td>8</td>							
								<td>En la secundaria preguntaba mis dudas al maestro(a)</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta8" value="V"
									    	@if(old('respuesta8') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta8" value="F"
									    	@if(old('respuesta8') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta8'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta8') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R9-->
							<tr>
								<td>9</td>							
								<td>En la secundaria me molestaban con frecuencia otro u otros <br>compañeros (burlas, intimidación, golpes, extorsiones, etc.)</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta9" value="V"
									    	@if(old('respuesta9') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta9" value="F"
									    	@if(old('respuesta9') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta9'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta9') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R10-->
							<tr>
								<td>10</td>							
								<td>Si yo reprobara alguna materia, se lo platicaría a mi mamá o mi papá</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta10" value="V"
									    	@if(old('respuesta10') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta10" value="F"
									    	@if(old('respuesta10') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta9'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta9') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R11-->
							<tr>
								<td>11</td>							
								<td>Si tuviera un problema personal, lo platicaría con mi mamá o mi papá</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta11" value="V"
									    	@if(old('respuesta11') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta11" value="F"
									    	@if(old('respuesta11') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta11'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta11') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R12-->
							<tr>
								<td>12</td>							
								<td>Me gustaría emigrar a los Estados Unidos en los próximos 5 años</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta12" value="V"
									    	@if(old('respuesta12') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta12" value="F"
									    	@if(old('respuesta12') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta12'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta12') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R13-->
							<tr>
								<td>13</td>							
								<td>Es posible que me case o viva con mi pareja antes de terminar el bachillerato</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta13" value="V"
									    	@if(old('respuesta13') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta13" value="F"
									    	@if(old('respuesta13') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta13'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta13') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R14-->
							<tr>
								<td>14</td>							
								<td>En mi casa hemos tenido problemas económicos serios <br>(deudas, no alcanza para los gastos del diario, etc).</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta14" value="V"
									    	@if(old('respuesta14') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta14" value="F"
									    	@if(old('respuesta14') == "F") checked @endif
									    > 
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta14'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta14') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
							<!--R15-->
							<tr>
								<td>15</td>							
								<td>Es más importante trabajar que estudiar</td>
								<td class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta15" value="V"
									    	@if(old('respuesta15') == "V") checked @endif
									    >
									    V
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label" style="color: black;">
									    <input class="form-check-input" type="radio" name="respuesta15" value="F"
									    	@if(old('respuesta15') == "F") checked @endif
									    >
									    F
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta15'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta15') }}</strong>
										</span>
									@endif									
								</td>							
							</tr>
						</tbody>
					</table>
				</div>
				<h4 class="text-center">Gracias!</h4>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/encuestas')}}" class="btn btn-danger">Regresar</a>
				</div>
			</form>              
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
