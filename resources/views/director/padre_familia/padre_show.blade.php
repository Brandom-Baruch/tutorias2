@extends('layouts.app')

@section('titulo','Información del padre ' . $padre->name)

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} '); " ></div>
<div class="main main-raised">
<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{{url('img/padre6.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Información del padre de familia <b class="text-primary">{{$padre->name}}</b></h3>                
              </div>
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
         @if (session('eliminado')) <!--Si existe un de la variable eliminado, mostrara el contenido del de la variable eliminado-->   <div class="alert alert-danger text-left">
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
                <a class="nav-link" href="#documentos_padre" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Documentos
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
                  <h4 class ="text-dark">Nombre(s)</h4>
                  <p class="h5">{{$padre->name}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Apellido Paterno</h4>
                  <p class="h5">{{$padre->apellidoP}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Apellido Materno</h4>
                  <p class="h5">{{$padre->apellidoM}}</p>
                </div>          
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Correo electronico</h4>
                  <p class="h5">{{$padre->email}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Profesión</h4>
                  <p class="h5">{{$padre->profesion}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Curp</h4>
                  <p class="h5">{{ $padre->curp}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Ocupación</h4>
                  <p class="h5 text-dark">{{$padre->ocupacion}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Telefono fijo</h4>
                  <p class="h5">{{ $padre->telefono_fijo}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Telefono celular</h4>
                  <p class="h5">{{ $padre->telefono_cel}}</p>
                </div>                 
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Escolaridad</h4>
                  <p class="h5">{{ $padre->escolaridad}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Estado civil</h4>
                  <p class="h5">{{$padre->estado_civil}}</p>
                </div>
                <div class="form-group col-md-4">
                  <h4 class ="text-dark">Edad</h4>
                  <p class="h5">{{$padre->edad}}</p>
                </div>                
            </div>            
            <a href="{{url('director/padre_familia/'.$padre->id.'/edit')}}" class="btn btn-success" target="_blank">Editar información</a>
            <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery" id="direccion">                        
              @foreach($padre->domicilios as $domicilio)
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
                      <h4>Codigo Postal</h4>
                      <p class="h5">{{$domicilio->cp}}</p>
                    </div>                    
                    <div class="form-group col-md-4">
                      <h4>No. Interior</h4>
                      <p class="h5">{{$domicilio->no_interior}}</p>
                    </div>
                    <div class="form-group col-md-4">
                      <h4>No. Exterior</h4>
                      <p class="h5">{{$domicilio->no_exterior}}</p>
                    </div>                                        
                </div>    
                @if($padre->domicilios->count() == 1)
                <form method="post" action="{{url('director/padre_familia/'.$padre->id.'/domicilio/'.$domicilio->id.'/delete')}}" >
                  {{ csrf_field() }}
                  <div class="col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>              
                    <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
                  </div>
                </form>                
                @endif                                          
              @endforeach   
              @if($padre->domicilios->count() == 0)
                <div class="col-md-12 col-sm-12">
                  <h3 class="text-danger">No tiene agregado un domicilio</h3>
                  <a href="{{url('director/padre_familia/'.$padre->id.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>
                  <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>                            
                </div>
              @endif
          </div>
          <div class="tab-pane text-center gallery " id="parentezco">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">NIA</th>
                        <th class="text-center">Alumno</th>                                                                         
                        <th class="text-center">Parentesco</th>
                        <th class="text-center">Opciones</th>                                                                       
                    </tr>
                </thead>                                
                  <tbody>
                    @foreach($padre->alumnos as $alumno)
                      <tr>                                                        
                          <td class="text-center">{{$alumno->nia}}</td>
                          <td class="text-center">{{$alumno->nombre_completo}}</td>
                          <td class="text-center">{{$alumno->pivot->parentezco}}</td>
                          <td class="td-actions">                                                     
                            <a href="{{url('/director/alumno/'.$alumno->nia.'/show')}}" 
                                rel="tooltip" title="Ver Alumno" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm" target="_blank">
                                <i class="material-icons">person</i>
                            </a>                                                      
                          </td>
                      </tr>               
                    @endforeach
                  </tbody>                                
              </table>                
            </div>
            <a href="{{url('director/padre_familia/'.$padre->id.'/alumnos')}}" class="btn btn-success" target="_blank">Agregar familiar</a>
            <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>
          <div class="tab-pane text-center gallery table-responsive" id="documentos_padre"> 
            <h3>Nota: Los archivos con extensión <b>.doc, .xlsx y .pptx</b> no se pueden visualizar</h3>                  
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Archivo</th>                  
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($archivos as $key => $archivo)
                  <tr>
                    <th scope="row">{{ ($key+1) }}</th>
                    <td>{{ $archivo->nombre_archivo }}</td>
                    <td>
                      <a href="{{ url('director/download/'.$archivo->id.'/documento') }}"
                        target="_blank" class="btn btn-success btn-fab btn-fab-mini btn-rect btn-sm" 
                        rel="tooltip" title="Descargar documento"
                      >
                        <span class="material-icons">
                          download
                        </span>                     
                      </a>
                      <a href="{{ url('director/ver/'.$archivo->id.'/documento') }}"
                        target="_blank" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-sm"  rel="tooltip" title="Ver documento"
                      >
                        <span class="material-icons">
                          visibility
                        </span>                      
                      </a>                    
                    </td>                  
                  </tr>
                  @endforeach                
                </tbody>
              </table>
              <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>                           
            </div>            
          </div>          
        </div>              
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection