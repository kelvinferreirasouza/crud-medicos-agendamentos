@extends('adminlte::page')

@section('title', 'Fácil Consulta - Index')

@section('content_header')

            @if (Route::has('login'))
                <div class="top-right links text-center">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{route ('login')}}" class="btn btn-app">
                        <i class="fas fa-user-lock"></i> Login
                    </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-app">
                            <i class="fas fa-user-plus"></i> Cadastre-se
                        </a>
                        @endif

                        <a href="{{route ('scheduling')}}" class="btn btn-app">
                            <i class="fas fa-calendar-alt"></i> Agendamentos
                        </a>
                    @endauth
                </div>
            @endif
    
@stop

@section('content')

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
