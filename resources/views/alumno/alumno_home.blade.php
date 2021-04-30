@extends('layouts.app')

@section('titulo','Datos del alumno')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
<a href="{{url('alumno/encuestas')}}" class="dropdown-item">Panel de entrevistas</a>   
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
              <img src="{{url('img/alumno.png')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>       
            <div class="name">
              <h3 class="title">Hola Alumno <b class="text-primary">{{Auth::user()->name}}</b></h3>               
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
        <div class="col-md-12 col-sm-12">
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
                  <i class="material-icons">person_search</i> Parentezcos
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
      <br>      
      <div class="tab-content tab-space">
        <div class="tab-pane active text-center gallery" id="datos">
          <div class="form-row">
            <div class="form-group col-md-4">
              <h4>Nia</h4>
              <p class="h5">{{Auth::user()->nia}}</p>
            </div>
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
              <h4>Correo electrónico</h4>
              <p class="h5">{{Auth::user()->email}}</p>
            </div>            
            <div class="form-group col-md-4">
              <h4>Grupo</h4>
              <p class="h5">{{Auth::user()->grupo->name}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Teléfono celular</h4>
              <p class="h5">{{Auth::user()->phone}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Fecha de nacimiento</h4>
              <p class="h5">{{Auth::user()->fechaN}}</p>
            </div>                 
            <div class="form-group col-md-4">
              <h4>Edad</h4>
              <p class="h5">{{Auth::user()->edad}}</p>
            </div>
            <div class="form-group col-md-4">
              <h4>Género</h4>
              <p class="h5">{{Auth::user()->genero}}</p>
            </div>                
          </div>            
          <a href="{{url('alumno/'.Auth::user()->nia.'/edit')}}" class="btn btn-success">Editar información</a>    
        </div>
        <div class="tab-pane text-center gallery" id="direccion">                        
          @foreach(Auth::user()->domicilios as $domicilio)
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
          <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/domicilio/'.$domicilio->id.'/delete')}}" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>                  
          </form>                
          @endif                                          
          @endforeach   
          @if(Auth::user()->domicilios->count() == 0)
          <h3 class="text-danger">No tiene asignado un domicilio</h3>
          <a href="{{url('alumno/'.Auth::user()->nia.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>   
          @endif
        </div>
        <div class="tab-pane text-center gallery" id="parentezco">
          @if(Auth::user()->padres->isEmpty())
            <h3 class="text-danger">No tiene parentesco con un familiar</h3>
            <a href="{{url('alumno/'.Auth::user()->nia.'/parentezco')}}" class="btn btn-success">Agregar familiar</a>
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
                @foreach(Auth::user()->padres as $padre)
                <tr>
                  <td class="text-center">{{$padre->id}}</td>                                                        
                  <td class="text-center">{{$padre->name}} {{$padre->apellidoP}} {{$padre->apellidoM}}</td> 
                  <td class="text-center">{{$padre->pivot->parentezco}}</td>
                  <td class="td-actions">
                   <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/parentezco/'.$padre->id.'/delete')}}">  
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
          </div>          
          <a href="{{url('alumno/'.Auth::user()->nia.'/parentezco')}}" class="btn btn-success">Agregar familiar</a>
          @endif 
        </div>
        <div class="tab-pane text-center gallery" id="materias">            
          <h3 class="text-center">
            Materias del grupo <b class="text-primary">{{Auth::user()->grupo->name}}</b> grado <b class="text-primary">{{Auth::user()->grupo->grado}}</b> y grupo <b class="text-primary">{{Auth::user()->grupo->grupo}}</b>            
          </h3>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">Nombre</th>                                                               
                  <th class="text-center">Clave</th>
                  <th class="text-center">Descripción</th>                                                                
                </tr>
              </thead>                                
              <tbody>
                @foreach(Auth::user()->grupo->materias as $numero => $materia)
                <tr>
                  <td class="">{{($numero+1)}}</td>                                                        
                  <td class="">{{$materia->name}}</td>
                  <td class="">{{$materia->clave}}</td>
                  <td class="text-left">{{$materia->descripcion}}</td>                     
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
@include('includes.footer')
@endsection
