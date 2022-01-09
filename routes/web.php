<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;

// CONTROLADOR DE ADMIN
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('home');
});

// Vista de pagina secretaria
Route::view("/secretaria","secretaria")->name('secretaria');

// Vista de todos los cursos
Route::view("/curso","index")->name('curso');

// Vista de login
Route::view("/login","login")->name('login');

// Vista de evento
//Route::view("/evento","index")->name('evento');
//Route::view("/evento","index")->name('evento')->middleware("auth");
//Route::get('/', function () {
//    return view('evento.index')->name('evento');
//});


// Vista de register
Route::view("/register","register")->name('register');

// Cuando inicia sesion redireccione a agenda,logout,..
//Route::group(['middleware' => 'auth'], function(){
    //Cuando este logeado quiero que vaya a evento
    //Route::get('/', [EventoController::class, 'index'])->name('evento');
//});
//Route::get('/', [EventoController::class, 'index'])->name('evento');



// Vista de logout ??


Auth::routes();
// Desactivar registro de usuarios
//Auth::routes(["register" => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --- EVENTOS ---

// PONER ESTO MAS ADELANTE
//Route::get('/', function () {
//    return view('evento.index');
//});

// Accede al metodo index donde se mostrara la vista
Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento')->middleware("auth");
Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);

Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);

//-------------------------------------------------------------------

// CRUD USUARIO
//Route::get('/user', function () {
//    return view('user.index');
//);
// Acceso metodo create
//Route::get('usuario/create',[UsuarioController::class,'create']); -> PROBAR A QUITAR LAS // Y VER SI ME FUNCIONA CREATE DE USUARIOS
// Acceso a todos los metodos
//Route::resource('usuario',UsuarioController::class)->middleware("auth");
Route::resource('user',UserController::class)->middleware("auth");

// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

// Accede al metodo index donde se mostrara la vista
Route::post('/user/register/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);



//-------------------------------------------------------------------

// CRUD CURSO
//Route::get('/curso', function () {
//    return view('curso.index')->name('curso');
//});
//Este es el original
Route::resource('curso',CursoController::class);


