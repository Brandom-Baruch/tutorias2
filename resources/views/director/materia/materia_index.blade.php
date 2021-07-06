@extends('layouts.app')

@section('titulo','Listado de materias')

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="container">
    <div class="row">        
      <div class="col-md-12 text-center">
        <h3 class="title">Listado de Materias</h3> 
        <a href="{{url('/director/materia/create')}}" class="btn btn-primary mb-4" >Agregar nueva materia</a> 
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
        <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->          
        @if (session('eliminado')) 
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
        <div class="table-responsive">        
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Clave</th>
                <th>Descripción</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($materias as $key => $materia)
                <tr>                    
                  <th>{{ ($key+1) }}</th>
                  <td>{{$materia->name}}</td>
                  <td>{{$materia->clave}}</td>
                  <td>{{$materia->descripcion}}</td>
                  <td>                        
                    <form method="post" action="{{url('director/materia/'.$materia->id.'/delete')}}">
                      {{csrf_field()}}

                      <a href="{{url('director/materia/'.$materia->id.'/docentes')}}" rel="tooltip" 
                         title="Asignar materias" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="fa fa-user"></i>
                      </a>                         

                      <a href="{{url('director/materia/'.$materia->id.'/edit')}}" rel="tooltip" title="Editar Materia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="fa fa-edit"></i>
                      </a >
                      <button type="submit" rel="tooltip" title="Eliminar Materia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="fa fa-times"></i>
                      </button>
                    </form>                        
                  </td>
                </tr>
              @endforeach                  
            </tbody>
          </table> 
        </div>                                                                       
        <div class="d-flex">
          <div class="mx-auto">
            {{ $materias->links("pagination::bootstrap-4") }}
          </div>
        </div>  
      </div>
    </div>                                       
  </div>
</div>
@include('includes.footer')
@endsection
