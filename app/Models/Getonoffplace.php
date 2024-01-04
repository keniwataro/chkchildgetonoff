<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getonoffplace extends Model
{
    use HasFactory;

    protected $table = 'getonoffplaces';

    public function childnames()
    {
        return $this->hasMany(Childname::class, 'place_id');
    }
}
