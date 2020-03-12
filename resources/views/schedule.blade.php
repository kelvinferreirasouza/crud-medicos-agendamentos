@extends('adminlte::page')

@section('title', 'Fácil Consulta - Agenda')

@section('content_header')
<h1 class="text-center">Minha Agenda</h1>
@stop

@section('content')
<div class="row">
    <div class='col-sm-4'>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Adicionar Hora/Data</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form class="form row" role="form" autocomplete="off" id="formLogin" method="post" action="{{route ('saveSchedule', Auth::user()->id)}}">
                    {{ csrf_field() }}
                    <div class="form-group col-md-12">
                        <label for="nome">Adicionar:</label>
                        <input type="datetime-local" class="form-control" name="date" required>
                    </div>

                    <input type="hidden" name="form-submitted" value="1">
                    <input type="submit" value="Adicionar" class="btn btn-block btn-info col-md-12">
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Adicionados</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Data / Hora</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($schedules as $schedule)
                            @if ($schedule->doctor_id == Auth::user()->id)
                            <tr>
                                @php
                                    $date = date("d/m/Y H:i:s", strtotime($schedule->date));
                                    echo '<td>' . $date . '</td>';
                                @endphp
                                @if ($schedule->busy != 0)
                                    <td><span class="badge badge-danger">Agendado</span></td>
                                    <td></td>    
                                @else
                                <td><span class="badge badge-success">Disponível</span></td>
                                <td><button type="button" onclick="location.href ='{{route ('deleteSchedule', $schedule->id)}}'" class="btn btn-block btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></td>
                                @endif      
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop