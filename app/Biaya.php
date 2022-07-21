<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class Biaya extends Model
{
    protected  $table = 'biaya' ;
    protected  $guarded = [] ;
    protected $appends = ['nama_biaya'];

    public function getNamaBiayaAttribute()
    {
        return $this->nama . ' (' .$this->getJumlahRupiah().')';
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
    /**
     * Get the kelas that owns the Biaya
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class)->withDefault();
    }
    public function getJumlahRupiah()
    {
        return 'Rp'.number_format($this->nominal,0,',','.');
    }

}
