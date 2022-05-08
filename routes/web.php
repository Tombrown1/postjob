<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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



// Route::get('/listings/{id}', function($id){
//     $listing = Listing::find($id);
//     if($listing){
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     }else{
//         abort('404');
//     }
// });


// Common Resource Routes
// Index - Show all Listing
// Show - Show single listing
// Create - Show form to create new listing
// Store - Store new listing
// Edit - Show form to edit listing
// Update- Update listing
// Destroy - Delete listing

Route::get('/', [ListingController::class, 'index']);
// Show Create form
Route::get('listings/create-job', [ListingController::class, 'create'])->middleware('auth');
//Store data listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
//Manage Listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->middleware('auth'); 

// Show user register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store'])->middleware('auth');
// Log User Out
Route::Post('/logout', [UserController::class, 'logout'])->middleware('auth');
//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//Loggin User
Route::Post('/users/authenticate', [UserController::class, 'authenticate']);





