<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;
    protected $date = ['enabled_at'];
    protected $fillable = ['title', 'desc', 'enabled'];
}