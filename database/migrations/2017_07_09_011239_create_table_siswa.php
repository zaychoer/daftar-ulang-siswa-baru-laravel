<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_map', 10)->unique();
            $table->string('no_un_smp', 14)->nullable();
            $table->string('nama_siswa', 50);
            $table->enum('jenis_kelamin',['Laki-laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir', 20)->nullable();
            $table->date('tgl_lahir')->nullable();;
            $table->string('nama_ayah', 50)->nullable();
            $table->string('nama_ibu', 50)->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('sekolah_asal', 50)->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
