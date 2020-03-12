@extends('adminlte::page')

@section('title', 'Fácil Consulta - Agendamentos')

@section('content_header')
<h1 class="text-center">AGENDAMENTOS:</h1>
@stop

@section('content')
<div class="col-sm-12 row">

    @forelse ($doctors as $doctor)
    <div class="col-sm-4">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="https://lh3.googleusercontent.com/proxy/fja5kI1RB83NY85EfuzOAPj8FC_-nTnRkB0RIa6DPRijnMJvHI5ZbQn6sEapd_kMNd2Qg0Iy7FFG0CaRFkLfowzdAxzNmaYpWdXdU9dTqYKc_IvChMbAc8xSlipAadIs8KQPvoJNRkuT8e9oLjU7xoG5caVtoLk" alt="User profile picture">
                </div>
                
                <h3 class="profile-username text-center">Dr(a). {{$doctor->name}} <?php $doctorId = $doctor->id ?></h3>
                <p class="text-muted text-center">Endereço: {{$doctor->address}}</p>

                @php
                    $doctorSchedules = $doctor->getDoctorSchedules($doctor->id);
                    
                    foreach ($doctorSchedules as $schedule)
                    {

                        $schedule = explode(' ', $schedule);
                        
                        // formata a exibição da data
                        $data = date("d/m/Y", strtotime($schedule[0]));

                        // lista a data
                        echo '<ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Data:</b> ' . $data . '<br>' .
                                        '<a class="float-center">';

                        // concatena novamente a data/hora em format datetime
                        $dataHora = $schedule[0] . ' ' . $schedule[1];
                        
                        // metodo que retorna o status do schedule
                        $busy = $doctor->getDoctorSchedulesBusy($doctor->id, $dataHora);
                        $replaceBusy = ['[', ']'];
                        $busy = str_replace($replaceBusy, '', $busy);
                        
                        if ($busy == 0) {
                            echo '<a class="float-right badge-agendamento"><span class="badge badge-success">Disponível</span></a>';
                            // caso não esteja agendada libera link para agendamento
                            $url = '/scheduling/add/' . $doctor->id . '/' . $dataHora;
                            
                            // lista a hora
                            echo  '<b>Hora:</b>
                                        <a href="'. $url . '">' . $schedule[1] . '</a><br>
                                    </a>
                                </li>
                            </ul>';
                        } else {
                                echo '<a class="float-right badge-agendamento"><span class="badge badge-danger">Agendado</span></a>';
                                echo '<b>Hora: </b>' .
                                        $schedule[1] . 
                                        '</a><br>
                                        </a>
                                        </li>
                                    </ul>';
                        } 
                    }
                @endphp
            </div>
        </div>
    </div>
    @empty
            <h3>Nenhum registro encontrado.</h3>
    @endforelse

</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop