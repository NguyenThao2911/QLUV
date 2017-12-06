<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_Language extends Model
{
    protected $fillable = [
        'id_candidate', 'id_language'
    ];

    public function language(){
    	return $this->belongsTo('App\Language', 'id_language','id');
    }
    public function candidate(){
    	return $this->belongsTo('App\Candidate', 'id_candidate','id');
    }
}
