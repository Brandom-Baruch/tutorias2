@extends('layouts.app')

@section('titulo','Niveles de empatia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Cuestionario: Niveles de empatía</h2>
			<h4 style="margin-bottom: 20px; text-align: center;" >La empatía incluye reconocer cómo se está sintiendo otra persona, teniendo 	la perspectiva de esa persona, en una escala de 1 a 5 <br>(siendo 1 “baja empatía” y 5 “alta empatía”), califique el nivel de 
				empatía que siente para cada persona en las siguientes situaciones.
			</h4>			
			<form method="post" action="{{url('alumno/cuestionario/nivel_empatia')}}">
				{{ csrf_field() }}        												
				<div class="form-row" style="margin: auto;">
					<!--R1-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Un estudiante que no conoces es suspendido de la escuela por algo que no hizo.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="1"
									@if(old('respuesta1') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="2"
									@if(old('respuesta1') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="3"
									@if(old('respuesta1') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="4"
									@if(old('respuesta1') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="5"
									@if(old('respuesta1') == "5") checked @endif>
								5
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
					<!--R3-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Un estudiante de una de tus clases dice sentirse triste porque tiene problemas en casa.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="1"
									@if(old('respuesta3') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="2"
									@if(old('respuesta3') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="3"
									@if(old('respuesta3') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="4"
									@if(old('respuesta3') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="5"
									@if(old('respuesta3') == "5") checked @endif>
								5
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
						<label style="color: black;"><b>Escuchas que un estudiante que apenas conoces se mudará a otro estado.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="1"
									@if(old('respuesta4') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="2"
									@if(old('respuesta4') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="3"
									@if(old('respuesta4') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="4"
									@if(old('respuesta4') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="5"
									@if(old('respuesta4') == "5") checked @endif>
								5
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
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Tu maestra está triste y desilusionada porque el grupo salió muy mal en un examen
							importante.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="1"
									@if(old('respuesta5') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="2"
									@if(old('respuesta5') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="3"
									@if(old('respuesta5') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="4"
									@if(old('respuesta5') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="5"
									@if(old('respuesta5') == "5") checked @endif>
								5
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						@if ($errors->has('respuesta5'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta5') }}</strong>
							</span>
						@endif						
					</div>
					<!--R6-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Un estudiante que conoces ya no puede pagar el transporte para llegar a la escuela.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="1"
									@if(old('respuesta6') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="2"
									@if(old('respuesta6') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="3"
									@if(old('respuesta6') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="4"
									@if(old('respuesta6') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="5"
									@if(old('respuesta6') == "5") checked @endif>
								5
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
					<!--R7-->
					<div class="form-group col-md-6">
						<label style="color: black;">
							<b>Un estudiante con el que no tienes mucho en común está siendo víctima de acoso
							escolar.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="1"
									@if(old('respuesta7') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="2"
									@if(old('respuesta7') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="3"
									@if(old('respuesta7') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="4"
									@if(old('respuesta7') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="5"
									@if(old('respuesta7') == "5") checked @endif>
								5
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
					<!--R9-->
					<div class="form-group col-md-4">
						<label style="color: black;">
							<b>El perro de un amigo murió.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="1"
									@if(old('respuesta9') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="2"
									@if(old('respuesta9') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="3"
									@if(old('respuesta9') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="4"
									@if(old('respuesta9') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta9" value="5"
									@if(old('respuesta9') == "5") checked @endif>
								5
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
					<!--R8-->
					<div class="form-group col-md-4">
						<label style="color: black;">
							<b>Tu mamá o tu papá tuvieron un mal día en el trabajo.</b>
						</label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="1"
									@if(old('respuesta8') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="2"
									@if(old('respuesta8') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="3"
									@if(old('respuesta8') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="4"
									@if(old('respuesta8') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta8" value="5"
									@if(old('respuesta8') == "5") checked @endif>
								5
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
					<!--R2-->
					<div class="form-group col-md-4">
						<label style="color: black;"><b>Un amigo cercano es castigado por sus padres una semana.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="1"
									@if(old('respuesta2') == "1") checked @endif>
								1
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="2"
									@if(old('respuesta2') == "2") checked @endif>
								2
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="3"
									@if(old('respuesta2') == "3") checked @endif>
								3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="4"
									@if(old('respuesta2') == "4") checked @endif>
								4
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="5"
									@if(old('respuesta2') == "5") checked @endif>
								5
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
