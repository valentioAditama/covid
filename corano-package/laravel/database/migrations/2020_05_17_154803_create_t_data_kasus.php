<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDataKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kasus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->integer('id_data')->unsigned();
            $table->foreign('id_data')->references('id')->on('data');
            $table->string('nama');
            $table->enum('jenkel', ['Laki-laki', 'Perempuan']);
            $table->integer('umur');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kasus');
    }
}
