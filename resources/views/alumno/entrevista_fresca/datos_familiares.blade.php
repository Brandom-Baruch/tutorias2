@extends('layouts.app')

@section('titulo','Datos Familiares')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); "></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<h2 class="title text-center" style="color: black;">Datos Familiares</h2>
			@if($errors->any())
		      <div class="alert alert-danger">
		        <div class="container-fluid">                     
		          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true"><i class="material-icons">clear</i></span>
		          </button>
		          <ul>    
		            @foreach($errors->all() as $error)                        
		            <li>{{$error}}</li>
		            @endforeach
		          </ul>
		        </div>
		      </div>
	      	@endif
			<form method="post" action="{{url('alumno/entrevista/datos/familiares')}}">
				{{ csrf_field() }}        												
				<div class="form-row">
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Con quién vives?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Solo Mamá"
									@if(old('respuesta1') == "Solo Mamá" ) checked @endif>
								Solo Mamá 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Solo Papá" 
									@if(old('respuesta1') == "Solo Papá") checked @endif>
								Solo Papá
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta1" value="Ambos" 
									@if(old('respuesta1') == "Ambos") checked @endif>
								Ambos 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<div class="form-check col-md-8">
								<label style="color: black;">Otro</label>
								<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r1"
								value="{{ old('r1') }}">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Cuántos hermanos/as tienes?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Soy hijo único" 
									@if(old('respuesta2') == "Soy hijo único") checked @endif>
								Soy hijo único 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Somos 2-3" 
									@if(old('respuesta2') == "Somos 2-3") checked @endif>
								Somos 2-3
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="Somos 4-5" 
									@if(old('respuesta2') == "Somos 4-5") checked @endif>
								Somos 4-5 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta2" value="6 o más"
									@if(old('respuesta2') == "6 o más") checked @endif >
								6 o más 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Qué lugar ocupas?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="Primero" 
									@if(old('respuesta3') == "Primero") checked @endif >
								Primero 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="El de en medio"
									@if(old('respuesta3') == "El de en medio") checked @endif>
								El de en medio
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta3" value="El último"
									@if(old('respuesta3') == "El último") checked @endif>
								El último   
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check col-md-8">
							<label style="color: black;">Otro</label>
							<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r3"
								value="{{ old('r3') }}">
						</div>
					</div>	
					<div class="form-group col-md-3">
						<label style="color: black;"><b>¿Cómo te llevas con tu familia?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Bien"
									@if(old('respuesta4') == "Bien") checked @endif>
								Bien 
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta4" value="Mal"
									@if(old('respuesta4') == "Mal") checked @endif>
								Mal
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>										
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Hablas otro idioma o lengua indígena?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="Si"
									@if(old('respuesta5') == "Si") checked @endif>
								 Si
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta5" value="No"
									@if(old('respuesta5') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check col-md-8">
							<label style="color: black;">Otro</label>
							<input type="text" class="form-control text-dark" placeholder="¿Cuál?" name="r5"
								value="{{ old('r5') }}">
						</div>										
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Cuánto es el ingreso económico mensual en tu casa?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="2,000"
									@if(old('respuesta6') == "2,000") checked @endif>
								2,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="de 2,000-5,000"
									@if(old('respuesta6') == "de 2,000-5,000") checked @endif>
								de 2,000-5,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="de 5,000-8,000"
									@if(old('respuesta6') == "de 5,000-8,000") checked @endif>
								de 5,000-8,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta6" value="más de 8,000"
									@if(old('respuesta6') == "más de 8,000") checked @endif>
								más de 8,000
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>											
					</div>
					<div class="form-group col-md-4">
						<label style="color: black;"><b>¿Tienes hijos?</b></label>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="Si"
									@if(old('respuesta7') == "Si") checked @endif>
								Si
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label text-dark">
								<input class="form-check-input" type="radio" name="respuesta7" value="No"
									@if(old('respuesta7') == "No") checked @endif>
								No
								<span class="circle">
									<span class="check"></span>
								</span>
							</label>
						</div>																				
					</div>							
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
