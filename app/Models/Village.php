<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model

{   
    protected $fillable = [
        'user_id',
        'name',
        'x',
        'y',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function resource()
{
    return $this->hasOne(Resource::class);
}

public function buildings()
{
    return $this->hasMany(Building::class);
}


    public function resources()
{
    return $this->hasOne(Resource::class);
}

    
}
