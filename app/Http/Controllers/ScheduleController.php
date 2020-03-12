<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    private $schedule;

    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function addSchedule(){
        return view('scheduleAdd');
    }

    public function saveSchedule(Request $request, $id)
    {
        $dados = $request->all();
        $doctor = Doctor::find($id);

        $schedule = new Schedule;
        $schedule->doctor_id = $doctor->id;
        $schedule->date = $dados['date'];
        $schedule->busy = 0;
        $schedule->created_at = date("Y/m/d h:m:s");
        $schedule->save();

        return redirect()->route('listSchedule');
    }

    public function listSchedule()
    {
        $schedules = Schedule::orderBy('date')->get();

        return view('schedule', compact('schedules'));
    }

    public function deleteSchedule($id)
    {
        $schedule = Schedule::find($id);

        if($schedule->busy != 0){
            return 'Impossível excluir horário já agendado!';
        } else {
            $schedule->delete();
        }
        
        return redirect()->route('listSchedule');
    }

    public function scheduling()
    {
        $doctors = Doctor::all();
        $schedules = Schedule::all();

        return view('scheduling', compact('doctors', 'schedules'));
    }

    public function addScheduling($doctor_id, $dataHora)
    {
        
        $schedule = Schedule::where('doctor_id', $doctor_id)
                    ->where('date', $dataHora)
                    ->update(['busy' => 1]);
        
        return redirect()->route('scheduling');
    }

}