<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    protected  $table = 'siswa' ;
    protected  $guarded = [] ;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
}
