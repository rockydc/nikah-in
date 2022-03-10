<?php

namespace App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class andreasdeve extends Model
{
    //
      //
      protected $table= 'tbl_andreas_dave';
      protected $fillable = [
          'nama','ikatan','email','pesan','status','jmlh_orang'
      ];
  
      protected $hidden =[];
  
  
      public function getDateDiffTodayAttribute(){
          $date = Carbon::parse($this->update_at);
          $now = Carbon::now();
          $diff = $date->diffInDays($now);
          $addtional = $diff.' Hari yang lalu ';
          if($diff > 30){
              $addtional = 'Lebih dari 1 bulan yang lalu';
          }else if($diff > 7){
              $additional = floor((int)$diff/7).' Minggu Yang Lalu';
          }
          return $addtional;
  
      }
  
}
