<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $guarded = [];
    protected $fillable = [
        'id_user','titre','type', 'localisation', 'salaire_min','salaire_max','description','document','sous_services','nom_services'
    ];



    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable')->latest();
    }
}
