@extends('layouts.app')

@section('titulo','Editar información')

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')

  @if(Auth::user()->puestos->where('puesto','Director')->first())
      @include('includes.links_director')
  @endif  
  @if(Auth::user()->puestos->where('puesto','Tutor')->first() && Auth::user()->materias()->where('name','like','Tutorias%')->first())
    <a class="dropdown-item" href="{{url('docente/tutorias/encuestas')}}">Panel de encuestas <br>Tutorias</a>
  @endif

  <a href="{{url('docente')}}">Panel de control</a>  
@endsection



@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="title">Escoge tu domicilio</h3>          
          <a href="{{ url('docente/'.Auth::user()->id.'/domicilio/registrar') }}" class="btn btn-warning" rel="tooltip" title="Registra tu domicilio">
              ¿No encuentras tu domicilio?
          </a>
          <a href="{{url('docente')}}" class="btn btn-danger">Regresar</a>         
        </div>
      </div>          
      <div class="tab-pane  text-center">
       @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->     
            <div class="alert alert-warning text-left">
                <div class="container-fluid">                  
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
          <table class="table  table-responsive-sm table-responsive-md table-responsive-lg">
              <thead>
                  <tr>                      
                      <th class="text-center">Codigo Postal</th>
                      <th>Estado</th>
                      <th>Municipio</th>
                      <th>Calle</th>                      
                      <th class="text-center">Colonia</th>
                      <th class="text-center">Localidad</th>
                      <th class="text-center">No Exterior</th>
                      <th class="text-center">No Interior</th>
                      <th class="text-center">Opciones</th>
                  </tr>
              </thead>
              @foreach($domicilios as  $domicilio)
              <tbody>
                  <tr>                      
                      <td class="text-center">{{$domicilio->cp}}</td>
                      <td>{{$domicilio->estado}}</td>
                      <td>{{$domicilio->municipio}}</td>
                      <td>{{$domicilio->calle}}</td>                  
                      <td class="text-center">{{$domicilio->colonia}}</td>
                      <td class="text-center">{{$domicilio->localidad}}</td>
                      <td class="text-center">{{$domicilio->no_exterior}}</td>
                      <td class="text-center">{{$domicilio->no_interior}}</td>
                      <td class="td-actions">
                          <form method="post" action="{{url('/docente/'.Auth::user()->id.'/domicilio')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="docente_id" value="{{Auth::user()->id}}">
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
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
