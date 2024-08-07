<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
    use HasFactory;

    public function Pokemon(){
        return $this->hasMany(Pokemon::class);
    }

    public function type(){
        return $this->belongsTo(Type::class,"type_id");
    }
}
