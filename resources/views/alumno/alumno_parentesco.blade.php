@extends('layouts.app')

@section('titulo','Asignar familiar')

@section('body-class','profile-page sidebar-collapse')

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="description text-center">
          <h3 class="title">Asignar familiar para el  <b class="text-primary">{{Auth::user()->name}}</b></h3> 
        </div>
      </div>
      <div class="description ">                      
        <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/parentesco')}}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label class="text-dark">Selecciona un familiar</label>
                <select class="form-control text-dark"  name="padre_id">
                  @foreach($padres as $padre)
                  <option value="{{$padre->id}}" 
                    @if(old('padre_id') == $padre->id) selected @endif>{{$padre->nombre_completo}}</option>      
                  @endforeach
                </select>
              </div>   
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <label class="text-dark">Escribe el parentesco que tienen </label>
                <input type="text" class="form-control" placeholder="Escribe un parentesco" name="parentezco">
                @if($errors->has('parentezco'))
                  <span class="help-block text-danger">
                    <strong>
                        {{ $errors->first('parentezco') }}
                    </strong>
                  </span>
                @endif
              </div>   
            </div>
          </div>       
          <div class="text-center">  
            <button type="submit" class="btn btn-success">Agregar</button>            
            <a href="{{url('/alumno')}}" class="btn btn-danger">Regresar</a>
          </div>
        </form>        
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
      <div class="tab-content tab-space">                                                    
      <hr style="border-top-color: black;">
      <div class="table-responsive">         
       <table class="table">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Parentesco</th>                                                
            <th class="text-center">Opciones</th>
          </tr>
        </thead>                                
        <tbody>
          @foreach(Auth::user()->padres as $key => $padre)
          <tr>                                                        
            <td class="text-center">{{($key+1)}}</td>
            <td class="text-center">{{$padre->nombre_completo}}</td>
            <td class="text-center">{{$padre->pivot->parentezco}}</td>
            <td class="td-actions text-center">
              <form method="post" action="{{url('alumno/'.Auth::user()->nia.'/parentesco/'.$padre->id.'/delete')}}">
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
  </div>
</div>
</div>
</div>
@include('includes.footer')
@endsection
