@extends('layouts.app')

@section('titulo','Información del alumno ' . $alumno->name)

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');" ></div>
<div class="main main-raised">
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{url('img/alumno.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Información del alumno <b class="text-primary">{{$alumno->name}}</b></h3>                
              </div>
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
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#datos" role="tab" data-toggle="tab">
                    <i class="material-icons">person</i> Datos generales
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#direccion" role="tab" data-toggle="tab">
                    <i class="material-icons">home</i> Domicilio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#parentezco" role="tab" data-toggle="tab">
                    <i class="material-icons">person_search</i> Parentescos
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#materias" role="tab" data-toggle="tab">
                    <i class="material-icons">chrome_reader_mode</i> Materias
                  </a>
                </li>                
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="datos">
            <div class="form-row">
            	<div class="form-group col-md-4">
                <h4>Nia</h4>
                <p class="h5">{{ $alumno->nia}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Nombre(s)</h4>
                <p class="h5">{{ $alumno->name}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Apellido Paterno</h4>
                <p class="h5">{{ $alumno->apellidoP}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Apellido Materno</h4>
                <p class="h5">{{$alumno->apellidoM}}</p>
              </div>          
              <div class="form-group col-md-4">
                <h4>Correo electronico</h4>
                <p class="h5">{{$alumno->email}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Genero</h4>
                <p class="h5">{{$alumno->genero}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Grupo</h4>
                <p class="h5">{{$alumno->grupo_nombre}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Telefono celular</h4>
                <p class="h5">{{$alumno->phone}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Fecha de nacimiento</h4>
                <p class="h5">{{$alumno->fechaN}}</p>
              </div>                 
              <div class="form-group col-md-4">
                <h4>Edad</h4>
                <p class="h5">{{$alumno->edad}}</p>
              </div>                
            </div>            
            <a href="{{url('director/alumno/'.$alumno->nia.'/edit')}}" class="btn btn-success" target="_blank">Editar información</a>
            <a href="{{url('/director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="direccion">                        
            @foreach($alumno->domicilios as $domicilio)
            <div class="form-row">
              <div class="form-group col-md-4">
                <h4>Estado</h4>
                <p class="h5">{{$domicilio->estado}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Municipio</h4>
                <p class="h5">{{$domicilio->municipio}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Localidad</h4>
                <p class="h5">{{$domicilio->localidad}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Calle</h4>
                <p class="h5">{{$domicilio->calle}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Colonia</h4>
                <p class="h5">{{$domicilio->colonia}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>No Interior</h4>
                <p class="h5">{{$domicilio->no_interior}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>No Exterior</h4>
                <p class="h5">{{$domicilio->no_exterior}}</p>
              </div>
              <div class="form-group col-md-4">
                <h4>Codigo Postal</h4>
                <p class="h5">{{$domicilio->cp}}</p>
              </div>                    
            </div>    
            @if($alumno->domicilios->count() == 1)
            <form method="post" action="{{url('director/alumno/'.$alumno->nia.'/domicilio/'.$domicilio->id.'/delete')}}" >
              {{ csrf_field() }}
              <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>              
              <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
            </form>                
            @endif                                          
            @endforeach   
            @if($alumno->domicilios->count() == 0)
              <h3 class="text-danger">No tiene asignado un domicilio</h3>
              <a href="{{url('director/alumno/'.$alumno->nia.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>
              <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>                            
            @endif
          </div>
          <div class="tab-pane text-center gallery" id="parentezco">
            @if($alumno->padres->isEmpty())
            <h3 class="text-danger">No tiene parentesco con un familiar</h3>
            @else
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>                                                                         
                    <th class="text-center">Parentezco</th>
                    <th class="text-center">Opciones</th>                                                                        
                  </tr>
                </thead>                                
                <tbody>
                  @foreach($alumno->padres as $numero => $padre)
                  <tr>
                    <td class="text-center">{{($numero+1)}}</td>                                                        
                    <td class="text-center">{{$padre->nombre_completo}}</td> 
                    <td class="text-center">{{$padre->pivot->parentezco}}</td>
                    <td class="td-actions">                                                     
                      <form method="post" action="{{url('director/alumno/'.$alumno->nia.'/familiares/'.$padre->id.'/delete')}}">
                        {{csrf_field()}}
                        <a href="{{url('/director/padre_familia/'.$padre->id.'/show')}}" 
                          rel="tooltip" title="Ver Familiar" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                          <i class="material-icons">person</i>
                        </a>                                                      
                        <button rel="tooltip" title="Quitar Familiar" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                          <i class="material-icons">clear</i>
                        </button>
                      </form>
                    </td>
                  </tr>               
                  @endforeach
                </tbody>                                
              </table>                
            </div>
            @endif            
            <a href="{{url('director/alumno/'.$alumno->nia.'/familiares')}}" class="btn btn-success" target="_blank">Agregar familiar</a>
            <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="materias">
            @if($alumno->grupo)
              <h3>Materias del grupo <b class="text-primary">{{$grupo->name}}</b></h3>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Nombre</th>                                                                          
                      <th class="text-center">Clave</th>
                      <th class="text-center">Descripción</th>                                                                               
                    </tr>
                  </thead>                                
                  <tbody>
                    @foreach($materia as $materia)
                    <tr>
                      <td class="">{{$materia->id}}</td>                                                        
                      <td class="">{{$materia->name}}</td>
                      <td class="">{{$materia->clave}}</td>
                      <td class="text-left">{{$materia->descripcion}}</td>                     
                    </tr>               
                    @endforeach
                  </tbody>                                
                </table>                
              </div>
              <a href="{{url('director/grupo/'.$grupo->id.'/alumnos/show')}}" class="btn btn-success">Ver Grupo</a>
              <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a> 
            @else
              <h3 class="text-danger">No tiene materias el grupo</h3>
              <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Regresar</a>                          
            @endif                        
          </div>         
        </div>              
      </div>
    </div>
  </div>
  @include('includes.footer')
  @endsection