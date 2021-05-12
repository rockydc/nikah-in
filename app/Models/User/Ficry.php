<?php

namespace App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ficry extends Model
{
    //
     //
     protected $table = 'rsvp_ficry';
     protected $fillable = [
        'nama','ikatan','email','pesan','status','jmlh_orang'
     ];
 
     protected $hidden = [
 
     ];
 
     public function getDateDiffTodayAttribute(){
         $date = Carbon::parse($this->updated_at);
         $now = Carbon::now();
         $diff = $date->diffInDays($now);
         $additional = $diff.' Hari Yang Lalu';
         if($diff > 30){
             $additional = 'Lebih Dari 1 Bulan Yang Lalu';
         } 
         else if($diff > 7){
             $additional = floor((int)$diff/7). ' Minggu Yang Lalu';
         }
         return $additional;
     }
}
