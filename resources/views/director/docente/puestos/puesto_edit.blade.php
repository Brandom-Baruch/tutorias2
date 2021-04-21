@extends('layouts.app')

@section('titulo','Editar Puesto')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
    <div class="container">             

        <div class="section">

            <h2 class="title text-center" style="color:black;">Editar puesto <b class="text-primary">{{$puesto->puesto}}</b></h2>           
             <form method="post" action="{{url('/director/puestos/'.$puesto->id.'/edit')}}">
                {{ csrf_field() }}

                <div class="row">            
                    <div class="col-sm-6">
                      <div class="form-group {{ $errors->has('puesto') ? ' has-error' : '' }}">
                        <label class="text-dark">Nombre del puesto</label>
                        <input type="text" class="form-control"
                               placeholder="Escribe el nombre del puesto" 
                               value="{{ old('puesto',$puesto->puesto) }}" 
                               name="puesto">
                       @if ($errors->has('puesto'))
                          <span class="help-block text-danger">
                              <strong>{{ $errors->first('puesto') }}</strong>
                          </span>
                        @endif                                   
                      </div>                          
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="text-dark">Descripción del puesto</label>
                        <textarea class="form-control" rows="1" name="descripcion">{{ $puesto->descripcion}}</textarea>
                           @if ($errors->has('descripcion'))
                                <span class="help-block text-center text-danger">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                      </div>
                    </div> 
                </div>                                                                                                              
                <div class="text-center col-md-12">
                    <button class="btn btn-success">Editar Puesto</button>
                    <a href="{{url('director/puestos/index')}}" class="btn btn-danger">Cancelar</a> 
                </div>

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
