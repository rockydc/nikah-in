<?php

namespace App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class anwar extends Model
{
    //
       //
       protected $table= 'tbl_anwar';
       protected $fillable = [
           'nama','ikatan','email','pesan','status','jmlh_orang'
       ];
   
       protected $hidden =[];
   
   
       public function getDateDiffTodayAttribute(){
           $date = Carbon::parse($this->update_at);
           $now = Carbon::now();
           $diffInDays = $date->diffInDays($now);
           $addtional = $diffInDays.' Hari yang lalu ';

           if($diffInDays > 30){
               $addtional = 'Lebih dari 1 bulan yang lalu';
           }else if($diffInDays > 7){
               $additional = floor((int)$diff/7).' Minggu Yang Lalu';
           }
           return $addtional;
   
       }
}
