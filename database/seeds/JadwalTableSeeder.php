<?php

use Illuminate\Database\Seeder;
use App\Jadwal;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwal1       = new Jadwal;
        $jadwal1->hari = "senin";
        $jadwal1->save();

        $jadwal2       = new Jadwal;
        $jadwal2->hari = "selasa";
        $jadwal2->save();

        $jadwal3       = new Jadwal;
        $jadwal3->hari = "rabu";
        $jadwal3->save();

        $jadwal4       = new Jadwal;
        $jadwal4->hari = "kamis";
        $jadwal4->save();

        $jadwal5       = new Jadwal;
        $jadwal5->hari = "jum'at";
        $jadwal5->save();

        $jadwal6       = new Jadwal;
        $jadwal6->hari = "sabtu";
        $jadwal6->save();
    }
}
