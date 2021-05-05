@extends('layouts.app')

@section('titulo','Caracteristicas y cualidades')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">		   
			<h3 class="title text-center mt-3">Selecciona SI o NO en las características y cualidades que consideres <br> que tiene o no su hijo (a)</h3>					
			<form method="post" action="{{url('/padre_familia/entrevista/'.$alumno->nia.'/marca_si_no')}}">
				{{ csrf_field() }}        									
				<div class="row">
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
								<td class="td-actions text-center text-center {{ $errors->has('respuesta1') ? ' has-error' : '' }}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta1"
													@if(old('respuesta1') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta1"
													@if(old('respuesta1') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta1'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta1') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">10</td>
								<td class="text-center">CARIÑOSO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta10') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta10"
													@if(old('respuesta10') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta10"
													@if(old('respuesta10') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta10'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta10') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--2/11-->
							<tr>
								<td class="text-center">2</td>
								<td class="text-center">TRISTE</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta2') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta2"
													@if(old('respuesta2') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta2"
													@if(old('respuesta2') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta2'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta2') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">11</td>
								<td class="text-center">FRIO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta11') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta11"
													@if(old('respuesta11') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta11"
													@if(old('respuesta11') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta11'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta11') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--3/12-->
							<tr>
								<td class="text-center">3</td>
								<td class="text-center">AGRESIVO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta3') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta3"
													@if(old('respuesta3') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta3"
													@if(old('respuesta3') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta3'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta3') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">12</td>
								<td class="text-center">OBEDIENTE</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta12') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta12"
													@if(old('respuesta12') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta12"
													@if(old('respuesta12') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta12'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta12') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--4/13-->
							<tr>
								<td class="text-center">4</td>
								<td class="text-center">DOCIL</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta4') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta4"
													@if(old('respuesta4') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta4"
													@if(old('respuesta4') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta4'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta4') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">13</td>
								<td class="text-center">MENTIROSO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta13') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta13"
													@if(old('respuesta13') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta13"
													@if(old('respuesta13') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta13'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta13') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--5/14-->
							<tr>
								<td class="text-center">5</td>
								<td class="text-center">TRANQUILO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta5') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta5"
													@if(old('respuesta5') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta5"
													@if(old('respuesta5') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta5'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta5') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">14</td>
								<td class="text-center">MEDIOSO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta14') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta14"
													@if(old('respuesta14') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta14"
													@if(old('respuesta14') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta14'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta14') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--6/15-->
							<tr>
								<td class="text-center">6</td>
								<td class="text-center">INQUIETO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta6') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta6"
													@if(old('respuesta6') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta6"
													@if(old('respuesta6') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta6'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta6') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">15</td>
								<td class="text-center">VALIENTE</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta15') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta15"
													@if(old('respuesta15') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta15"
													@if(old('respuesta15') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta15'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta15') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--7/16-->
							<tr>
								<td class="text-center">7</td>
								<td class="text-center">IMAGINATIVO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta7') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta7"
													@if(old('respuesta7') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta7"
													@if(old('respuesta7') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta7'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta7') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">16</td>
								<td class="text-center">DISTRAIDO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta16') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta16"
													@if(old('respuesta16') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta16"
													@if(old('respuesta16') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta16'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta16') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--8/17-->
							<tr>
								<td class="text-center">8</td>
								<td class="text-center">REALISTA</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta8') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta8"
													@if(old('respuesta8') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta8"
													@if(old('respuesta8') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta8'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta8') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">17</td>
								<td class="text-center">ATENTO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta17') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta17"
													@if(old('respuesta17') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta17"
													@if(old('respuesta17') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta17'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta17') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>
							<!--9/18-->
							<tr>
								<td class="text-center">9</td>
								<td class="text-center">EXPRESIVO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta9') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta9"
													@if(old('respuesta9') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta9"
													@if(old('respuesta9') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta9'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta9') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
								<td class="text-center">18</td>
								<td class="text-center">INTROVERTIDO</td>								
								<td class="td-actions text-center text-center {{ $errors->has('respuesta18') ? ' has-error' : ''}}">
									<div class="form-group col-md-12">
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="Si" name="respuesta18"
													@if(old('respuesta18') == "Si") checked @endif>
												Si
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label text-dark">
												<input class="form-check-input" type="radio" value="No" name="respuesta18"
													@if(old('respuesta18') == "No") checked @endif>
												No
												<span class="circle">
													<span class="check"></span>
												</span>
											</label>										
										</div>
										@if ($errors->has('respuesta18'))
							              <br>
							              <span class="help-block text-danger">
							                <strong>{{ $errors->first('respuesta18') }}</strong>
							              </span>
							            @endif										
									</div>
								</td>
							</tr>															
						</tbody>
					</table>
					<div class="form-group col-md-6">
						<label class="text-dark">Describa brevemente como es su hijo (a)</label>
						<textarea class="form-control" name="respuesta19" rows="1"
						placeholder="Descripción corta">{{old('respuesta19')}}</textarea>
						@if($errors->has('respuesta19'))
							<span class="help-block text-danger">
								<strong>
									{{ $errors->first('respuesta19') }}
								</strong>
							</span>
						@endif
					</div>
					<div class="form-group col-md-6">
						<label class="text-dark">¿Con que persona considera usted que su hijo tiene más confianza?</label>
						<textarea class="form-control"  name="respuesta20"  rows="1"
						placeholder="Descripción corta">{{old('respuesta20')}}</textarea>
						@if($errors->has('respuesta20'))
							<span class="help-block text-danger">
								<strong>
									{{ $errors->first('respuesta20') }}
								</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-success">Finalizar</button>
					<a href="{{url('/padre_familia/entrevista/'.$alumno->nia.'/secciones')}}" class="btn btn-danger">Cancelar</a> 
				</div>				
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
