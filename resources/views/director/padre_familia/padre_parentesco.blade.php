@extends('layouts.app')

@section('titulo','Asignar parentesco')

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
      <div class="description ">           
        <h3 class="title p-4 text-center">Asignar parentesco(s) entre alumno y el padre de familia <b class="text-primary">{{$padre->name}}</b></h3> <form method="post" action="{{url('director/padre_familia/'.$padre->id.'/alumnos')}}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label style="color: black;">Selecciona un alumno</label>
                <select class="form-control"  name="alumno_id"  style="color: black;">
                  @foreach($alumnos as $alumno)
                    <option value="{{$alumno->nia}}"
                      @if(old('alumno_id',$alumno->nia) == $alumno->nia) selected @endif>
                      {{$alumno->nombre_completo}} 
                    </option>       
                  @endforeach
                </select>
              </div>   
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label style="color: black;">Escribe el parentesco que tiene con el alumno</label>
                <input type="text" class="form-control" placeholder="Ejemplo: Padre" value="{{ old('name') }}" 
                  name="parentezco">
                @if($errors->has('parentezco'))
                  <span class="help-block text-danger">
                    <strong class="text-center">
                      {{ $errors->first('parentezco') }}
                    </strong>
                  </span>
                @endif
              </div>   
            </div>
          </div>       
          <div class="text-center">
              <button type="submit" class="btn btn-success">Agregar</button>            
              <a href="{{url('/director/padres_familia/index')}}" class="btn btn-danger">Regresar</a>
          </div>
        </form>        
      </div>        
      <div class="tab-content tab-space">        
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
                        <td class="td-actions text-center">
                          <form method="post" action="{{url('director/padre_familia/'.$padre->id.'/alumnos/'.$alumno->nia.'/delete')}}">
                            {{csrf_field()}}                                                                
                            <button type="submit" rel="tooltip" title="Quitar alumno" class="btn btn-danger btn-fab btn-fab-mini btn-rect btn-sm">
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
