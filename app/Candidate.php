<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ConfirmEmail as ConfirmEmailNotification;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'fullname', 'phone', 'birthday', 'sex', 'experience', 'school', 'certificate', 'type_work', 'language', 'user_create'
    ];
    protected $date = ['delete_at'];

    public $timestamps = true;
    public function Candidate_Language(){
    	return $this->hasMany('App\Candidate_Language','id_language', 'id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
