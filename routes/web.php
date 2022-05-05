<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']); 




