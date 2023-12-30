<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center"> <a href="https://github.com/hastio07/smas-km" target="_blank"> <img src="https://raw.githubusercontent.com/hastio07/smas-km/master/public/assets/image/logo.png"
height="auto" width="200" alt="logo"></a></p>

## SMAS Kartikatama Kota Metro

SMA Kartikatama Metro merupakan sekolah menengah atas yang ada di Kota Metro. Adapun pelajaran yang diberikan meliputi semua mata pelajaran wajib sesuai kurikulum yang berlaku dengan tambahan pilihan kegiatan-kegiatan ekstrakulikuler sekolah seperti karate, basket, futsal, grup belajar science dan lainnya.

SMA Kartikatama Metro memiliki staf pengajar guru yang kompeten pada bidang pelajarannya sehingga berkualitas dan menjadi salah satu yang terbaik di Kota Metro. Tersedia juga berbagai fasilitas sekolah seperti ruang kelas yang nyaman, perpustakaan, lapangan olahraga, kantin dan lainnya.


Segera kunjungi SMA terdekat ini untuk info pendaftaran siswa-siswi baru, biaya pendaftaran, info biaya SPP, info kurikulum, info pindah SMA dari dan ke SMA Kartikatama Metro, info SMA di Kota Metro, nomor NPSN dan lainnya. Anda juga bisa menghubungi kontak atau mengakses website sekolah jika tersedia.


## Cara Instalasi
### Development Mode
Untuk dapat menjalankan proyek ini di lokal, lakukan beberapa langkah berikut:

1. Clone repository ke komputer lokal dengan menggunakan perintah berikut:
```git
git clone https://github.com/hastio07/smas-km.git [nama_folder]
```
2. Masuk ke direktori proyek dengan perintah:
```bash
cd [nama_folder]
```
3. Jalankan perintah berikut untuk menginstall semua dependecies:
```php
composer install
```
4. Salin file `.env.example` ke file baru bernama `.env`:
```bash
cp .env.example .env
```
5. Generate app key dengan perintah:
```php
php artisan key:generate
```
6. Konfigurasi database pada file `.env` dengan mengisi nilai `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` dengan nilai yang sesuai.
```
DB_HOST=host_database
DB_PORT=port_database
DB_DATABASE=nama_database
DB_USERNANAME=username_database
DB_PASSWORD=password_database
```
8. Jalankan perintah berikut untuk menjalankan migrasi dan seeding:
```php
php artisan migrate --seed
```
9. Jalankan server lokal dengan perintah:
```php
php artisan serve
