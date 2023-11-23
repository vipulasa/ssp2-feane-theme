<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * @package App\Models
 */
class Reservation extends Model
{

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'number_of_people',
        'reservation_date',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'reservation_date' => 'datetime',
    ];
}
