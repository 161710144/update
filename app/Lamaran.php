<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = 'lamarans';
    protected $fillable = ['telepon','pesan','pel_id','low_id'];
    public $timestamps = true;

    public function Pelamar(){
        return $this->belongsto('App\Pelamar','pel_id');
    }
    public function Lowongan(){
        return $this->belongsto('App\Lowongan','low_id');
    }
}
