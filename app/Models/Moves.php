<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moves extends Model
{
    use HasFactory;

    public function Pokemon(){
        return $this->hasMany(Pokemon::class);
    }

    public function type(){
        return $this->belongsTo(Types::class,"type_id");
    }
}
