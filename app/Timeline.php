<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //
    protected $table    = 't_event';
    public $primaryKey = 'id_event';

    protected $fillable = ['nama_event', 'tgl', 'lokasi','sponsor','media_patner','email','kontak','id_login','foto'];

    public $timestamps = false;
}