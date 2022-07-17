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
    public function getDendaRupiah()
    {
        return number_format($this->denda,0,',','.');
    }

}


