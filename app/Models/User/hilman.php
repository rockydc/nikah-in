<?php

namespace App\Models\user;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class hilman extends Model
{
    //
    protected $table = 'tbl_hilman';
  
    protected $fillable = [
       'nama','ikatan','email','pesan','status','jmlh_orang'
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
