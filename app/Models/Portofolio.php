<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    //
    
    protected $table='tbl_porto';

    protected $fillable= [
       'id','nama','nama_url','imgbg','views'
    ];

    protected $hidden=[
        
    ];
}
