<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NikahinUserDetail extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['user_name', 'user_bod', 'user_id'];
}
