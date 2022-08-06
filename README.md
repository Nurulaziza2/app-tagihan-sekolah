<p align="center"><a href="https://unama.ac.id" target="_blank"><img src="https://1.bp.blogspot.com/-hsCK6CkTq18/X7O-InfiBqI/AAAAAAAAKXs/zp6il-kdFK0jclMR53PvMV2H3iTd7GJ-gCLcBGAsYHQ/s0/Unama.png" width="400"></a></p>

<p align="center">
<b>8020190049</b>|
<b>8020190325</b>|
<b>8020190279</b>
</p>
Aplikasi Pembayaran SPP dibuat dengan Framework PHP **Laravel 6**

## About 
Aplikasi Pembayaran SPP ini adalah sebuah aplikasi untuk mempermudah sebuah sekolah dalam mendata pembayaran SPP para siswa/siswinya, dengan menggunakan aplikasi ini tentunya akan lebih mengurangi biaya dalam pendataan pembayaran SPP, dan mengurangi penggunaan kertas. Aplikasi ini dibuat untuk memenuhi tugas matakuliah proyek penelitian prodi teknik informatika fakultas ilmu komputer Universitas Dinamika Bangsa.

## Cara Install
### Spesifikasi
PHP >= 7.4
Framework Laravel 6

1. Clone Repo: `git clone https://github.com/suryaasaputra/app-tagihan-sekolah.git`
2. `$ cd app-tagihan-sekolah`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Buat database untuk aplikasi ini
7. Setting database pada file `.env`
8. `$ php artisan migrate --seed`
9. `$ php artisan storage:link`
10. `$ php artisan serve`
11. Buka di browser `http://localhost:8000/app-install`
12. Login menggunakan email `admin@mail.com` dan password `1` atau 'operator@mail.com' '1'
13. Selesai, Anda berhasil login 
