<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tagihan extends Model
{
    use SearchableTrait;
    protected $table ='tagihan';
    protected $guarded = [];
    protected $dates =['tanggal_tagihan','tanggal_jatuh_tempo'];
    
    /**
     * Get the siswa that owns the Tagihan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class); 
    }
    public function kelas(): BelongsTo {
        return $this->belongsTo(Kelas::class);
    }

    public function pembayaran(): HasMany {
        return $this->hasMany(Pembayaran::class);
    }
    public function getJumlahRupiah()
    {
        return number_format($this->jumlah,0,',','.');
    }
    public function terbilang($x) {
        $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
      
        if ($x < 12)
          return " " . $angka[$x];
        elseif ($x < 20)
          return $this->terbilang($x - 10) . " belas";
        elseif ($x < 100)
          return $this->terbilang($x / 10) . " puluh" . $this->terbilang($x % 10);
        elseif ($x < 200)
          return "Seratus" . $this->terbilang($x - 100);
        elseif ($x < 1000)
          return $this->terbilang($x / 100) . " ratus" . $this->terbilang($x % 100);
        elseif ($x < 2000)
          return "Seribu" . $this->terbilang($x - 1000);
        elseif ($x < 1000000)
          return $this->terbilang($x / 1000) . " Ribu" . $this->terbilang($x % 1000);
        elseif ($x < 1000000000)
          return $this->terbilang($x / 1000000) . " juta" . $this->terbilang($x % 1000000);
    }
    public function getJumlahTerbilang(){
        return $this->terbilang($this->jumlah). 'Rupiah';
    }
    public function getDendaRupiah()
    {
        return number_format($this->denda,0,',','.');
    }

}


