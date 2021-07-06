@extends('layouts.app')

@section('titulo','Encuestas del alumno')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="profile-content">
		<div class="container">         	                                           			
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center">
						Encuestas que debes de realizar            
					</h3>
					@if (session('mensaje'))
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
				</div>								
				<div class=" table-responsive ">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Nombre</th>						
								<th class="text-center">Enlace</th>                                                                
							</tr>
						</thead>                                
						<tbody>              
							<tr>
								<td class="text-center">1</td>                                                        
								<td class="text-center">Entrevista fresca</td>								
								<td class="text-center">
									@if(empty(Auth::user()->entrevista_fresca))      
										<form method="post" action="{{url('alumno/entrevista')}}">
											{{csrf_field()}}
											<button type="submit" class="btn btn-primary  btn-sm">Iniciar</button>     
										</form>              									
									@elseif(Auth::user()->entrevista_fresca->where('descripcion','Finalizo la entrevista')->where('alumno_id',auth()->user()->nia)->first())
										<a disable>{{Auth::user()->entrevista_fresca->descripcion}}</a>                   
									@elseif(Auth::user()->entrevista_fresca->where('descripcion','Inicio la entrevista')->where('alumno_id',auth()->user()->nia)->first())
										<a href="{{url('alumno/entrevista')}}" class="btn btn-warning  btn-sm">
											{{Auth::user()->entrevista_fresca->descripcion}}
										</a>
									@endif
								</td>                     
							</tr>
							<tr>
								<td class="text-center">2</td>                                                        
								<td class="text-center">Cuestionario Anexos</td>								
								<td class="text-center">									             
									@if(empty(Auth::user()->cuestionario_anexo))
										<form method="post" action="{{url('alumno/cuestionario')}}">
											{{csrf_field()}}
											<button type="submit" class="btn btn-primary btn-sm">Iniciar</button>    
										</form>																					
									@elseif(Auth::user()->cuestionario_anexo->where('descripcion','Finalizo cuestionario')->where('alumno_id',auth()->user()->nia)->first())
										<a disabled>{{Auth::user()->cuestionario_anexo->descripcion}}</a>
									@elseif(Auth::user()->cuestionario_anexo->where('descripcion','Inicio cuestionario')->where('alumno_id',auth()->user()->nia)->where('alumno_id',auth()->user()->nia)->first())
										<a href="{{url('alumno/cuestionario')}}" class="btn btn-warning btn-sm">
											{{Auth::user()->cuestionario_anexo->descripcion}}
										</a>
									@endif             																		
								</td>                     
							</tr>							 							
							<tr>
								<td class="text-center">3</td>                                                        
								<td class="text-center">Cuestionario "No Abandono"</td>								
								<td class="text-center">
									@if(empty(Auth::user()->perfil_academico))
										<form method="post" 
											  action="{{ url('alumno/cuestionario/perfil_academico/iniciar') }}">
											{{ csrf_field() }}
											<button class="btn btn-primary btn-sm">Iniciar</button>
										</form>																			
									@elseif(Auth::user()->perfil_academico->escuela_procedencia == " ")
										<a class="btn btn-warning btn-sm" 
											href="{{ url('/alumno/cuestionario/perfil_academico') }}">
											Reanudar
										</a>
									@elseif(Auth::user()->perfil_academico->escuela_procedencia)
										<a disable>
											Finalizo Cuestionario
										</a>
									@endif									
								</td>                     
							</tr>
							<tr>
								<td class="text-center">4</td>                                                        
								<td class="text-center">Test sobre estilos de aprendizaje</td>								
								<td class="text-center">
									@if(empty(Auth::user()->test))
										<form method="post" action="{{url('alumno/test/create')}}">
											{{csrf_field()}}
											<button  type="submit" class="btn btn-primary btn-sm">Iniciar</button>
										</form>														
									@elseif(Auth::user()->test->conociendo_estilo_aprendizaje &&
										Auth::user()->test->encontrar_estilo_aprendizaje &&								           
							            Auth::user()->test->test_habito_estudio->organizacion_tiempo && 
							            Auth::user()->test->test_habito_estudio->planificacion && 
							            Auth::user()->test->test_habito_estudio->estrategias_aprendizaje)
										<a disabled>
											{{Auth::user()->test->descripcion}}
										</a>									
									@else
										<a href="{{url('alumno/test')}}" class="btn btn-warning btn-sm">
											{{Auth::user()->test->descripcion}}
										</a>									
									@endif
								</td>                     
							</tr>
							<tr>
								<td class="text-center">5</td>                                                        
								<td class="text-center">Test para detectar tutorados que requieran atención individual</td>		
								<td class="text-center">
									@if(empty(Auth::user()->atencion_individual))										
										<form method="post" action="{{ url('/alumno/test/atencion_individual/iniciar') }}">
											{{ csrf_field() }}											
											<button type="submit" class="btn btn-primary btn-sm">Iniciar</button>
										</form>																		
									@elseif(Auth::user()->atencion_individual->where('descripcion' , 'Finalizo Test')
											->first())
										<a disabled>
											{{Auth::user()->atencion_individual->descripcion}}
										</a>
									@elseif(Auth::user()->atencion_individual->where('descripcion' , 'Inicio Test')
											->first())
										<a href="{{url('alumno/test/atencion_individual')}}" class="btn btn-warning btn-sm">
											Reanudar
										</a>
									@endif
								</td>                     
							</tr>                               
						</tbody>                                
					</table>    					
				</div>
			</div>
		</div>                            
	</div>
</div>
@include('includes.footer')
@endsection
