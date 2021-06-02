@extends('layouts.app')

@section('titulo','Panel del Docente')

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

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');" ></div>
<div class="main main-raised">
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{url('img/docente_1.jpg')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">Hola Docente <b class="text-primary">{{Auth::user()->name}}</b></h3>
                            </div>
                        </div>
                    </div>          
                </div>
                @if (session('status'))
                        <div class="alert alert-success">                            
                            ¡Tu contraseña ha sido restablecida!
                        </div>
                @endif        
                @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
                <div class="alert alert-success text-left">
                    <div class="container-fluid">                  
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
                                    <a class="nav-link" href="#materias" role="tab" data-toggle="tab">
                                        <i class="material-icons">chrome_reader_mode</i> Materias
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="#puestos" role="tab" data-toggle="tab">
                                        <i class="material-icons">folder_shared</i> Puestos
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
                                <h4>Teléfono celular</h4>
                                <p class="h5">{{Auth::user()->telefono_cel}}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <h4>Teléfono fijo</h4>
                                <p class="h5">{{Auth::user()->telefono_fijo}}</p>
                            </div>                 
                            <div class="form-group col-md-4">
                                <h4>Edad</h4>
                                <p class="h5">{{Auth::user()->edad}}</p>
                            </div>                
                        </div>            
                        <a href="{{url('docente/'.Auth::user()->id.'/edit')}}" class="btn btn-success">Editar información</a>                        
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
                        <form method="post" action="{{url('docente/'.Auth::user()->id.'/domicilio/'.$domicilio->id.'/delete')}}" >
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>
                        </form>                
                        @endif                                          
                        @endforeach   
                        @if(Auth::user()->domicilios->count() == 0)
                        <a href="{{url('docente/'.Auth::user()->id.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>                                                    
                        @endif
                    </div>
                    <div class="tab-pane text-center gallery" id="materias">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nombre</th>                                          
                                        <th class="text-center">Descripción</th>
                                        <th class="text-center">Clave</th>                                           
                                    </tr>
                                </thead>                                
                                <tbody>
                                    @foreach(Auth::user()->materias as $numero => $materia)
                                    <tr>
                                        <td class="text-center">{{($numero+1)}}</td>                                       
                                        <td class="text-center">{{$materia->name}}</td>
                                        <td class="text-center">{{$materia->descripcion}}</td>
                                        <td class="text-center">{{$materia->clave}}</td>                                        
                                    </tr>               
                                    @endforeach
                                </tbody>                                
                            </table>                
                        </div>                      
                    </div>
                    <div class="tab-pane text-center gallery" id="puestos">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Nombre</th>                                          
                                        <th class="text-center">Descripción</th>                                    
                                    </tr>
                                </thead>                                
                                <tbody>
                                    @foreach(Auth::user()->puestos as $key => $puesto)
                                    <tr>
                                        <td class="text-center">{{($key+1)}}</td>                                      
                                        <td class="text-center">{{$puesto->puesto}}</td>
                                        <td class="text-center">{{$puesto->descripcion}}</td>                       
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
