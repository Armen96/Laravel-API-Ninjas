<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    protected $fillable = [
        'id','name', 'logo', 'force',
    ];

    public function members()
    {
        return $this->hasMany(User::class,'clan_id','id');
    }
}
