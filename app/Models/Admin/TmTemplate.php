<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmTemplate extends Model
{
    use HasFactory;
    protected $primaryKey = 't_id';
    protected $fillable = ['template_extends', 'template_path', 'template_parent'];
}
