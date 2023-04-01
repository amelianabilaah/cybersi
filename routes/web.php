<?php
use App\Models\Post;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserkroneController;
use App\Http\Controllers\ListpesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('layanan/hair', function () {
    return view('hair', [
        "title" => "Hair Treatment"
    ]);
});
Route::get('layanan/nail', function () {
    return view('nail', [
        "title" => "Nail Treatment"
    ]);
});
Route::get('layanan/body', function () {
    return view('body', [
        "title" => "Body Treatment"
    ]);
});


Route::get('profilberhasil', function () {
    return view('profilberhasil', [
        "title" => "Profil Berhasil Diubah"
    ]);
});

Route::get('/registration', [LoginController::class, 'registration'])->name('registration')->middleware('guest');;
Route::get('/registrationsuccess', [LoginController::class, 'registrationsuccess'])->name('registrationsuccess');
Route::post('/insertdata', [LoginController::class, 'insertdata'])->name('insertdata');



Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/proseslogin', [LoginController::class, 'proseslogin'])->name('proseslogin');
Route::get('/loginfailed', [LoginController::class, 'loginfailed'])->name('loginfailed');
Route::get('/loginakses', [LoginController::class, 'loginakses'])->name('loginakses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/', function () {
        return view('home', [
            "title" => "Home"
        ]);
    });

    Route::group(['middleware' => 'admin'], function(){
        Route::get('/ubahdata', [ListpesananController::class, 'ubahdata'])->name('ubahdata');
        Route::get('/delete/{id}', [ListpesananController::class, 'delete'])->name('delete');

        Route::get('/ubahdata', [ListpesananController::class, 'ubahdata'])->name('ubahdata');
        Route::get('/delete/{id}', [ListpesananController::class, 'delete'])->name('delete');
        Route::get('/datapesanan/{id}', [ListpesananController::class, 'datapesanan'])->name('datapesanan');
        Route::get('/tampildata/{id}', [ListpesananController::class, 'tampildata'])->name('tampildata');
        Route::post('/updatedata/{id}', [ListpesananController::class, 'updatedata'])->name('updatedata');

        Route::get('daftarmahasiswa', [MahasiswaController::class, 'index'])->name('layananadmin');
        Route::get('tambahmahasiswa', [MahasiswaController::class, 'addlayanan'])->name('addlayanan');
        Route::post('tambahmahasiswa', [MahasiswaController::class, 'insertdata']);

        Route::get('ubahmahasiswa/{id}', [MahasiswaController::class, 'updatedata']);
        Route::post('ubahmahasiswa/{id}', [MahasiswaController::class, 'layananchange'])->name('layananchange');

        Route::get('hapusmahasiswa/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');

        Route::get('/admin', function () {
            return view('admin', [
                "title" => "Dashboard Admin"
            ]);
        });
    });

    Route::group(['middleware' => 'user'], function(){
        Route::get('/dosen', function () {
            return view('dosen', [
                "title" => "Halaman Dosen"
            ]);
        });
        Route::get('/pemesanan', [ListpesananController::class, 'pemesanan'])->name('pemesanan')->middleware('auth');;
        Route::get('/pemesananberhasil', [ListpesananController::class, 'pemesananberhasil'])->name('pemesananberhasil');
        Route::post('/insertpesanan', [ListpesananController::class, 'insertpesanan'])->name('insertpesanan');
            
    });

    Route::get('/myprofile/{id}', [LoginController::class, 'myprofile'])->name('myprofile');
    Route::get('/dataprofile/{id}', [LoginController::class, 'dataprofile'])->name('dataprofile');
    Route::get('/tampilprofile/{id}', [LoginController::class, 'tampilprofile'])->name('tampilprofile');
    Route::post('/updateprofile/{id}', [LoginController::class, 'updateprofile'])->name('updateprofile');


