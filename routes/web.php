<?php
use App\Models\Entities\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\Controller;
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

Route::get('/accueil', function () {
    
    return view('accueil');
})->name('accueil');

/*Route::get('/adminpanel', function () {
    
    return view('adminpanel');
})->middleware(['IsAdmin']);*/

Route::get('/adminpanel',[UsersController::class, 'index'])->name('adminpanel')->middleware(['IsAdmin']);

Route::get('/', function () {
    
    return view('welcome');
})->name("home")->middleware(['connexion']);

Route::get('/connexion', function () {
    
    return view('login');
})->name("connexion")->middleware(['guest']);


Route::get("/{url}", function() {
    return redirect()->route("home");
})->where(["url" => "register|login|upload|comments|logine"]);

Route::get("/logout", "SessionsController@destroy")->middleware(['connexion']);


Route::post("/register", "RegistrationController@store");

//Route::post("/create", "RegistrationController@create")->name('create');


Route::post('/create',"AdminPanelController@CreateUser")->name('create');


Route::post('/modify',"AdminPanelController@ModifyUser")->name('modify');

Route::get('/deleteadmin',"AdminPanelController@DeleteUser")->name('delete')->middleware(['IsAdmin']);
/*Route::post('/create', function () {
    $user = User::create([
        "username" => 'erre',
        "email" => 'evef@gmail.com',
        "password" => "grtgrtgrtg",
        "role" => "admin",
        "avatar_name" => "default.png"
    ]);
    return redirect('adminpanel');
});*/

Route::post("/login", "SessionsController@store");

Route::get("/users/{id}", "UsersController@show")->middleware(['connexion']);

Route::post("/avatars", "AvatarsController@store");

Route::post("/upload", "FilesController@store");


Route::get("/files/{id}", "FilesController@show")->middleware(['connexion']);
Route::get("/files/{fileId}/comments", "CommentsController@show")->middleware(['connexion']);
Route::get("/files", "FilesController@index")->middleware(['connexion']);

Route::get("/archived", "FilesController@indexArchived")->middleware(['connexion']);

Route::get("/download/{id}/{originalName}", "DownloadsController@index")->middleware(['connexion']);

Route::get("/archived/{id}", "DownloadsController@unarchive")->middleware(['connexion']);

Route::get("/list", "FilesController@indexList")->middleware(['connexion']);

Route::post("/comments", "CommentsController@store");

