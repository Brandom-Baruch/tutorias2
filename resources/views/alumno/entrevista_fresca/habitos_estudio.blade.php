@extends('layouts.app')

@section('titulo','Habitos de Estudio')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h2 class="title text-center" style="color: black;">Habitos de Estudio</h2>			
			<form method="post" action="{{url('alumno/entrevista/habitos/estudio')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para las TAREAS?</b></label><br>						
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Nada"
									@if(old('respuesta1') == "Nada") checked @endif>
								Nada 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Una hora"
									@if(old('respuesta1') == "Una hora") checked @endif>
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Dos horas" 
									@if(old('respuesta1') == "Dos horas") checked @endif>
								Dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Mas de dos horas"
									@if(old('respuesta1') == "Mas de dos horas") checked @endif>
								Mas de dos horas 
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
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo dedicas diariamente, después de la escuela (en tu casa) para ESTUDIAR?</b></label><br>						
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Nada"
									@if(old('respuesta2') == "Nada") checked @endif>
								Nada 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Una hora"
									@if(old('respuesta2') == "Una hora") checked @endif>
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Dos horas"
									@if(old('respuesta2') == "Dos horas") checked @endif>
								Dos horas 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Mas de dos horas"
									@if(old('respuesta2') == "Mas de dos horas") checked @endif>
								Mas de dos horas 
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
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Qué tiempo a la semana dedicas a leer?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Una hora"
									@if(old('respuesta3') == "Una hora") checked @endif>
								Una hora 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="De 2 a 3 hrs"
									@if(old('respuesta3') == "De 2 a 3 hrs") checked @endif>
								De 2 a 3 hrs
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="De 4 a 6 hrs"
									@if(old('respuesta3') == "De 4 a 6 hrs") checked @endif>
								De 4 a 6 hrs  
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
					<div class="form-group col-md-6">
						<label style="color: black;"><b>¿Cuál es tu horario preferido para estudiar?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Después de comer"
									@if(old('respuesta4') == "Después de comer") checked @endif>
								Después de comer  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Mas tarde"
									@if(old('respuesta4') == "Mas tarde") checked @endif>
								Mas tarde
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Noche"
									@if(old('respuesta4') == "Noche") checked @endif>
								Noche
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
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Quién te ayuda a estudiar en casa?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Nadie"
									@if(old('respuesta5') == "Nadie") checked @endif>
								Nadie  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Papá"
									@if(old('respuesta5') == "Papá") checked @endif >
								Papá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Mamá"
									@if(old('respuesta5') == "Mamá") checked @endif >
								Mamá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Hermanos" 
									@if(old('respuesta5') == "Hermanos") checked @endif>
								Hermanos
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r5" value="{{ old('r5') }}">
							</div>
						</div>
						@if ($errors->has('respuesta5'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta5') }}</strong>
							</span>
						@endif									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿En qué lugar prefieres estudiar?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="En tu habitación"
									@if(old('respuesta6') == "En tu habitación") checked @endif>
								En tu habitación  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Sala"
									@if(old('respuesta6') == "Sala") checked @endif>
								Sala
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="Cocina"
									@if(old('respuesta6') == "Cocina") checked @endif>
								Cocina
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>							
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r6" value="{{ old('r6') }}">
							</div>
						</div>
						@if ($errors->has('respuesta6'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta6') }}</strong>
							</span>
						@endif									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Qué técnicas de estudio usas?</b></label><br>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Subrayar"
									@if(old('respuesta7') == "Subrayar") checked @endif>
								Subrayar  
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Esquemas"
									@if(old('respuesta7') == "Esquemas") checked @endif>
								Esquemas
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>	
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Resumen"
									@if(old('respuesta7') == "Resumen") checked @endif>
								Resumen
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Memoria"
									@if(old('respuesta7') == "Memoria") checked @endif>
								Memoria
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Ninguno"
									@if(old('respuesta7') == "Ninguno") checked @endif>
								Ninguno
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>						
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otros</label>
								<input type="text" class="form-control text-dark" name="r7" value="{{ old('r7') }}">
							</div>
						</div>
						@if ($errors->has('respuesta7'))
							<span class="help-block text-danger">
								<strong>{{ $errors->first('respuesta7') }}</strong>
							</span>
						@endif									
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Tus papas o hermanos te motivan a estudiar?</b></label><br>
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
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">¿Cómo?</label>
								<input type="text" class="form-control text-dark" name="r8" value="{{ old('r8') }}">
							</div>
						</div>											
					</div>		
					<h3>Marca el motivo principal que tienes para seguir estudiando</h3>	
					<table class="table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">ASPECTOS</th>								
								<th class="text-center">OPCIONES</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">Aprender cada dia mas </td>								
								<td class="td-actions text-center text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_1"
													@if(old('r9_1') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_1"
													@if(old('r9_1') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_1"
													@if(old('r9_1') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_1'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_1') }}</strong>
											</span>
										@endif
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-left">Poder hacer las cosas por ti mismo y a tu manera</td>		
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_2"
													@if(old('r9_2') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_2"
													@if(old('r9_2') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_2"
													@if(old('r9_2') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_2'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_2') }}</strong>
											</span>
										@endif
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">El interés de despertar en ti todo lo que estudias</td>		
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_3"
													@if(old('r9_3') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_3"
													@if(old('r9_3') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_3"
													@if(old('r9_3') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_3'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_3') }}</strong>
											</span>
										@endif
									</div>
								</td>
							</tr>
							<tr>
								<td class="text-left">La satisfacción por obtener buenos resultados</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_4"
													@if(old('r9_4') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_4"
													@if(old('r9_4') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_4"
													@if(old('r9_4') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_4'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_4') }}</strong>
											</span>
										@endif
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Evitar el fracaso en los estudios</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_5"
													@if(old('r9_5') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_5"
													@if(old('r9_5') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_5"
													@if(old('r9_5') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_5'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_5') }}</strong>
											</span>
										@endif						
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Agradar a tus padres y/o profesores</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_6"
													@if(old('r9_6') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_6"
													@if(old('r9_6') == "REGULAR") checked @endif>
												REGULAR 
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_6"
													@if(old('r9_6') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_6'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_6') }}</strong>
											</span>
										@endif						
									</div>												
								</td>
							</tr>
							<tr>
								<td class="text-left">Obtener premios por parte de tus padres o familia</td>	
								<td class="td-actions text-center">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="MUCHO" name="r9_7"
													@if(old('r9_7') == "MUCHO") checked @endif>
												MUCHO
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="REGULAR" name="r9_7"
													@if(old('r9_7') == "REGULAR") checked @endif>
												REGULAR
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="NADA" name="r9_7"
													@if(old('r9_7') == "NADA") checked @endif>
												NADA
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div><br>
										@if ($errors->has('r9_7'))
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_1') }}</strong>
											</span>
										@endif
									</div>
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
