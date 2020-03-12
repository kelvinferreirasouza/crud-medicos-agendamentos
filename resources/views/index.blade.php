@extends('adminlte::page')

@section('title', 'Fácil Consulta - Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Meu Perfil</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <button type="button" onclick="location.href ='{{route ('profile', Auth::user()->id )}}'" class="btn btn-info col-md-12">Editar Perfil</button>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">Excluir Perfil</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <button type="button" onclick="location.href ='{{route ('deleteDoctor', Auth::user()->id)}}'" class="btn btn-danger col-md-12">Deletar Perfil</button>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <h3 class="card-title">Minha Agenda</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <button type="button" onclick="location.href ='{{route ('listSchedule')}}'" class="btn btn-warning col-md-12">Editar Agenda</button>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Agendamentos</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <button type="button" onclick="location.href ='{{route ('scheduling')}}'" class="btn btn-success col-md-12">Visualizar Agenda</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop