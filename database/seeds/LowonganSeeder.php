<?php

use App\Lowongan;
use Illuminate\Database\Seeder;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $low = new Lowongan();
        $low->nama_low = "Programmer";
        $low->tgl_mulai = "2018-06-27";
        $low->lokasi = "Bandung";
        $low->gaji = "4000000";
        $low->deskripsi_iklan = "1).Dibutuhkan pekerja yang tekun, rajin, dan ulet
        						2).Siap dengan pekerjaan yang diberikan
        						3).Fisik yang sehat dan kuat";
       	$low->status = "1";
       	$low->user_id = "2";
       	$low->pers_id = "1";
       	$low->kategori_id = "2";
        $low->save();
    }
}
