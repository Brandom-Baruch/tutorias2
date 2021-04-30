@extends('layouts.app')

@section('titulo','Datos Adicionales')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center" style="margin-top: 10px;">Selecciona si su hijo(a) se relaciona con algunos de estos aspectos y el porcentaje de seguridad que tiene usted sobre ello.</h3>						
			<form method="post" action="{{url('padre_familia/entrevista/'.$alumno->nia.'/marca_x')}}">
				{{ csrf_field() }}        	
				<input type="hidden" name="alumno_id" value="{{$alumno->nia}}">
				<div class="form-row">										
					<table class="table-bordered table table-responsive-sm table-responsive-md table-responsive-lg">
						<thead>
							<tr>
								<th class="text-center">Aspectos</th>						
								<th class="text-center">Si/No</th>
								<th class="text-center">Conocimiento y certeza que se tiene sobre ello</th>
								<th class="text-center">Especifique el caso</th>								
							</tr>
						</thead>
						<tbody>
							<!--1-->
							<tr>
								<td>ACCIDENTES</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r1') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r1"
												 @if(old('r1') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r1"
												@if(old('r1') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('r1'))
							              <br><span class="help-block text-danger">
							                <strong>{{ $errors->first('r1') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r1_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r1_2"
													@if(old('r1_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r1_2"
													@if(old('r1_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r1_2"
													@if(old('r1_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('r1_2'))
							              <br><span class="help-block text-danger">
							                <strong>{{ $errors->first('r1_2') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r1_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r1_3"
											placeholder="Espeficación corta">{{ old('r1_3') }}</textarea>     
									</div>
									@if ($errors->has('r1_3'))
						              <span class="help-block text-danger">
						                <strong>{{ $errors->first('r1_3') }}</strong>
						              </span>
						            @endif
								</td>
							</tr>																					
							<!--2-->
							<tr>
								<td>PROBLEMAS CONDUCTUALES</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r2"
													@if(old('r2') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r2"
													@if(old('r2') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('r2'))
							              <br><span class="help-block text-danger">
							                <strong>{{ $errors->first('r2') }}</strong>
							              </span>
							            @endif											
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r2_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r2_2"
													@if(old('r2_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r2_2"
													@if(old('r2_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r2_2"
													@if(old('r2_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('r2_2'))
							              <br><span class="help-block text-danger">
							                <strong>{{ $errors->first('r2_2') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r2_2') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r2_3"
											placeholder="Espeficación corta">{{ old('r2_3') }}</textarea>					
									</div>
									@if ($errors->has('r1_3'))
						              <span class="help-block text-danger">
						                <strong>{{ $errors->first('r1_3') }}</strong>
						              </span>
						            @endif
								</td>
							</tr>
							<!--3-->
							<tr>
								<td>USO DE ALCOHOL</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r3') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r3"
													@if(old('r3') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r3"
													@if(old('r3') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r3'))
											<br>
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r3') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r3_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r3_2"
													@if(old('r3_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r3_2"
													@if(old('r3_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r3_2"
													@if(old('r3_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r3_2'))
											<br>
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r3_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r3_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r3_3"
											placeholder="Espeficación corta">{{ old('r3_3') }}</textarea>     
									</div>
									@if($errors->has('r3_3'))										
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r3_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--4-->
							<tr>
								<td>USO DE DROGAS</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r4') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r4"
													@if(old('r4') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r4"
													@if(old('r4') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r4'))
											<br>
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r4') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r4_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r4_2"
													@if(old('r4_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r4_2"
													@if(old('r4_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r4_2"
													@if(old('r4_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r4_2'))
											<br>
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r4_2') }}</strong>
											</span>
										@endif											
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r4_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r4_3"
											placeholder="Espeficación corta">{{ old('r4_3') }}</textarea>     
									</div>
									@if($errors->has('r4_3'))										
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r4_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--5-->
							<tr>
								<td>FUMA CIGARRILLOS</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r5') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r5"
													@if(old('r5') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r5"
													@if(old('r5') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r5'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r5') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r5_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r5_2"
													@if(old('r5_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r5_2"
													@if(old('r5_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r5_2"
													@if(old('r5_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r5_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r5_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r5_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r5_3"
											placeholder="Espeficación corta">{{ old('r5_3') }}</textarea>     
									</div>
									@if($errors->has('r5_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r5_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--6-->
							<tr>
								<td>ENFERMEDADES</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r6') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r6"
													@if(old('r6') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r6"
													@if(old('r6') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r6'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r6') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r6_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r6_2"
													@if(old('r6_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r6_2"
													@if(old('r6_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r6_2"
													@if(old('r6_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r6_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r6_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r6_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r6_3"
											placeholder="Espeficación corta">{{ old('r6_3') }}</textarea>     
									</div>
									@if($errors->has('r6_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r6_3') }}</strong>
										</span>
									@endif
								</td>								
							</tr>
							<!--7-->
							<tr>
								<td>ALERGIAS</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r7') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r7"
													@if(old('r7') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r7"
													@if(old('r7') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r7'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r7') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r7_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r7_2"
													@if(old('r7_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r7_2"
													@if(old('r7_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r7_2"
													@if(old('r7_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r7_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r7_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r7_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r7_3"
											placeholder="Espeficación corta">{{ old('r7_3') }}</textarea>     
									</div>
									@if($errors->has('r7_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r7_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--8-->
							<tr>
								<td>BAJO TRATAMIENTO MÉDICO</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r8') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r8"
													@if(old('r8') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r8"
													@if(old('r8') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r5'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r4_3') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r8_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r8_2"
													@if(old('r8_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r8_2"
													@if(old('r8_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r8_2"
													@if(old('r8_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r8_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r8_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r8_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r8_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))															
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--9-->
							<tr>
								<td>MALA NUTRICIÓN</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r9') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r9"
													@if(old('r9') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r9"
													@if(old('r9') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r9'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9') }}</strong>
											</span>
										@endif											
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r9_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r9_2"
													@if(old('r9_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r9_2"
													@if(old('r9_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r9_2"
													@if(old('r9_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r9_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r9_2') }}</strong>
											</span>
										@endif											
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r9_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r9_3"
											placeholder="Espeficación corta">{{ old('r9_3') }}</textarea>     
									</div>
									@if($errors->has('r9_3'))																
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r9_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--10-->
							<tr>
								<td>PROBLEMAS DE ATENCIÓN</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r10') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r10"
													@if(old('r10') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r10"
													@if(old('r10') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r10'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r10') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r10_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r10_2"
													@if(old('r10_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r10_2"
													@if(old('r10_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r10_2"
													@if(old('r10_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r10_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r10_2') }}</strong>
											</span>
										@endif											
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r10_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r10_3"
											placeholder="Espeficación corta">{{ old('r10_3') }}</textarea>     
									</div>
									@if($errors->has('r10_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r10_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--11-->
							<tr>
								<td>PROBLEMAS DE LENGUAJE</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r11') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r11"
													@if(old('r11') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r11"
													@if(old('r11') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r11'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r11') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r11_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r11_2"
													@if(old('r11_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r11_2"
													@if(old('r11_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r11_2"
													@if(old('r11_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r11_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r11_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r11_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r11_3"
											placeholder="Espeficación corta">{{ old('r11_3') }}</textarea>     
									</div>
									@if($errors->has('r11_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r11_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--12-->
							<tr>
								<td>REPETIDOR DE GRADO ESCOLAR</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r12') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r12"
													@if(old('r12') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r12"
													@if(old('r12') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r5'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r4_3') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r12_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r12_2"
													@if(old('r12_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r12_2"
													@if(old('r12_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r12_2"
													@if(old('r12_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r12_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r12_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r12_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r12_3"
											placeholder="Espeficación corta">{{ old('r12_3') }}</textarea>     
									</div>
									@if($errors->has('r12_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r12_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--13-->
							<tr>
								<td>AMISTADES SANAS</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r13') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r13"
													@if(old('r13') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r13"
													@if(old('r13') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r13'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r13') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r13_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r13_2"
													@if(old('r13_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r13_2"
													@if(old('r13_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r13_2"
													@if(old('r13_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r13'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r13') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r13_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r13_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--14-->
							<tr>
								<td>ADICTO A LA  INTERNET</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r14') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r14"
													@if(old('r14') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r14"
													@if(old('r14') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r14'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r14') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r14_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r14_2"
													@if(old('r14_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r14_2"
													@if(old('r14_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r14_2"
													@if(old('r14_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r14_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r14_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r14_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r14_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--15-->
							<tr>
								<td>ADICTO A LA TELEVISIÓN</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r15') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r15"
													@if(old('r15') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r15"
													@if(old('r15') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r15'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r15') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r15_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r15_2"
													@if(old('r15_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r15_2"
													@if(old('r15_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r15_2"
													@if(old('r15_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r15_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r15_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r15_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r15_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--16-->
							<tr>
								<td>GUSTA DE ESTUDIAR Y ASISTIR <br> A LA ESCUELA</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r16') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r16"
													@if(old('r16') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r16"
													@if(old('r16') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r16'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r16') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r16_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r16_2"
													@if(old('r16_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r16_2"
													@if(old('r16_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r16_2"
													@if(old('r16_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r16_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r16_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r16_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r16_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--17-->
							<tr>
								<td>TRABAJA</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r17') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r17"
													@if(old('r17') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r17"
													@if(old('r17') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r17'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r17') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r17_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r17_2"
													@if(old('r17_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r17_2"
													@if(old('r17_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r17_2"
													@if(old('r17_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r17_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r17_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r17_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r17_3"
											placeholder="Espeficación corta">{{ old('r17_3') }}</textarea>     
									</div>
									@if($errors->has('r17_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r17_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--18-->
							<tr>
								<td>ES ORDENADO</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r18') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r18"
													@if(old('r18') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r18"
													@if(old('r18') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r18'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r18') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r18_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r18_2"
													@if(old('r18_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r18_2"
													@if(old('r18_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r18_2"
													@if(old('r18_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r18_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r18_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r18_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r18_3"
											placeholder="Espeficación corta">{{ old('r18_3') }}</textarea>     
									</div>
									@if($errors->has('r18_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r18_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--19-->
							<tr>
								<td>ES DISTRAÍDO</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r19') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r19"
													@if(old('r19') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r19"
													@if(old('r19') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r19'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r19') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r19_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r19_2"
													@if(old('r19_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r19_2"
													@if(old('r19_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r19_2"
													@if(old('r19_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r19_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r19_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r19_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r19_3"
											placeholder="Espeficación corta">{{ old('r8_3') }}</textarea>     
									</div>
									@if($errors->has('r8_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r8_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--20-->
							<tr>
								<td>USA LENTES</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r20') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r20"
													@if(old('r20') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r20"
													@if(old('r20') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r20'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r20') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r20_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r20_2"
													@if(old('r20_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r20_2"
													@if(old('r20_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r20_2"
													@if(old('r20_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r20_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r20_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r20_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r20_3"
											placeholder="Espeficación corta">{{ old('r20_3') }}</textarea>     
									</div>
									@if($errors->has('r20_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r20_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
							<!--21-->
							<tr>
								<td>OTROS</td>	
								<td class="td-actions text-center text-center {{ $errors->has('r21') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="r21"
													@if(old('r21') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="r21"
													@if(old('r21') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r21'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r21') }}</strong>
											</span>
										@endif										
									</div>
								</td>															
								<td class="td-actions text-center text-center {{ $errors->has('r21_2') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="100%" name="r21_2"
													@if(old('r21_2') == "100%") checked @endif>
												100%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="50%" name="r21_2"
													@if(old('r21_2') == "50%") checked @endif>
												50%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="0%" name="r21_2"
													@if(old('r21_2') == "0%") checked @endif>
												0%
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if($errors->has('r21_2'))		
											<br>								
											<span class="help-block text-danger">
												<strong>{{ $errors->first('r21_2') }}</strong>
											</span>
										@endif										
									</div>
								</td>
								<td class="td-actions text-center text-center {{ $errors->has('r21_3') ? ' has-error' : '' }}">
									<div class="form-check-label text-dark">										
										<textarea class="form-control" rows="1" name="r21_3"
											placeholder="Espeficación corta">{{ old('r21_3') }}</textarea>     
									</div>
									@if($errors->has('r21_3'))																	
										<span class="help-block text-danger">
											<strong>{{ $errors->first('r21_3') }}</strong>
										</span>
									@endif
								</td>
							</tr>
						</tbody>
					</table>														
				</div>																							
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/padre_familia/entrevista/')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
