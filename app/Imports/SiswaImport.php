<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;

class SiswaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row){
            $no = $row[0];
            $nis = $row[1];
            $nama = $row[2];
            $email = $row[3];
            $jk = $row[4];
            $tgl_masuk = $row[5];
            if(is_int ($no)){
                $siswa  = \App\Siswa::where('nis', $nis)->first();
                if($siswa == null) {
                    \App\Siswa::create([
                        'nis' => $nis,
                        'nama' => $nama,
                        'email' => $email,
                        'jk' => $jk,
                        'tgl_masuk' => $tgl_masuk,
                        'user_id'=>Auth::user()->id,
                    ]);
                }
            }
        }
    }
}