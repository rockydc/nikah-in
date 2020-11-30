<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class rsvp_online extends Model
{
    //
    protected $dateFormat = 'U';
    public $timestamps=true;
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time'; 
    use SoftDeletes;
    protected $table = 'rsvponline';
    protected $fillable = [
        'nama','slug','no_telepon','email','pesan'
    ];

    protected $hidden = [

    ];

}
