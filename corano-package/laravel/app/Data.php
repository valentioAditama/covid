<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = ['id_data', 'kasus', 'keterangan'];

    public function odp()
    {
    	return $this->hasMany(Odp::class, 'id_data');
    }
}
