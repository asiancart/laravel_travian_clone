<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['village_id','type','level'];

    public function village() 
    {
        return $this->belongsTo(Village::class);
    }
}
