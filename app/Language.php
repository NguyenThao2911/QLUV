<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     protected $fillable = [
        'name'
    ];

    public function Candidate_Language(){
    	return $this->hasMany('App\Candidate_Language','id_language', 'id');
    }
}
