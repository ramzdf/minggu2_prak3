<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', function () {
        return "Program Studi Manajemen Informatika, Konsentrasi Sistem Informasi dirancang secara khusus guna menghasilkan
        tenaga ahli madya bidang sistem informasi,yang memiliki kompetensi bidang manajerial, desain, dan pembuatan basis data,
        proses bisnis, dan prosedur bisnis dalam bentuk perangkat lunak, yang berkarakter technopreneur,sadar mutu dengan keunggulan kompetitif yang beretika profesi.
        Program Studi Manajemen Informatika, Konsentrasi Teknik Komputer dan Jaringan dirancang secara khusus guna menghasilkan tenaga ahli madya bidang teknik komputer dan jaringan,
        yang memiliki kompetensi bidang manajerial, desain, dan pembuatan sistem jaringan dan perangkat pendukungnya, yang berkarakter technopreneur, sadar mutu dengan keunggulan kompetitif yang beretika profesi.
        Program Studi Manajemen Informatika, Konsentrasi Multimedia dirancang secara khusus guna menghasilkan tenaga ahli madya bidang multimedia, yang memiliki kompetensi bidang manajerial, desain,
        dan pembuatan perangkat lunak berupa pengolahan teks, audio, video, image, animasi perangkat mobile, desktop, dan jaringan, yang berkarakter technopreneur, sadar mutu dengan keunggulan kompetitif yang beretika profesi."
        ;
    });
    Route::get('/teknik-informatika', function () {
        return "Pada tahun 2010 berdasar kebutuhan masyarakat dan industri terkait Program Diploma IV bidang 
            informatika maka Polinema mendirikan program studi baru Diploma IV (DIV) Teknik Informatika (TI). Pada awal berdirinya jumlah peserta didik Program D-IV TI hanya terdiri dari 46 Mahasiswa, namun pada 
            tahun 2015 jumlah peserta didik Prodi D-IV TI telah mengalami peningkatan menjadi 545 Mahasiswa. Perkembangan jumlah mahasiswa yang sangat pesat baik di Program Studi D-III MI maupun D-IV TI mendorong pimpinan di Polinema 
            untuk menyatukan kedua program studi tersebut dalam satu organisasi jurusan baru terpisah dari jurusan Teknik Elektro. dibawa Jurusan baru terpisah dari Jurusan Teknik Elektro. Dan pada tahun 2015 berdasarkan SK Direktur 
            Nomor 53 dalam rangka peningkatan mutu pengelolaan dan optimasi sumber daya dibentuklah Jurusan Teknologi Informasi (JTI) dengan prodi D-III MI dan D-IV TI."
        ;
    });
});


Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', function () {
        return "Perkantoran";
    });
    Route::get('/laboratorium', function () {
        return "Laboratorium"
        ;
    });
    Route::get('/kelas', function () {
        return "Ruang Kelas"
        ;
    });
    Route::get('/lainnya', function () {
        return "Lainnya"
        ;
    });
});

Route::get('/about', [AboutController::class,'about']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class,'comment']);