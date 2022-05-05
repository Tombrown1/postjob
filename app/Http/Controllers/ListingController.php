<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
   
    //Show all Job Listing
   public function index(){
       return view('listings.index', [
           'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
       ]);
   }
    //Show a single Job Listing
   public function show(Listing $listing){

       return view('listings.show', ['listing' => $listing]);
   }
   //Show Create Jobs
   public function create(){
       return view('listings.create');
   }

   //Store Listing
   public function store(Request $request){
    //    dd($request->all());
        $formFields = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tag' => 'required',
            'description' => 'required'
        ]); 

        Listing::create($formFields);

        // return redirect('/');

        return back()->with('message', 'Job record created successfully!');
   }
}
