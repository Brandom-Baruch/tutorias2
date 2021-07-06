@extends('layouts.app')

@section('titulo','Listado de padres')

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
        <h3 class="title">Listado de Padres de familia</h3>
        <a href="{{url('/director/padre_familia/create')}}" class="btn btn-primary">Registrar nuevo Padre</a>
        <form method="get" action="{{url('/director/padre_familia/search')}}" class="form-inline" 
              style="margin-left: 455px;">              
          <input type="text"  placeholder="¿Qué familiar buscas?" class="form-control" name="search">
          <button type="submit" class="btn btn-primary btn-fab  btn-rect">
              <i class="material-icons">search</i>
          </button>
        </form>
      </div>
    </div>             
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
    <div class=" table-responsive text-center">           
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Curp</th>
                    <th>Profesión</th>
                    <th>Escolaridad</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            @foreach($padres as $key => $padre)
            <tbody>                
                <tr>
                    <td>{{($key+1)}}</td>
                    <td>{{$padre->name}}</td>
                    <td>{{$padre->apellidoP}}</td>
                    <td>{{$padre->apellidoM}}</td>
                    <td>{{$padre->curp}}</td>
                    <td>{{$padre->profesion}}</td>
                    <td>{{$padre->escolaridad}}</td>
                    <td style="width: 150px;">
                      <form method="post" action="{{url('/director/padre_familia/'.$padre->id.'/delete')}}">
                        {{csrf_field()}}                    
                        <a href="{{url('director/padre_familia/'.$padre->id.'/show')}}" rel="tooltip" title="Ver Padre de familia" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                            <i class="fa fa-user"></i>
                        </a>

                        <a  href="{{url('director/padre_familia/'.$padre->id.'/edit')}}" rel="tooltip" title="Editar Padre de familia" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button type="submit" rel="tooltip" title="Eliminar Padre de familia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                            <i class="fa fa-times"></i>
                        </button>
                      </form>
                    </td>
                </tr>                  
            </tbody>
            @endforeach
        </table>
        <div class="d-flex">
          <div class="mx-auto">
            {{ $padres->links("pagination::bootstrap-4") }} <!--Paginación-->   
          </div>
        </div>                      
    </div>                                                                          
  </div>
</div>
@include('includes.footer')
@endsection
