<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class Biaya extends Model
{
    protected  $table = 'biaya' ;
    protected  $guarded = [] ;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function getJumlahRupiah()
    {
        return 'Rp'.number_format($this->nominal,0,',','.');
    }
}
