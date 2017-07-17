<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['kode_map', 'no_un_smp', 'nama_siswa', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir','no_hp', 'nama_ayah', 'nama_ibu', 'no_hp', 'sekolah_asal'];

    protected $dates = ['tgl_lahir'];
}
