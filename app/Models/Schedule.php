<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'doctor_id', 'date', 'busy'
    ];

    protected $table = 'schedules';

    public function getStatusSchedule($status)
    {
        $codStatus = [
            0 => 'Disponível',
            1 => 'Agendado'
        ];

        return $codStatus[$status];
    }
}
