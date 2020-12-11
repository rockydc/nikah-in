<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class rsvp_online extends Model
{
    //
 
    public $timestamps=true;
 
    use SoftDeletes;
    protected $table = 'rsvponline';
    protected $fillable = [
        'nama','slug','no_telepon','email','pesan'
    ];

    protected $hidden = [

    ];

}
