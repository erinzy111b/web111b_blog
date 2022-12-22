<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'pic', 'price', 'enabled', 'desc', 'enable_at', 'cgy_id'];

    public function cgy()
    {
        return $this->belongsTo(Cgy::class);
    }

}