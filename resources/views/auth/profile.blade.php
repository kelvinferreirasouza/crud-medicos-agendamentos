@extends('adminlte::page')

@section('title', 'Fácil Consulta - Perfil')

@section('content_header')
<center><h1>Perfil - {{Auth::user()->name}}</h1></center>
@stop

@section('content')

<div class="col-md-12">
    <div class="card card-info card-profile">
        <div class="card-header">
            <h3 class="card-title">Editar Perfil</h3>
        </div>
        <div class="card-body">
            <form class="form row" role="form" autocomplete="off" id="formLogin" method="post" action="{{route ('updateDoctor', Auth::user()->id)}}">
                {{ csrf_field() }}
                <div class="form-group col-md-12">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="name" minlength="6" maxlength="112" value="{{ Auth::user()->name }}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="endereco_consultorio">Endereço do Consultório </label>
                    <input type="text" class="form-control" id="address" name="address" minlength="6" maxlength="112" value="{{ Auth::user()->address }}" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="name"> Senha: </label>
                    <input type="password" class="form-control" name="password" minlength="6" maxlength="112" required>
                </div>

                <input type="hidden" name="form-submitted" value="1">
                <input type="submit" value="Salvar Alterações" class="btn btn-success btn-lg col-md-6">
                <button type="button" onclick="location.href = '/index'" class="btn btn-light btn-lg col-md-6">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop