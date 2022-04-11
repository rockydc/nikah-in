<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TsUserRole extends Model
{
    use HasFactory;
    protected $table = 'ts_user_role';
    protected $fillable = ['user_id', 'role_id'];
    
}
