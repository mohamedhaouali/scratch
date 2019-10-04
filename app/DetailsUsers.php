<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailsUsers extends Model
{
    protected $fillable = [
        'id_users','photo_profil', 'tel1', 'tel2','fax','ville','adress','cp','presentation'
    ];
}
