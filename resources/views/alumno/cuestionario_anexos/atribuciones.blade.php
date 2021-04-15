@extends('layouts.app')

@section('titulo','Atribuciones')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="margin-bottom: 30px;">Cuestionario: Atribuciones</h2>
			<h4 style="margin-bottom: 20px;" class="text-center">Selecciona la respuesta que es más probable que sea cierta en las siguientes situaciones.</h4>			
			<form method="post" action="{{url('alumno/cuestionario/atribuciones')}}">
				{{ csrf_field() }}        												
				<div class="form-row" style="margin: auto;">
					<!--R2-->
					<div class="form-group col-md-4">
						<label style="color: black;"><b>Un estudiante te observa durante todo el recreo.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" 
									value="El estudiante quiere hablar contigo" 
									@if(old('respuesta2') == "El estudiante quiere hablar contigo") checked @endif
								>
								El estudiante quiere hablar contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" 
									value="El estudiante quiere pelear contigo" 
									@if(old('respuesta2') == "El estudiante quiere pelear contigo") checked @endif
								>
								El estudiante quiere pelear contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" 
									value="No le caes bien al estudiante"
								 	@if(old('respuesta2') == "No le caes bien al estudiante") checked @endif
								>
								No le caes bien al estudiante.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" 
									value="El estudiante tiene un problema contigo" 
									@if(old('respuesta2') == "El estudiante tiene un problema contigo") checked @endif
								>
								El estudiante tiene un problema contigo.
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
					<!--R6-->															
					<div class="form-group col-md-4">
						<label style="color: black;"><b>Alguien escribió algo negativo de ti en el pizarrón.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" 
									value="Alguien está tratando de hacerte daño" 
									@if(old('respuesta6') == "Alguien está tratando de hacerte daño") checked @endif
								>
								Alguien está tratando de hacerte daño.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" 
									value="No sabes qué pensar"
									@if(old('respuesta6') == "No sabes qué pensar") checked @endif
								>
								No sabes qué pensar.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" 
									value="Alguien te tiene envidia"
									@if(old('respuesta6') == "Alguien te tiene envidia") checked @endif
								>
								Alguien te tiene envidia.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" 
									value="Alguien quiere afectar tu reputación" 
									@if(old('respuesta6') == "Alguien quiere afectar tu reputación") checked @endif
								>
								Alguien quiere afectar tu reputación.
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
					<!--R4-->
					<div class="form-group col-md-4">
						<label style="color: black; text-align: justify;"><b>Un amigo te grita cuando intentas consolarlo por el divorcio de sus padres.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" 
									value="Tu amigo es mala onda"
									@if(old('respuesta4') == "Tu amigo es mala onda") checked @endif
								>
								Tu amigo es mala onda.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" 
									value="Tu amigo no quiere tu ayuda"
									@if(old('respuesta4') == "Tu amigo no quiere tu ayuda") checked @endif
								>
								Tu amigo no quiere tu ayuda.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" 
									value="Tu amigo está molesto por el divorcio de sus padres" 
									@if(old('respuesta4') == "Tu amigo está molesto por el divorcio de sus padres") checked @endif
								>
								Tu amigo está molesto por el divorcio de sus padres.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" 
									value="Tu amigo es muy enojón"
									@if(old('respuesta4') == "Tu amigo es muy enojón") checked @endif
								>
								Tu amigo es muy enojón.
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
					<!--R1-->					
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Tu maestra(o) califica tus tareas con más comentarios que los de tus amigos.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" 
									value="A tu maestra(o) le caen mejor tus amigos que tú"
								  	@if(old('respuesta1') == "A tu maestra(o) le caen mejor tus amigos que tú") checked @endif
								>
								A tu maestra(o) le caen mejor tus amigos que tú.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" 
									value="Tu maestra(o) cree que no te esfuerzas lo suficiente"
									@if(old('respuesta1') == "Tu maestra(o) cree que no te esfuerzas lo suficiente") checked @endif
								>
								Tu maestra(o) cree que no te esfuerzas lo suficiente.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" 
									value="Tu maestra cree que puedes mejorar"
									@if(old('respuesta1') == "Tu maestra cree que puedes mejorar") checked @endif
								>
								Tu maestra cree que puedes mejorar. 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" 
									value="Tu maestra cree que te desempeñas muy mal"
									@if(old('respuesta1') == "Tu maestra cree que te desempeñas muy mal") checked @endif
								>
								Tu maestra cree que te desempeñas muy mal.
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
					<!--R5-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Tu amigo(a) quiere llamar la atención de un(a) compañera (compañero).</b>
						</label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" 
									value="Tu amigo(a) quiere estar con él(ella) en lugar de contigo"
								 	@if(old('respuesta5') == "Tu amigo(a) quiere estar con él(ella) en lugar de contigo") checked 
								 	@endif
								>
								Tu amigo(a) quiere estar con él(ella) en lugar de contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" 
									value="Tu amigo(a) está cansado(a) de ti" 
									@if(old('respuesta5') == "Tu amigo(a) está cansado(a) de ti") checked @endif
								>
								Tu amigo(a) está cansado(a) de ti.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" 
									value="Tu amigo(a) no es confiable y no es un amigo(a) de verdad"
								 	@if(old('respuesta5') == "Tu amigo(a) no es confiable y no es un amigo(a) de verdad") 
								 		checked 
								 	@endif
								>
								Tu amigo(a) no es confiable y no es un amigo(a) de verdad.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" 
									value="Tu amigo(a) simplemente quiere ampliar su círculo de amigos"
								 	@if(old('respuesta5') == "Tu amigo(a) simplemente quiere ampliar su círculo de amigos") 
								 		checked 
								 	@endif
								>
								Tu amigo(a) simplemente quiere ampliar su círculo de amigos.
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
					<!--R7-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>Te llaman a la oficina del director después de que fuiste testigo de una pelea en el pasillo.</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" 
									value="El director cree que fuiste parte de la pelea" 
									@if(old('respuesta7') == "El director cree que fuiste parte de la pelea") checked @endif
								>
								El director cree que fuiste parte de la pelea.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" 
									value="El director cree que eres culpable por haber observado"
									@if(old('respuesta7') == "El director cree que eres culpable por haber observado") checked 
									@endif
								>
								El director cree que eres culpable por haber observado.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" 
									value="El director quiere escuchar lo que tienes que decir"
									@if(old('respuesta7') == "El director quiere escuchar lo que tienes que decir") checked @endif
								>
								El director quiere escuchar lo que tienes que decir.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" 
									value="El director está enojado y quiere sermonear a todos los que estuvieron ahí"
									@if(old('respuesta7') == "El director está enojado y quiere sermonear a todos los que estuvieron ahí") checked 
									@endif
								>
								El director está enojado y quiere sermonear a todos los que estuvieron ahí.
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
					<!--R3-->
					<div class="form-group col-md-6">
						<label style="color: black;"><b>A un amigo tuyo lo escogen para ser parte de un equipo que participará en un concurso académico y ya no tiene tanto tiempo para estar contigo.</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" 
									value="Tu amigo ya no quiere hacer cosas contigo"
									@if(old('respuesta3') == "Tu amigo ya no quiere hacer cosas contigo") checked @endif
								>
								Tu amigo ya no quiere hacer cosas contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" 
									value="Tu amigo está muy ocupado o cansado para hacer cosas contigo"
									@if(old('respuesta3') == "Tu amigo está muy ocupado o cansado para hacer cosas contigo") 
										checked
									@endif
								>
								Tu amigo está muy ocupado o cansado para hacer cosas contigo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" 
									value="Tu amigo prefiere estar con sus nuevos compañeros de equipo"
									@if(old('respuesta3') == "Tu amigo prefiere estar con sus nuevos compañeros de equipo") checked @endif
								>
								Tu amigo prefiere estar con sus nuevos compañeros de equipo.
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" 
									value="A tu amigo no le interesa mucho tu amistad"
									@if(old('respuesta3') == "A tu amigo no le interesa mucho tu amistad") checked @endif
								>
								A tu amigo no le interesa mucho tu amistad.
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
