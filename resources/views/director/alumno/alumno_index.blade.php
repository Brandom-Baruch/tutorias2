@extends('layouts.app')

@section('titulo','Listado de alumnos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="description text-center">
           <h3 class="title">Listado de Alumnos</h3>                                                                             
          <form method="get" action="{{url('/director/alumno/search')}}" class="form-inline">
            <a href="{{url('/director/alumno/create')}}" class="btn btn-primary" style="margin-right:20px;">Agregar nuevo Alumno</a>
            <input type="text"  placeholder="¿Qué alumno buscas?" class="form-control " name="search">
            <button type="submit" class="btn btn-primary btn-fab  btn-rect">
                <i class="material-icons">search</i>
            </button>
          </form>
        </div>        
      </div>                                                
       @if (session('mensaje'))
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
        <div class="table-responsive text-center">          
          <table class="table">
              <thead>
                  <tr>
                      <th>NIA</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Correo electrónico</th>
                      <th>Opciones</th>
                  </tr>
              </thead>
              @foreach($alumnos as $alumno)
              <tbody>
                  <tr>
                      <td>{{$alumno->nia}}</td>
                      <td>{{$alumno->name}}</td>
                      <td>{{$alumno->apellidoP}}</td>
                      <td>{{$alumno->apellidoM}}</td>
                      <td>{{$alumno->email}}</td>
                      <td class="td-actions text-right">
                        <form method="post" action="{{url('/director/alumno/'.$alumno->nia.'/delete')}}">
                            {{csrf_field()}}  

                          <a href="{{url('director/alumno/'.$alumno->nia.'/familiares')}}"rel="tooltip" title="Asignar Parentesco" class="btn btn-warning btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="material-icons">person_search</i>
                          </a>
                                                    
                          <a href="{{url('director/alumno/'.$alumno->nia.'/show')}}" rel="tooltip" title="Ver Alumno" 
                          class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-user"></i>
                          </a>

                          <a href="{{url('/director/alumno/'.$alumno->nia.'/edit')}}" rel="tooltip" title="Editar Alumno" 
                          class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-edit"></i>
                          </a>
                          <button type="submit" rel="tooltip" title="Eliminar Alumno" 
                          class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                          </button>
                        </form>
                      </td>
                  </tr>                 
              </tbody>              
              @endforeach
          </table>          
        </div>    
        <div class="d-flex">
            <div class="mx-auto">
              {{ $alumnos->links("pagination::bootstrap-4") }}
            </div>
        </div>                                                                                                          
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
