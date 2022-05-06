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
Route::get('listings/create-job', [ListingController::class, 'create']);
//Store data listing
Route::post('/listings', [ListingController::class, 'store']);
// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);
//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']); 

// Show user register form
Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);
// Log User Out
Route::Post('/logout', [UserController::class, 'logout']);





