<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat role siswa
        $siswaRole = new Role();
        $siswaRole->name = "siswa";
        $siswaRole->display_name = "Siswa";
        $siswaRole->save();

        //Membuat role guru
        $guruRole = new Role();
        $guruRole->name = "guru";
        $guruRole->display_name = "Guru";
        $guruRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Sekolah';
        $admin->email = 'admin@sman3tgr.sch.id';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample siswa
        $siswa = new User();
        $siswa->name = 'Sample Siswa';
        $siswa->email = 'siswa@sman3tgr.sch.id';
        $siswa->password = bcrypt('rahasia');
        $siswa->save();
        $siswa->attachRole($siswaRole);

        //Membuat sample siswa
        $guru = new User();
        $guru->name = 'Sample Guru';
        $guru->email = 'guru@sman3tgr.sch.id';
        $guru->password = bcrypt('rahasia');
        $guru->save();
        $guru->attachRole($guruRole);
    }
}
