<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Biaya
 *
 * @property int $id
 * @property string $nama
 * @property float $nominal
 * @property int $tahun
 * @property string|null $deskripsi
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read mixed $nama_biaya
 * @property-read \App\Kelas $kelas
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya query()
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Biaya whereUserId($value)
 */
	class Biaya extends \Eloquent {}
}

namespace App{
/**
 * App\Kelas
 *
 * @property int $id
 * @property string $nama
 * @property string|null $detail
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Siswa[] $siswa
 * @property-read int|null $siswa_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kelas whereUserId($value)
 */
	class Kelas extends \Eloquent {}
}

namespace App{
/**
 * App\Pembayaran
 *
 * @property int $id
 * @property int $tagihan_id
 * @property float $jumlah
 * @property \Illuminate\Support\Carbon $tanggal
 * @property string $dibayar_oleh
 * @property string $diterima_oleh
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Tagihan $tagihan
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereDibayarOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereDiterimaOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereTagihanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pembayaran whereUpdatedAt($value)
 */
	class Pembayaran extends \Eloquent {}
}

namespace App{
/**
 * App\Siswa
 *
 * @property int $id
 * @property string $nama
 * @property string|null $gambar
 * @property int $nis
 * @property string $email
 * @property string $jk
 * @property string $alamat
 * @property int|null $kelas_id
 * @property string $durasi
 * @property \Illuminate\Support\Carbon $tgl_masuk
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Kelas|null $kelas
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tagihan[] $tagihan
 * @property-read int|null $tagihan_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereDurasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereKelasId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereNis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereTglMasuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereUserId($value)
 */
	class Siswa extends \Eloquent {}
}

namespace App{
/**
 * App\Tagihan
 *
 * @property int $id
 * @property int $siswa_id
 * @property \Illuminate\Support\Carbon $tanggal_tagihan
 * @property \Illuminate\Support\Carbon $tanggal_jatuh_tempo
 * @property string $nama
 * @property float $jumlah
 * @property string|null $keterangan
 * @property int $denda
 * @property string $status
 * @property string $dibuat_oleh
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Kelas $kelas
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Pembayaran[] $pembayaran
 * @property-read int|null $pembayaran_count
 * @property-read \App\Siswa $siswa
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan search($search, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan searchRestricted($search, $restriction, $threshold = null, $entireText = false, $entireTextOnly = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereDenda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereDibuatOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereSiswaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereTanggalJatuhTempo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereTanggalTagihan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tagihan whereUpdatedAt($value)
 */
	class Tagihan extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $akses
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

