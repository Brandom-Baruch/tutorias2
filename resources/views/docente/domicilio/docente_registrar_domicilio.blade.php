@extends('layouts.app')

@section('titulo','Agregar Domicilio')
@section('body-class','profile-page sidebar-collapse')
@section('opciones_director')    
  <a href="{{url('docente')}}">Panel de control</a>   
@endsection
@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
            <h2 class="title text-center">Registrar Domicilio</h2>
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
            <form method="post" action="{{url('docente/'.Auth::user()->id.'/domicilio/registrar')}}">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label class ="text-dark">Estado</label>
                  <input type="text" class="form-control" 
                         placeholder="Escribe un estado" 
                         name="estado" 
                         value="{{old('estado')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">Municipio</label>
                  <input type="text" class="form-control" 
                         placeholder="Coloca un municipio" 
                         name="municipio"
                         value="{{old('municipio')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">Localidad</label>
                  <input type="text" class="form-control"  
                         placeholder="Coloca una localidad" 
                         name="localidad" 
                         value="{{old('localidad')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">Calle</label>
                  <input type="text" class="form-control"  
                         placeholder="Coloca una calle" 
                         name="calle"
                         value="{{old('calle')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">Colonia</label>
                  <input type="text" class="form-control"  
                         placeholder="Coloca una colonia" 
                         name="colonia"
                         value="{{old('colonia')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">Código Postal</label>
                  <input type="number" class="form-control" 
                         placeholder="Coloca un Código postal"  
                         name="cp"
                         value="{{old('cp')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">No. Interior</label>
                  <input type="number" class="form-control"
                         placeholder="Coloca un No. interio"  
                         name="no_interior"
                         value="{{old('no_interior')}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class ="text-dark">No. Exterior</label>
                  <input type="number" class="form-control" 
                         placeholder="Coloca un No. exterior"  
                         name="no_exterior"
                         value="{{old('no_exterior')}}"
                  >
                </div>
                <div class="col-md-4">
                    <span>
                      Nota: Si no tiene No. Interior/Exterior, coloca un 0
                    </span>
                </div>                
              </div>              
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-success">Agregar Domicilio</button>
                  <a href="{{url('padre_familia/'.Auth::user()->id.'/domicilio')}}" class="btn btn-danger">Cancelar</a>
              </div>
            </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
