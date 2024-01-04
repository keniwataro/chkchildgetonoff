<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childname extends Model
{
    use HasFactory;

    protected $table = 'childnames';
    
    public function getonoffplaces()
    {
        return $this->belongsTo(Getonoffplace::class, 'place_id');
    }
}
