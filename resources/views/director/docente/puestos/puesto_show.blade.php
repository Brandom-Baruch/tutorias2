@extends('layouts.app')

@section('titulo','Asignar docentes para la materia ')

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}" class="dropdown-item">Panel de control</a>  

@endsection


@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        
      </div>
      <div class="description text-center">       
        <h3 class="title">Asignar puesto de <b class="text-primary">{{$puesto->puesto}}</b></h3>         
        <form method="post" action="{{url('/director/puesto/'.$puesto->id.'/docentes')}}">
          {{ csrf_field() }}
            <div class="form-group">
              <label style="color: black;">Selecciona un docente</label>
              <select class="form-control"  name="docente_id"  style="color: black;">
                @foreach($docentes as $docente)
                  <option value="{{$docente->id}}" style="color: black;">{{$docente->name}}</option>
                @endforeach
              </select>
            </div>
          <button class="btn btn-success">Agregar docente</button>
          <a href="{{url('director/puestos/index')}}" class="btn btn-danger">Regresar </a>
        </form>        
      </div>    
      <div class="tab-content tab-space">
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
          <hr style="border-top-color: black;">
          <div class="row">         
           <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                <thead>
                    <tr>                        
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido Paterno</th>                            
                        <th class="text-center">Apellido Materno</th>
                        <th class="text-center">Opciones</th>
                    </tr>
                </thead>                                
                    <tbody>
                      @foreach($puesto->docentes as $docente)
                        <tr>                            
                            <td class="text-center">{{$docente->name}}</td>
                            <td class="text-center">{{$docente->apellidoP}}</td>                                                   
                            <td class="text-center">{{$docente->apellidoM}}</td>                            
                            <td class="td-actions text-center opcionesM">
                              <form method="post" action="{{url('/director/puesto/'.$puesto->id.'/docentes/'.$docente->id.'/delete')}}">
                                {{csrf_field()}}

                                <a href="{{url('director/docente/'.$docente->id.'/view')}}" rel="tooltip" 
                                   title="Visualizar Docente" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                                    <i class="fa fa-user"></i>
                                </a>
                                
                                <button type="submit" rel="tooltip" title="Quitar docente" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
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
