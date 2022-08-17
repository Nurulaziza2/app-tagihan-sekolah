<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $guarded = [];
    protected $table = 'kelas';
    protected $appends = ['kelas_biaya'];
     public function getKelasBiayaAttribute()
    {
        return $this->nama . ' (' .$this->getJumlahRupiah().')';
    }
    public function getJumlahRupiah()
    {
        return 'Rp'.number_format($this->biaya->nominal,0,',','.');
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function biaya(): BelongsTo {
        return $this->belongsTo(Biaya::class)->withDefault();
    }
    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }
}
