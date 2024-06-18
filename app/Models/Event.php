<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'event_photo',
        'event_start',
        'event_end',
        'location',
        'point',
        'registration_start',
        'registration_end',
    ];
}