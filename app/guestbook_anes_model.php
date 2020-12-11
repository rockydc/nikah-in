<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class guestbook_anes_model extends Model
{
    //
    
    protected $table='guestbook_tbl';
    public $timestamps = true;
    protected $fillable= [
        'nama','no_telepon','alamat','kerabat','jmlh_orang'
    ];

    protected $hidden=[

    ];
}
