<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class Doctor extends Authenticatable
{
    protected $fillable = [
        'email', 'name', 'password', 'address'
    ];
 
    protected $hidden = [
        'password'
    ];

    public function getDoctorSchedules($id)
    {
        $doctorSchedules = DB::table('schedules')->where('doctor_id', $id)->orderBy('date') ->pluck('date');

        return $doctorSchedules;
    }

    public function getDoctorSchedulesBusy($doctorId, $dataHora)
    {
        $busy = DB::table('schedules')
                    ->where([
                        ['doctor_id', '=', $doctorId],
                        ['date', '=', $dataHora]
                    ])->orderBy('date') ->pluck('busy');

        return $busy;
    }
}
