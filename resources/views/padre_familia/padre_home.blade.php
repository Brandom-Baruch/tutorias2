@extends('layouts.app')

@section('titulo','Datos del Padre de familia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
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
              <h3 class="title">Hola padre <b class="text-primary">{{Auth::user()->name}}</b></h3>                             
              <a href="{{url('padre_familia/entrevista')}}" class="btn btn-success">Realizar entrevista fresca</a>              
            </div>
          </div>
        </div>        
      </div>
      @if (session('status'))
        <div class="alert alert-success text-left">
          <div class="container-fluid">
            <div class="alert-icon">
              <i class="material-icons">check</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            Has cambiado tu contraseña exitosamente
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
      <div class="row">
          <div class="col-md-12 ml-auto mr-auto">
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
                <a class="nav-link" href="#subir_documentos" role="tab" data-toggle="tab">
                  <i class="material-icons">book</i> Documentos a subir
                </a>
              </li>                
              </ul>
            </div>
          </div>
        </div>    
      <div class="tab-content tab-space">
        <div class="tab-pane active text-center gallery" id="datos">
          <div class="row">              
            <div class="form-group col-md-4">
              <h4>Nombre(s)</h4>
              <p class="h5">{{Auth::user()->name}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Apellido Paterno</h4>
              <p class="h5">{{Auth::user()->apellidoP}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Apellido Materno</h4>
              <p class="h5">{{Auth::user()->apellidoM}}</p>
            </div>          
            <div class="form-group col-md-4">
              <h4>Correo electronico</h4>
              <p class="h5">{{Auth::user()->email}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Profesión</h4>
              <p class="h5">{{Auth::user()->profesion}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Ocupación</h4>
              <p class="h5">{{Auth::user()->ocupacion}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Telefono fijo</h4>
              <p class="h5">{{Auth::user()->telefono_fijo}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Telefono celular</h4>
              <p class="h5">{{Auth::user()->telefono_cel}}</p>
            </div> 
            <div class="form-group col-md-4">
              <h4>Curp</h4>
              <p class="h5">{{Auth::user()->curp}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Escolaridad</h4>
              <p class="h5">{{Auth::user()->escolaridad}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Estado civil</h4>
              <p class="h5">{{Auth::user()->estado_civil}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Edad</h4>
              <p class="h5">{{Auth::user()->edad}}</p>
            </div>                
          </div>            
          <a href="{{url('padre_familia/'.Auth::user()->id.'/edit')}}" class="btn btn-success">Editar información</a>    
        </div>
        <div class="tab-pane text-center gallery" id="direccion">                        
          @foreach(Auth::user()->domicilios as $domicilio)
          <div class="row">
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
              <h4>Código Postal</h4>
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
          @if(Auth::user()->domicilios->count() == 1)
          <form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/domicilio/'.$domicilio->id.'/delete')}}" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>                  
          </form>                
          @endif                                          
          @endforeach   
          @if(Auth::user()->domicilios->count() == 0)
            <h4 class="text-danger text-center">No has agregado tu domicilio</h4>
            <a href="{{url('padre_familia/'.Auth::user()->id.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>   
          @endif
        </div>
        <div class="tab-pane text-center gallery" id="parentezco">
          <div class="row">            
            @if(Auth::user()->alumnos()->count() == 0)
              <div class="text-center col-md-12">
                <h4 class="text-danger">No has asignado un parentesco con un alumno</h4>
                <a href="{{url('padre_familia/'.Auth::user()->id.'/parentesco')}}" class="btn btn-success">
                  Agregar familiar
                </a>
              </div>                           
            @else              
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Nombre</th>                                                                 
                      <th class="text-center">Parentesco</th>
                      <th class="text-center">Opciones</th>                                                                        
                    </tr>
                  </thead>                                
                  <tbody>
                    @foreach(Auth::user()->alumnos as $key => $alumno)
                      <tr>
                        <td class="text-center">{{($key+1)}}</td>                                                        
                        <td class="text-center">{{$alumno->nombre_completo}}</td> 
                        <td class="text-center">{{$alumno->pivot->parentezco}}</td>
                        <td class="td-actions">
                          <form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/parentesco/'.$alumno->nia.'/delete')}}">  
                            {{csrf_field()}}                   
                            <button type="submit" rel="tooltip" title="Quitar familiar" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                              <i class="fa fa-times"></i>
                            </button>                                                      
                          </form>
                        </td>
                      </tr>               
                    @endforeach
                  </tbody>                                
                </table>
                <div class="text-center col-md-12">                
                  <a href="{{url('padre_familia/'.Auth::user()->id.'/parentesco')}}" class="btn btn-success">Agregar familiar</a>
                </div> 
              </div>              
            @endif                
          </div>
        </div>
        <div class="tab-pane text-center gallery table-responsive" id="subir_documentos">          
          <h5 class="text-justify mb-5">
            En este espacio puedes subir imagenes como: 
            <b>CURP, Acta de Nacimiento, Comprobante de domicilio, entre otras cosas.</b>
            Esto tiene con la finalidad de obtener mas información acerca de usted y reducir el uso del papel.<br> 
            Para subir un archivo debe de nombrarlo primero que tipo de archivo es (CURP, Acta de Nacimiento, etc), después
            agregar su nombre.  Ejemplo: <b>CURP_Alejandro</b>
          </h5>
          <form method="post" action="{{url('/padre_familia/'.Auth::user()->id.'/documento')}}" enctype="multipart/form-data"
            class="table-responsive">
            {{ csrf_field() }}                  
            <input type="file" name="archivo" class="mb-4"  required><br>
            <button type="submit" class="btn btn-success">Subir archivo</button>                                
          </form><hr>
          <h3>Nota: Los archivos con extensión <b>.doc, .xlsx y .pptx</b> no se pueden visualizar</h3>
          <div class="table-responsive">
            <table class="table table-hover">
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
                    <form method="post" action="{{ url('/padre_familia/documento/'.$archivo->id.'/delete') }}">                
                      {{ csrf_field() }}                        
                      <a href="{{ url('padre_familia/ver/'.$archivo->id.'/documento') }}"
                        target="_blank" class="btn btn-info btn-fab btn-fab-mini btn-rect btn-md"  rel="tooltip" title="Ver documento"
                      >
                        <span class="material-icons">
                          visibility
                        </span>                      
                      </a>

                      <button type="submit" rel="tooltip" title="Eliminar documento" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-md">
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
</div>
</div>
@include('includes.footer')
@endsection
