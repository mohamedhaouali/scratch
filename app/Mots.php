<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mots extends Model
{
    protected $fillable = [
        'id_offre','tags','id_user'
    ];
}
