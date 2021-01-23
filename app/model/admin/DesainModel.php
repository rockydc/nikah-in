<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class DesainModel extends Model
{
    //
      //
    
      protected $table='designs_tbl';
      public $timestamps = true;
      protected $fillable= [
         'id','deskripsi','nama','imgbg','imgprev','views',
      ];
  
      protected $hidden=[
          
      ];

      
}
