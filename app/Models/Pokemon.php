<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type1(){
        return $this->belongsTo(Types::class,"type1_id");
    }

    public function type2(){
        return $this->belongsTo(Types::class,"type2_id");
    }

    public function move1(){
        return $this->belongsTo(Moves::class,"move1_id");
    }

    public function move2(){
        return $this->belongsTo(Moves::class,"move2_id");
    }

    public function move3(){
        return $this->belongsTo(Moves::class,"move3_id");
    }

    public function move4(){
        return $this->belongsTo(Moves::class,"move4_id");
    }
}
