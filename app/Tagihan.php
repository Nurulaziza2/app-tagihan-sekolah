<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tagihan extends Model
{
    use SearchableTrait;
    protected $table ='tagihan';
    protected $guarded = [];
    protected $dates =['tanggal_tagihan','tanggal_jatuh_tempo'];
    // protected $searchable = [
    //     'columns' => [
    //         'nama' => 1,
    //         'nis' => 2,
    //     ],
    // ];

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

}


