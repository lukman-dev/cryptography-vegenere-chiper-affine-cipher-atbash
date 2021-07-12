## MBDGROUP
Projek ini dibangung dengan laravel 6.0

## Build Setup
* Copy .env.example ke .env
* Tambahkan setingan database anda pada file .env
* Jalankan composer install pada root projek folder
```sh
composer install
```
* Jalankan printah key:genereate pada root folder
```sh
php artisan key:generate
```
* Jalan kan php artisan migrate --seed pada root projek folder
```sh
php artisan migrate --seed
```

## Contribute Rule
* Pastikan sudah berada di branch dev untuk memulai berkontribusi
* Penulisan Nama Model, Function, Nama File Blade, dll menggunakan bahasa inggris
* penulisan fungsi atau variabel dalam format camel-case atau underline style
* Lakukan git pull terlebih dahulu sebelum melakukan push code ke bitbucket
* Apabila terjadi conflict lakukan fix di local machine terlebih dahulu kemudian cek ulang file yang terjadi conflict, apakah kode sudah sesuai dan berjalan dengan baik
* Aturan penulisan pesan commit harus disesuaikan dengan standard pada https://www.conventionalcommits.org 

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).