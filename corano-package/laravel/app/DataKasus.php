<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKasus extends Model
{
	public $table = 'data_kasus';

    protected $fillable = ['id_data', 'nik', 'nama', 'jenkel', 'umur', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'alamat'];

    //public function data()
    //{
    	//return $this->belongsTo(Data::class, 'id_data');
    //}
}
