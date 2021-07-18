<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table        ='matkul';
    protected $fillable     =['id', 'kd_matkul', 'nama_matkul', 'sks'];
    public    $timestamps   = false;

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'makul_id' ,'id');
    }
}
