<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmMenu extends Model
{
    use HasFactory;
    protected $table = 'tm_menu';
    public function Parent(){
        return $this->hasOne(TmMenu::class,'id', 'parent_id');
    }
}
