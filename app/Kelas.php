<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $guarded = [];
    protected $table = 'kelas';
    public function user(): BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function siswa()
    {
        return $this->hasMany('App\Siswa');
    }
}
