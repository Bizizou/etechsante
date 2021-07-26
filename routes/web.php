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
})->name("home");

Route::get("/{url}", function() {
    return redirect()->route("home");
})->where(["url" => "register|login|upload|comments"]);

Route::get("/logout", "SessionsController@destroy");


Route::post("/register", "RegistrationController@store");

//Route::post("/create", "RegistrationController@create")->name('create');


Route::post('/create',"AdminPanelController@CreateUser")->name('create');
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

Route::get("/users/{id}", "UsersController@show");

Route::post("/avatars", "AvatarsController@store");

Route::post("/upload", "FilesController@store");


Route::get("/files/{id}", "FilesController@show");
Route::get("/files/{fileId}/comments", "CommentsController@show");
Route::get("/files", "FilesController@index");

Route::get("/archived", "FilesController@indexArchived");

Route::get("/download/{id}/{originalName}", "DownloadsController@index");

Route::get("/archived/{id}", "DownloadsController@unarchive");

Route::get("/list", "FilesController@indexList");

Route::post("/comments", "CommentsController@store");

