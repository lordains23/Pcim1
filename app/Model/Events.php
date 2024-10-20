<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    use HasFactory;
    protected $table = 't_events';
    protected $fillable = [
        'event_name',
        'event_date',
        'location',
        'host_employee_id', 
    ];
}
