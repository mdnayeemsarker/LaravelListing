<?php

// use App\Models\Post;

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//All Listing
Route::get('/', [ListingController::class, 'index']);

Route::get('/properties', function () {
    return view('page.properties');
});

//All Listing
Route::get('/listing', [ListingController::class, 'index']);

// Single Listing 
// start eloqueriam model
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     }else{
//         abort('404', 'Item dosen\'t Exist');
//     }
// });
// end eloqueriam model

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Data Form
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listing
Route::get('/listing/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing 
// Start Route Model
Route::get('/listings/{listing}', [ListingController::class, 'show']);
// End Route Model

// Route::get('/posts', function(){
//     return view('posts', [
//         'header' => 'All Post',
//         'post' => Post::all()
//     ]);
// });

// Show Register /Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New Users
Route::post('/users', [UserController::class, 'store']);

// Show Logout Form
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login Users
Route::post('/users/login', [UserController::class, 'authenticate']);