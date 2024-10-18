<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'ticket_id',
        'name',
        'start_location',
        'destination',
        'bus_id',
        'order_date',
        'cost'
    ];
}
