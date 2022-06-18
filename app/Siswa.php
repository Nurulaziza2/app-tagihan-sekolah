<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use SearchableTrait;
    protected  $table = 'siswa' ;
    protected  $guarded = [] ;
    protected $dates = ['tgl_masuk'];

    protected $searchable = [
        'columns' => [
            'nama' => 1,
            'nis' => 2,
            'email' => 3,
        ],
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function kelas(): BelongsTo {
        return $this->belongsTo(Kelas::class);
    }
}
