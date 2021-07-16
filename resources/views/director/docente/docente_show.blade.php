@extends('layouts.app')

@section('titulo','Información del docente ')

@section('body-class','profile-page sidebar-collapse')


@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');" ></div>
<div class="main main-raised">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="profile">
                    <div class="avatar">
                        <img src="{{url('img/docente_1.jpg')}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <div class="name">
                        <h3 class="title">Información del Docente <b class="text-primary">{{$docente->name}}</b></h3>                
                    </div>
                </div>
            </div>          
        </div>        
        @if (session('mensaje'))              
            <div class="alert alert-success text-left">
                <div class="container-fluid">                  
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
                        <p class="h5">{{$docente->name}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <h4>Apellido Paterno</h4>
                        <p class="h5">{{$docente->apellidoP}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <h4>Apellido Materno</h4>
                        <p class="h5">{{$docente->apellidoM}}</p>
                    </div>          
                    <div class="form-group col-md-4">
                        <h4>Correo electronico</h4>
                        <p class="h5">{{$docente->email}}</p>
                    </div>                             
                    <div class="form-group col-md-4">
                        <h4>Telefono celular</h4>
                        <p class="h5">{{$docente->telefono_cel}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <h4>Telefono fijo</h4>
                        <p class="h5">{{$docente->telefono_fijo}}</p>
                    </div>                 
                    <div class="form-group col-md-4">
                        <h4>Edad</h4>
                        <p class="h5">{{$docente->edad}}</p>
                    </div>                
                </div>            
                <a href="{{url('director/docente/'.$docente->id.'/edit')}}" class="btn btn-success">
                    Editar información
                </a>
                <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
            </div>
            <div class="tab-pane text-center gallery" id="direccion">                        
                @foreach($docente->domicilios as $domicilio)
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
                        <h4>No Interior</h4>
                        <p class="h5">{{$domicilio->no_interior}}</p>
                    </div>
                    <div class="form-group col-md-4">
                        <h4>No Exterior</h4>
                        <p class="h5">{{$domicilio->no_exterior}}</p>
                    </div>                                        
                </div>    
                @if($docente->domicilios->count() == 1)
                <form method="post" action="{{url('director/docente/'.$docente->id.'/domicilio/'.$domicilio->id.'/delete')}}" >
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" >¿El domicilio no es el correcto?</button>              
                    <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
                </form>                
                @endif                                          
                @endforeach   
                @if($docente->domicilios->count() == 0)
                    <h3 class="text-danger">No tiene ningún domicilio asignado</h3>
                    <a href="{{url('director/docente/'.$docente->id.'/domicilio')}}" class="btn btn-success">Agregar Domicilio</a>
                    <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>                            
                @endif
            </div>
            <div class="tab-pane text-center gallery" id="materias">
                @if($docente->materias->isEmpty())
                    <h3 class="text-danger">No tiene ninguna materia asignada</h3>
                    <a href="{{url('director/docente/'.$docente->id.'/materias')}}" class="btn btn-success">
                    Agregar materia
                    </a>
                    <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
                @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nombre</th>                                                         
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Clave</th>
                                <th class="text-center">Opciones</th>                                                                        
                            </tr>
                        </thead>                                
                        <tbody>
                            @foreach($docente->materias as $numero => $materia)
                            <tr>
                                <td class="text-center">{{($numero+1)}}</td>                                                
                                <td class="text-center">{{$materia->name}}</td>
                                <td class="text-center">{{$materia->descripcion}}</td>
                                <td class="text-center">{{$materia->clave}}</td>
                                <td class="td-actions">
                                    <form  method="post" 
                                           action="{{url('director/docente/'.$docente->id.'/materia/'.$materia->id.'/delete')}}">
                                           {{csrf_field()}}
                                        <button type="submit" rel="tooltip" title="Quitar Materia" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm" >
                                            <i class="material-icons">clear</i>
                                        </button>                                               
                                    </form>                                                     
                                </td>
                            </tr>               
                            @endforeach
                        </tbody>                                
                    </table>                
                </div>
                <a href="{{url('director/docente/'.$docente->id.'/materias')}}" class="btn btn-success">
                    Agregar materia
                </a>
                <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
                @endif
            </div>
            <div class="tab-pane text-center gallery" id="puestos">
                @if($docente->puestos->isEmpty())
                    <h3 class="text-danger">No tiene ningún puesto asignado</h3>
                    <a href="{{url('director/docente/'.$docente->id.'/puestos')}}" class="btn btn-success">
                        Agregar puesto
                    </a>
                    <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
                @else
                    <div class="table-responsive" >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Nombre</th>                                                        
                                    <th class="text-center">Descripción</th>                        
                                    <th class="text-center">Opciones</th>                                                                       
                                </tr>
                            </thead>                                
                            <tbody>
                                @foreach($docente->puestos as $puesto)
                                <tr>
                                    <td class="text-center">{{$puesto->id}}</td>                                               
                                    <td class="text-center">{{$puesto->puesto}}</td>
                                    <td class="text-center">{{$puesto->descripcion}}</td>                          
                                    <td class="td-actions">                                                     
                                        <form method="post" 
                                            action="{{url('director/puesto/'.$puesto->id.'/docentes/'.$docente->id.'/delete')}}">
                                            {{csrf_field()}}
                                            <button type="submit" rel="tooltip" title="Quitar Puesto" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
                                                <i class="material-icons">clear</i>
                                            </button>                                                 
                                        </form>
                                    </td>
                                </tr>               
                                @endforeach
                            </tbody>                                
                        </table>                
                    </div>
                    <a href="{{url('director/docente/'.$docente->id.'/puestos')}}" class="btn btn-success">
                        Agregar puesto
                    </a>
                    <a href="{{url('director/docentes/index')}}" class="btn btn-danger">Regresar</a>
                @endif
            </div>            
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection