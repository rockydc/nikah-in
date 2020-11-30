<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RSVP extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nama','slug','no_telepon','email','pesan'
    ];

    protected $hidden = [

    ];

}
