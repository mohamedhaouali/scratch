<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'id_user','titre','type', 'localisation', 'salaire_min','salaire_max','description','document'
    ];
}
