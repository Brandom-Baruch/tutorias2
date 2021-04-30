@extends('layouts.app')

@section('titulo','Asignar domicilio')

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
        <div class="col-md-12 text-center">
          <h3 class="title">Escoge tu domicilio</h3>          
          <a href="{{ url('alumno/'.Auth::user()->nia.'/domicilio/registrar') }}" class="btn btn-warning" rel="tooltip" title="Registra tu domicilio">
              ¿No encuentras tu domicilio?
          </a>
          <a href="{{url('alumno')}}" class="btn btn-danger">Regresar</a>         
        </div>
      </div>            
      <div class="tab-pane  text-center">
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
        @if (session('eliminado')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado--> 
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
        <div class="row">
          <div class=" table-responsive">
            <table class="table table-hover">
              <thead>
                  <tr>                      
                      <th>Codigo Postal</th>
                      <th>Estado</th>
                      <th>Municipio</th>
                      <th>Calle</th>                      
                      <th>Colonia</th>
                      <th>Localidad</th>
                      <th>No Exterior</th>
                      <th>No Interior</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
              @foreach($domicilios as  $domicilio)
              <tbody>
                  <tr>                      
                      <td>{{$domicilio->cp}}</td>
                      <td>{{$domicilio->estado}}</td>
                      <td>{{$domicilio->municipio}}</td>
                      <td>{{$domicilio->calle}}</td>                  
                      <td>{{$domicilio->colonia}}</td>
                      <td>{{$domicilio->localidad}}</td>
                      <td>{{$domicilio->no_exterior}}</td>
                      <td>{{$domicilio->no_interior}}</td>
                      <td>
                          <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/domicilio')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="alumno_id" value="{{Auth::user()->nia}}">
                            <input type="hidden" name="domicilio_id" value="{{$domicilio->id}}">
                            <button type="submit" rel="tooltip" title="Agregar domicilio" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                                <i class="material-icons">check</i>
                            </button>                           
                          </form>
                      </td>
                  </tr>                 
              </tbody>
              @endforeach
            </table> 
          </div>                                                            
        </div>
        <div class="d-flex">
            <div class="mx-auto">
              {{ $domicilios->links("pagination::bootstrap-4") }}
            </div>
        </div>                                                                         
      </div>                       
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
