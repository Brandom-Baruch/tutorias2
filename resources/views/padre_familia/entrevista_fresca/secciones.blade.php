@extends('layouts.app')

@section('titulo','Secciones Entrevista')

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
          <div class="profile" style="margin: 20px;">                                                     
          </div>
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
      <div class="row">        
        @if(Auth::user()->entrevista->where('alumno_id',$alumno->nia)->first()->marca_x && Auth::user()->entrevista->where('alumno_id',$alumno->nia)->first()->marca_si_no)
          <div class="col-md-12 text-center">
            <form method="post" action="{{url('padre_familia/entrevista/'.$alumno->nia.'/secciones')}}">
              {{csrf_field()}}                        
              <button class="btn btn-success">Finalizar entrevista fresca</button>
              <a href="{{url('padre_familia/entrevista')}}" class="btn btn-danger">Regresar</a>                     
            </form>
          </div>          
        @else
          <ol start="1">
            @if(Auth::user()->entrevista->where('alumno_id',$alumno->nia)->first()->marca_x)
            <li><a disabled="true">Aspectos que tiene tu hijo</a></li>
            @else
            <li><a href="{{url('/padre_familia/entrevista/'.$alumno->nia.'/marca_x')}}">Aspectos que tiene tu hijo</a></li>
            @endif
            @if(Auth::user()->entrevista->where('alumno_id',$alumno->nia)->first()->marca_si_no)
            <li><a disabled="true">características y cualidades que consideres que tiene o no su hijo</a></li>
            @else
            <li><a href="{{url('/padre_familia/entrevista/'.$alumno->nia.'/marca_si_no')}}">características y cualidades que consideres que tiene o no su hijo </a></li>
            @endif                                     
          </ol>
          <div class="col-md-12 text-center">
            <a href="{{url('padre_familia/entrevista')}}" class="btn btn-danger">Regresar</a>
          </div>             
        @endif                         
      </div>                            
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
