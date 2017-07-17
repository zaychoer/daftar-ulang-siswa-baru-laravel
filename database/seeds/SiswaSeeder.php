<?php

use Illuminate\Database\Seeder;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa1 = Siswa::create([
            'kode_map'=>'1718D001',
            'no_un_smp'=>'21730021093369',
            'nama_siswa'=>'RANNA SYALSABILA',
            'jenis_kelamin'=>'Perempuan',
            'tempat_lahir'=>'TANGERANG',
            'tgl_lahir'=>'2001-06-26',
            'nama_ayah'=>'KASNO HARYONO',
            'nama_ibu'=>'BINI YESTUTIK',
            'no_hp'=>'081585724334',
            'sekolah_asal'=>'',

            ]);

        $siswa2 = Siswa::create([
            'kode_map'=>'1718D002',
            'no_un_smp'=>'21730021093364',
            'nama_siswa'=>'RANNA SYALSABILA',
            'jenis_kelamin'=>'Perempuan',
            'tempat_lahir'=>'TANGERANG',
            'tgl_lahir'=>'2001-06-26',
            'nama_ayah'=>'KASNO HARYONO',
            'nama_ibu'=>'BINI YESTUTIK',
            'no_hp'=>'081585724334',
            'sekolah_asal'=>'',

            ]);

        $siswa3 = Siswa::create([
            'kode_map'=>'1718D003',
            'no_un_smp'=>'21730021093363',
            'nama_siswa'=>'RANNA SYALSABILA',
            'jenis_kelamin'=>'Perempuan',
            'tempat_lahir'=>'TANGERANG',
            'tgl_lahir'=>'2001-06-26',
            'nama_ayah'=>'KASNO HARYONO',
            'nama_ibu'=>'BINI YESTUTIK',
            'no_hp'=>'081585724334',
            'sekolah_asal'=>'',

            ]);

        $siswa4 = Siswa::create([
            'kode_map'=>'1718D004',
            'no_un_smp'=>'21730021093362',
            'nama_siswa'=>'RANNA SYALSABILA',
            'jenis_kelamin'=>'Perempuan',
            'tempat_lahir'=>'TANGERANG',
            'tgl_lahir'=>'2001-06-26',
            'nama_ayah'=>'KASNO HARYONO',
            'nama_ibu'=>'BINI YESTUTIK',
            'no_hp'=>'081585724334',
            'sekolah_asal'=>'',

            ]);

        $siswa5 = Siswa::create([
            'kode_map'=>'1718D005',
            'no_un_smp'=>'21730021093361',
            'nama_siswa'=>'RANNA SYALSABILA',
            'jenis_kelamin'=>'Perempuan',
            'tempat_lahir'=>'TANGERANG',
            'tgl_lahir'=>'2001-06-26',
            'nama_ayah'=>'KASNO HARYONO',
            'nama_ibu'=>'BINI YESTUTIK',
            'no_hp'=>'081585724334',
            'sekolah_asal'=>'',

            ]);
    }
}
