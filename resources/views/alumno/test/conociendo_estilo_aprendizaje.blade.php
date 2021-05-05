@extends('layouts.app')

@section('titulo','Conociendo los estilos de aprendizaje')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Conociendo los estilos de aprendizaje de los tutorados</h2>
			<h4 style="margin-bottom: 20px;" class="text-justify"><b>Instrucciones:</b> Lee con atención el siguiente cuestionario y marca en las columnas de la derecha el número que corresponda a tu respuesta, de acuerdo con la siguiente escala:</h4>

			<div class="table-responsive">
				<table class="table table-borderless">				
					<tbody>
						<tr>						
							<td class="text-center">NUNCA<br>1</td>
							<td class="text-center">RARA VEZ <br>2</td>
							<td class="text-center">A VECES <br>3</td>
							<td class="text-center">CASI SIEMPRE <br>4</td>
							<td class="text-center">SIEMPRE <br>5</td>
						</tr>						
					</tbody>
				</table>				
			</div>
			
			<form method="post" action="{{url('alumno/test/conociendo_estilos_aprendizaje')}}">
				{{ csrf_field() }} 
				<div class="table-responsive">       												
					<table class="table table-bordered">				
						<tbody>
							<!--R1-->
							<tr>							
								<td>Tomo muchas notas y me gusta garabatear mientras escucho una clase o conferencia.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="1"
									    	@if(old('respuesta1') == "1") checked @endif
									    > 
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="2"
									    	@if(old('respuesta1') == "2") checked @endif
									    > 
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="3"
									    	@if(old('respuesta1') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="4"
									    	@if(old('respuesta1') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta1" value="5"
									    	@if(old('respuesta1') == "5") checked @endif
									    >
									    5
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
								<td>Cuando leo, lo hago en voz alta o muevo los labios para escuchar las palabras de mi mente.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="1"
									    	@if(old('respuesta2') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="2"
									    	@if(old('respuesta2') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="3"
									    	@if(old('respuesta2') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="4"
									    	@if(old('respuesta2') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta2" value="5"
									    	@if(old('respuesta2') == "5") checked @endif
									    >
									    5
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
								<td>Prefiero actuar directamente, probando lo que tengo que hacer, en vez de seguir instrucciones <br>dadas por alguien.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="1"
									    	@if(old('respuesta3') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="2"
									    	@if(old('respuesta3') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="3"
									    	@if(old('respuesta3') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="4"
									    	@if(old('respuesta3') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta3" value="5"
									    	@if(old('respuesta3') == "5") checked @endif
									    >
									    5
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
								<td>Se me dificulta conversar con alguien que no me mire a los ojos.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="1"
									    	@if(old('respuesta4') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="2"
									    	@if(old('respuesta4') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="3"
									    	@if(old('respuesta4') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="4"
									    	@if(old('respuesta4') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta4" value="5"
									    	@if(old('respuesta4') == "5") checked @endif
									    >
									    5
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
								<td>Se me dificulta platicar con alguien que permanece frío o indiferente.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="1"
									    	@if(old('respuesta5') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="2"
									    	@if(old('respuesta5') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="3"
									    	@if(old('respuesta5') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="4"
									    	@if(old('respuesta5') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta5" value="5"
									    	@if(old('respuesta5') == "5") checked @endif
									    >
									    5
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
								<td>Se me dificulta platicar con alguien que permanece en silencio sin responderme.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="1"
									    	@if(old('respuesta6') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="2"
									    	@if(old('respuesta6') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="3"
									    	@if(old('respuesta6') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="4"
									    	@if(old('respuesta6') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta6" value="5"
									    	@if(old('respuesta6') == "5") checked @endif
									    >
									    5
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
								<td>Escribo listas de lo que tengo que hacer para recordar mejor.</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="1"
									    	@if(old('respuesta7') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="2"
									    	@if(old('respuesta7') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="3"
									    	@if(old('respuesta7') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="4"
									    	@if(old('respuesta7') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta7" value="5"
									    	@if(old('respuesta7') == "5") checked @endif
									    >
									    5
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
								<td>Aunque no tome notas porque me distraigo, puedo recordar lo que alguien haya <br>dicho en clase o conferencia.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="1"
									    	@if(old('respuesta8') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="2"
									    	@if(old('respuesta8') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="3"
									    	@if(old('respuesta8') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="4"
									    	@if(old('respuesta8') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta8" value="5"
									    	@if(old('respuesta8') == "5") checked @endif
									    >
									    5
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
								<td>Cuando leo una novela, pongo mucha atención a los pasajes <br>que describen detalles de vestuario, lugares, etc.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="1"
									    	@if(old('respuesta9') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="2"
									    	@if(old('respuesta9') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="3"
									    	@if(old('respuesta9') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="4"
									    	@if(old('respuesta9') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta9" value="5"
									    	@if(old('respuesta9') == "5") checked @endif
									    >
									    5
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
								<td>Cuando leo una novela me concentro en los diálogos y conversaciones entre los personajes.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="1"
									    	@if(old('respuesta10') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="2"
									    	@if(old('respuesta10') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="3"
									    	@if(old('respuesta10') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="4"
									    	@if(old('respuesta10') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta10" value="5"
									    	@if(old('respuesta10') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta10'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta10') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R11-->
							<tr>
								<td>Tomo notas y apuntes de clase, pero raramente los vuelvo a consultar.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="1"
									    	@if(old('respuesta11') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="2"
									    	@if(old('respuesta11') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="3"
									    	@if(old('respuesta11') == "3") checked @endif
								    	>
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="4"
									    	@if(old('respuesta11') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta11" value="5"
									    	@if(old('respuesta11') == "5") checked @endif
									    >
									    5
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
								<td>Necesito escribir las instrucciones para poder seguirlas en orden.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="1"
									    	@if(old('respuesta12') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="2"
									    	@if(old('respuesta12') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="3"
									    	@if(old('respuesta12') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="4"
									    	@if(old('respuesta12') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta12" value="5"
									    	@if(old('respuesta12') == "5") checked @endif
									    >
									    5
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
								<td>Me gusta pensar en voz alta cuando escribo o resuelvo problemas.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
								    	<input class="form-check-input" type="radio" name="respuesta13" value="1"
								    		@if(old('respuesta13') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="2"
									    	@if(old('respuesta13') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="3"
									    	@if(old('respuesta13') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="4"
									    	@if(old('respuesta13') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta13" value="5"
									    	@if(old('respuesta13') == "5") checked @endif
									    >
									    5
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
								<td>Cuando elijo qué leer, prefiero novelas, cuentos o relatos de acción,<br> en los que se plasme el drama y el 
									sentimiento entre los personajes.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta14" value="1"
									    	@if(old('respuesta14') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta14" value="2"
									    	@if(old('respuesta14') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta14" value="3"
									    	@if(old('respuesta14') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta14" value="4"
									    	@if(old('respuesta14') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta14" value="5"
									    	@if(old('respuesta14') == "5") checked @endif
									    >
									    5
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
								<td>Puedo comprender lo que alguien dice, aun sin observar sus gestos al hablar.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta15" value="1"
									    	@if(old('respuesta15') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta15" value="2"
									    	@if(old('respuesta15') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta15" value="3"
									    	@if(old('respuesta15') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta15" value="4"
									    	@if(old('respuesta15') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta15" value="5"
									    	@if(old('respuesta15') == "5") checked @endif
									    >
									    5
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
							<!--R16-->
							<tr>
								<td>Necesito observar a la persona con la que platico para poder mantener la <br>atención en el tema de 
									conversación.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta16" value="1"
									    	@if(old('respuesta16') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta16" value="2"
									    	@if(old('respuesta16') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta16" value="3"
									    	@if(old('respuesta16') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta16" value="4"
									    	@if(old('respuesta16') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta16" value="5"
									    	@if(old('respuesta16') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta16'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta16') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R17-->
							<tr>
								<td>Recuerdo mejor las cosas cuando las digo otra vez.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta17" value="1"
									    	@if(old('respuesta17') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta17" value="2"
									    	@if(old('respuesta17') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta17" value="3"
									    	@if(old('respuesta17') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta17" value="4"
									    	@if(old('respuesta17') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta17" value="5"
									    	@if(old('respuesta17') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta17'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta17') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R18-->
							<tr>
								<td>Cuando conozco por primera vez a una persona, me fijo en sus rasgos <br>faciales y en su apariencia.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta18" value="1"
									    	@if(old('respuesta18') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta18" value="2"
									    	@if(old('respuesta18') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta18" value="3"
									    	@if(old('respuesta18') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta18" value="4"
									    	@if(old('respuesta18') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta18" value="5"
									    	@if(old('respuesta18') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta18'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta18') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R19-->
							<tr>
								<td>Cuando leo en silencio, muevo los labios al ritmo de la lectura.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta19" value="1"
									    	@if(old('respuesta19') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta19" value="2"
									    	@if(old('respuesta19') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta19" value="3"
									    	@if(old('respuesta19') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta19" value="4"
									    	@if(old('respuesta19') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta19" value="5"
									    	@if(old('respuesta19') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta19'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta19') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R20-->
							<tr>
								<td>Me gusta profundizar en temas interesantes cuando me encuentro <br>con alguien dispuesto a conversar.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta20" value="1"
									    	@if(old('respuesta20') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta20" value="2"
									    	@if(old('respuesta20') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta20" value="3"
									    	@if(old('respuesta20') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta20" value="4"
									    	@if(old('respuesta20') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta20" value="5"
									    	@if(old('respuesta20') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta20'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta20') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R21-->
							<tr>
								<td>Cuando estoy en una fiesta o reunión, me gusta sentarme y observar a la gente.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta21" value="1"
									    	@if(old('respuesta21') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta21" value="2"
									    	@if(old('respuesta21') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta21" value="3"
									    	@if(old('respuesta21') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta21" value="4"
									    	@if(old('respuesta21') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta21" value="5"
									    	@if(old('respuesta21') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta21'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta21') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R22-->
							<tr>
								<td>Cuando platico sobre algo, hago ademanes y gestos para enfatizar.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta22" value="1"
									    	@if(old('respuesta22') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta22" value="2"
									    	@if(old('respuesta22') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta22" value="3"
									    	@if(old('respuesta22') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta22" value="4"
									    	@if(old('respuesta22') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta22" value="5"
									    	@if(old('respuesta22') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta22'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta22') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R23-->
							<tr>
								<td>Cuando recuerdo algún hecho, puedo verlo mentalmente, con detalles de dónde y cómo lo vi.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta23" value="1"
									    	@if(old('respuesta23') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta23" value="2"
									    	@if(old('respuesta23') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta23" value="3"
									    	@if(old('respuesta23') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta23" value="4"
									    	@if(old('respuesta23') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta23" value="5"
									    	@if(old('respuesta23') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta23'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta23') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R24-->
							<tr>
								<td>Prefiero escuchar noticias en la radio que leer el periódico.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta24" value="1"
									    	@if(old('respuesta24') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta24" value="2"
									    	@if(old('respuesta24') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta24" value="3"
									    	@if(old('respuesta24') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta24" value="4"
									    	@if(old('respuesta24') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta24" value="5"
									    	@if(old('respuesta24') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta24'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta24') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R25-->
							<tr>
								<td>Mi escritorio y lugar de estudio lucen desordenados.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta25" value="1"
									    	@if(old('respuesta25') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta25" value="2"
									    	@if(old('respuesta25') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta25" value="3"
									    	@if(old('respuesta25') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta25" value="4"
									    	@if(old('respuesta25') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta25" value="5"
									    	@if(old('respuesta25') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta25'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta25') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R26-->
							<tr>
								<td>Cuando asisto a una fiesta o reunión, me gusta involucrarme en <br>ella (bailar, jugar..) en vez de permanecer al margen.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta26" value="1"
									    	@if(old('respuesta26') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta26" value="2"
									    	@if(old('respuesta26') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta26" value="3"
									    	@if(old('respuesta26') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta26" value="4"
									    	@if(old('respuesta26') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta26" value="5"
									    	@if(old('respuesta26') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta26'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta26') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R27-->
							<tr>
								<td>Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo por escrito o con dibujos o gráficos.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta27" value="1"
									    	@if(old('respuesta27') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta27" value="2"
									    	@if(old('respuesta27') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta27" value="3"
									    	@if(old('respuesta27') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta27" value="4"
									    	@if(old('respuesta27') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta27" value="5"
									    	@if(old('respuesta27') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta27'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta27') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R28-->
							<tr>
								<td>Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo oralmente, de manera directa.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta28" value="1"
									    	@if(old('respuesta28') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta28" value="2"
									    	@if(old('respuesta28') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta28" value="3"
									    	@if(old('respuesta28') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta28" value="4"
									    	@if(old('respuesta28') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta28" value="5"
								    		@if(old('respuesta28') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta28'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta28') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R29-->
							<tr>
								<td>Cuando estoy en una reunión, me gusta moverme, no permanecer sentado.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta29" value="1"
									    	@if(old('respuesta29') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta29" value="2"
									    	@if(old('respuesta29') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta29" value="3"
									    	@if(old('respuesta29') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta29" value="4"
									    	@if(old('respuesta29') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta29" value="5"
									    	@if(old('respuesta29') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta29'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta29') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R30-->
							<tr>
								<td>En mi tiempo libre, lo más probable es que lea o que vea TV.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta30" value="1"
									    	@if(old('respuesta30') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta30" value="2"
									    	@if(old('respuesta30') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta30" value="3"
									    	@if(old('respuesta30') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta30" value="4"
									    	@if(old('respuesta30') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta30" value="5"
									    	@if(old('respuesta30') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta30'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta30') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R31-->
							<tr>
								<td>Si tuviera que explicar a alguien cómo realizar una actividad, <br>preferiría hacerlo mostrándole cómo.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta31" value="1"
									    	@if(old('respuesta31') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta31" value="2"
									    	@if(old('respuesta31') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta31" value="3"
									    	@if(old('respuesta31') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta31" value="4"
									    	@if(old('respuesta31') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta31" value="5"
									    	@if(old('respuesta31') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta31'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta31') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R32-->
							<tr>
								<td>En mi tiempo libre, lo más probable es que prefiera escuchar música.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta32" value="1"
									    	@if(old('respuesta32') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta32" value="2"
									    	@if(old('respuesta32') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta32" value="3"
									    	@if(old('respuesta32') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta32" value="4"
									    	@if(old('respuesta32') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta32" value="5"
									    	@if(old('respuesta32') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta32'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta32') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R33-->
							<tr>
								<td>En mi tiempo libre, lo más probable es que prefiera hacer ejercicio físico o deporte.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta33" value="1"
									    	@if(old('respuesta33') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta33" value="2"
									    	@if(old('respuesta33') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta33" value="3"
									    	@if(old('respuesta33') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta33" value="4"
									    	@if(old('respuesta33') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta33" value="5"
									    	@if(old('respuesta33') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta33'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta33') }}</strong>
										</span>
									@endif
								</td>							
							</tr>
							<!--R34-->
							<tr>
								<td>Si tuviera que recibir instrucciones precisas sobre lo que tengo que <br>hacer, me sentiría mejor si me las dijeran verbalmente.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta34" value="1"
									    	@if(old('respuesta34') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta34" value="2"
									    	@if(old('respuesta34') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta34" value="3"
									    	@if(old('respuesta34') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta34" value="4"
									    	@if(old('respuesta34') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta34" value="5"
									    	@if(old('respuesta34') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta34'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta34') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
							<!--R35-->
							<tr>
								<td>Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br>me sentiría mejor si fuera por escrito.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta35" value="1"
									    	@if(old('respuesta35') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta35" value="2"
									    	@if(old('respuesta35') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta35" value="3"
									    	@if(old('respuesta35') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta35" value="4"
									    	@if(old('respuesta35') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta35" value="5"
									    	@if(old('respuesta35') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta35'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta35') }}</strong>
										</span>
									@endif
								</td>							
							</tr>
							<!--R36-->
							<tr>
								<td>Si tuviera que recibir instrucciones sobre lo que tengo que hacer,<br> me sentiría mejor si me mostrasen cómo hacerlo.
								</td>
								<td colspan="5" class="text-center">
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta36" value="1"
									    	@if(old('respuesta36') == "1") checked @endif
									    >
									    1
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta36" value="2"
									    	@if(old('respuesta36') == "2") checked @endif
									    >
									    2
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta36" value="3"
									    	@if(old('respuesta36') == "3") checked @endif
									    >
									    3
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>							
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta36" value="4"
									    	@if(old('respuesta36') == "4") checked @endif
									    >
									    4
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div>
									<div class="form-check form-check-radio form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="respuesta36" value="5"
									    	@if(old('respuesta36') == "5") checked @endif
									    >
									    5
									    <span class="circle">
									        <span class="check"></span>
									    </span>
									  </label>
									</div><br>
									@if ($errors->has('respuesta36'))
										<span class="help-block text-danger">
											<strong>{{ $errors->first('respuesta36') }}</strong>
										</span>
									@endif	
								</td>							
							</tr>
						</tbody>
					</table>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/alumno/test')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
