<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $guarded =[];
    protected $dates =['tanggal'];    

    public function tagihan(): BelongsTo
    {
        return $this->belongsTo(Tagihan::class); 
    }
}
