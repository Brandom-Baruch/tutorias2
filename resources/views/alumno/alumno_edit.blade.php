@extends('layouts.app')

@section('titulo','Editar información')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<h2 class="title text-center" style="color:black;">Datos del  alumno <b class="text-primary">{{Auth::user()->name}}</b></h2>			
			<form method="post" action="{{url('/alumno/'.Auth::user()->nia.'/edit')}}">                            
				{{ csrf_field() }}
				<div class="row"> 
					<div class="col-sm-4">													
						<div class="form-group ">
							<label class="text-dark">NIA</label>
							<input type="number" class="form-control"                               
								   value="{{ old('nia', Auth::user()->nia) }}" 
								   disabled=»disabled»
								   placeholder="Coloca un NIA" 
							>            
						</div>                          
					</div>
					<div class="col-sm-4">													
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label class="text-dark">Nombre(s)</label>
							<input type="text" class="form-control" 
								   placeholder="Escribe un nombre/s" 
								   value="{{ old('name', Auth::user()->name) }}" 
								   name="name"
							>
						</div>
						@if ($errors->has('name'))
						<span class="help-block text-danger">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
					<div class="col-sm-4">													
						<div class="form-group {{ $errors->has('apellidoP') ? ' has-error' : '' }}">
							<label class="text-dark">Apellido Paterno</label>
							<input type="text" class="form-control" 
							 	   placeholder="Escribe un apellido paterno" 
							 	   value="{{ old('apellidoP', Auth::user()->apellidoP) }}" 
								   name="apellidoP"
							>                     
						</div>
						@if ($errors->has('apellidoP'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('apellidoP') }}</strong>
						</span>
						@endif
					</div>										
					<div class="col-sm-4">
						
						<div class="form-group {{ $errors->has('apellidoM') ? ' has-error' : '' }}">
							<label class="text-dark">Apellido Materno</label>
							<input type="text" class="form-control" 
								   placeholder="Escribe un apellido materno" 
								   value="{{ old('apellidoM', Auth::user()->apellidoM) }}"
								   name="apellidoM"
							>
						</div>

						@if ($errors->has('apellidoM'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('apellidoM') }}</strong>
						</span>
						@endif
					</div>                      
					<div class="col-sm-4">												
						<div class="form-group {{ $errors->has('edad') ? ' has-error' : '' }}">
							<label class="text-dark">Edad</label>
							<input type="number" class="form-control" 
								   placeholder="Escrib una edad" 
								   value="{{ old('edad' , Auth::user()->edad) }}"
								   name="edad"
						>
						</div>
						@if ($errors->has('edad'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('edad') }}</strong>
						</span>
						@endif
					</div>
					<div class="col-sm-4">													
						<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
							<label class="text-dark">Correo electronico</label>
							<input type="email" class="form-control"  
								   placeholder="Escribe un correo electrónico" 
								   value="{{ old('email', Auth::user()->email) }}"
								   name="email"
					   	>
						</div>
						@if ($errors->has('email'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>					                 
					<div class="col-sm-4">													
						<div class="form-group{{ $errors->has('grupo_id') ? ' has-error' : '' }}">          
							<label class="text-dark">Grupo</label>
							<select class="form-control " disabled> 
								<option value="0">Sin grupo</option>
								@foreach($grupos as $grupo)
								<option value="{{$grupo->id}}"                                   
									@if($grupo->id == old('grupo_id', Auth::user()->grupo_id)) selected @endif>
									{{$grupo->name}}
								</option>
								@endforeach
							</select>
						</div>
						@if ($errors->has('grupo_id'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('grupo_id') }}</strong>
						</span>
						@endif
					</div>
					<div class="col-sm-4">													
						<div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">          
							<label class="text-dark">Genero</label>
							<select class="form-control " name="genero" >
								<option value="H"
								@if(old('genero',Auth::user()->genero) == 'H') selected @endif>
								H
							</option>
							<option value="M"
							@if(old('genero',Auth::user()->genero) == 'M')  selected @endif>
							M
						</option>                                                          
					</select>
				</div>
				@if ($errors->has('genero'))
				<span class="help-block text-center text-danger">
					<strong>{{ $errors->first('genero') }}</strong>
				</span>
				@endif
			</div>
			<div class="col-sm-4">													
				<div class="form-group {{ $errors->has('fechaN') ? ' has-error' : '' }}">
					<label class="text-dark">fecha de nacimiento</label>
					<input type="date" class="form-control" 
						   placeholder="Coloca tu fecha de nacimiento" 
						   value="{{ old('fechaN' , Auth::user()->fechaN) }}"
						   name="fechaN"
			    >                            
				</div>
				@if ($errors->has('fechaN'))
				<span class="help-block text-center text-danger">
					<strong>{{ $errors->first('fechaN') }}</strong>
				</span>
				@endif
			</div>
			<div class="col-sm-4">													
						<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
							<label class="text-dark">Telefono</label>
							<input type="tel" class="form-control"  
								   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
								   placeholder="Escribe un teléfono celular/fijo" 
								   value="{{ old('phone', Auth::user()->phone) }}"
								   name="phone"
						>
						</div>
						@if ($errors->has('phone'))
						<span class="help-block text-center text-danger">
							<strong>{{ $errors->first('phone') }}</strong>
						</span><br>
						@endif
						<small>Formato para teléfono celular/fijo : <b class="text-danger">123-123-1234</b></small>
					</div> 									 
			<div class="col-sm-4">													
				<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					<label class="text-dark">Contraseña</label>
					<input type="password" class="form-control"
						   placeholder="Contraseña"
					       name="password"
				>
				</div>
				@if ($errors->has('password'))
				<span class="help-block text-center text-danger">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
			</div>
			<div class="col-sm-4">
				<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					<label class="text-dark">Confirmar contraseña</label>
					<input type="password" class="form-control"
						   placeholder="Confirmar contraseña" 
						   name="password_confirmation"					
					>	
					<small  class="form-text  text-dark">
		                Si no quiere cambiar la contraseña, deje vacio los campos 
		                <b class="text-danger">Contraseña y Confirmar contraseña</b>.
	          		</small>				
				</div>                          
			</div>			
		</div>    		                                                                                    	
		<div class="text-center col-md-12">
			<button class="btn btn-success">Editar datos</button>
			<a href="{{url('/alumno')}}" class="btn btn-danger">Cancelar</a> 
		</div>
	</form>                  
</div>              
</div>
</div>
@include('includes.footer')
@endsection
