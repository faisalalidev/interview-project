<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'street',
        'city',
        'state',
        'zip',
    ];
}
