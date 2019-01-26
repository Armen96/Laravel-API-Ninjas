<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $fillable = [
        'name', 'logo', 'slogan',
    ];

    public function members()
    {
        return $this->hasMany(User::class,'clan_id','id');
    }
}
