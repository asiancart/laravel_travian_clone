<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{   

    protected $fillable = [
        'village_id',
        'wood',
        'clay',
        'iron',
        'crop',
    ];
    

    public function village()
{
    return $this->belongsTo(Village::class);
}
}
