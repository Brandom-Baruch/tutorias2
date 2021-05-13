@extends('layouts.app')

@section('titulo','Asignar familiar')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}}');"></div>
<div class="main main-raised">
	<div class="profile-content">
		<div class="container">		
			<div class="description">           
				<div class="p-2">
					<h3 class="title text-center">Asignar familiar para el  <b class="text-primary">{{Auth::user()->name}}</b></h3>
				</div>    
				<form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/parentesco')}}">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label style="color: black;">Selecciona un alumno</label>
								<select class="form-control selectpicker"  name="alumno_id"  style="color: black;">
									@foreach($alumnos as $alumno)
									<option value="{{$alumno->nia}}"
										@if(old('alumno_id') == $alumno->nia) selected @endif>
										{{$alumno->nombre_completo}} 
									</option>									    
									@endforeach
								</select>								
							</div>   
						</div>
						<div class="col-sm-6">
			                <div class="form-group">          
			                  <label class="text-dark">Selecciona un parentesco</label>
			                  <select class="form-control " name="parentezco" >
			                    <option value="Papá">Papá</option>
			                    <option value="Mamá">Mamá</option>
			                    <option value="Tío">Tío</option>
			                    <option value="Tía">Tía</option>
			                    <option value="Abuelo">Abuelo</option>
			                    <option value="Abuela">Abuela</option>
			                    <option value="Hermano">Hermano</option>
			                    <option value="Hermana">Hermana</option>
			                    <option value="Primo">Primo</option>
			                    <option value="Prima">Prima</option>
			                  </select>
			                </div>
			                @if ($errors->has('parentezco'))
			                  <span class="help-block text-center">
			                    <strong>{{ $errors->first('parentezco') }}</strong>
			                  </span>
			                @endif
		              	</div>
					</div>       
					<div class="text-center">
						<button type="submit" class="btn btn-success">Agregar</button>            
						<a href="{{url('/padre_familia')}}" class="btn btn-danger">Regresar</a>
					</div>
				</form>        
			</div>			                                                        
			@if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
			<div class="alert alert-success text-left">
				<div class="container-fluid">
					<div class="alert-icon">
						<i class="material-icons">check</i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
					{{ session('mensaje') }}
				</div>
			</div>
			@endif
			@if (session('eliminado')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
			<div class="alert alert-danger text-left">
				<div class="container-fluid">
					<div class="alert-icon">
						<i class="material-icons">check</i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
					{{ session('eliminado') }}
				</div>
			</div>
			@endif			
			<hr style="border-top-color: black;">
			<div class="row"> 
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Nombre</th>
								<th class="text-center">Parentesco</th>                                                
								<th class="text-center">Opciones</th>
							</tr>
						</thead>                                
						<tbody>
							@foreach(Auth::user()->alumnos as $key => $alumno)
							<tr>                                                        
								<td class="text-center">{{($key+1)}}</td>
								<td class="text-center">{{$alumno->name}} {{$alumno->apellidoP}} {{$alumno->apellidoM}} </td>
								<td class="text-center">{{$alumno->pivot->parentezco}}</td>
								<td class="td-actions text-center">
									<form method="post" 
									action="{{url('padre_familia/'.Auth::user()->id.'/parentesco/'.$alumno->nia.'/delete')}}">
									{{csrf_field()}}                                                                
									<button type="submit" rel="tooltip" title="Quitar familiar" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
										<i class="fa fa-times"></i>
									</button>
								</form>
							</td>
						</tr>               
						@endforeach
						</tbody>                                
					</table>   
				</div>        				                                             			
			</div>
		</div>
	</div>
</div>
@include('includes.footer')
@endsection
