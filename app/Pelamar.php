<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $fillable = ['telepon','pesan','file_cv','user_id'];
    public $timestamps = true;

    public function User(){
        return $this->belongsto('App\User','user_id');
    }
     public function Lamaran(){
        return $this->HasOne('App\Lamaran','pel_id');
    }
}
