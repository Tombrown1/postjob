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
           'listings' => Listing::latest()->filter(request(['tags', 'search']))->paginate(4)
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
    //    dd($request->file('logo'));
        $formFields = $request->validate([
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]); 

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);

        // return redirect('/');

        return redirect('/')->with('message', 'Listing record created successfully!');
   }

   //Show Edit Listing
   public function edit(Listing $listing){
        // dd($listing);
    return view('listings.edit', ['listing' => $listing]);
   } 

   //Update Listing
   public function update(Request $request, Listing $listing){
    //    dd($request->file('logo'));
        $formFields = $request->validate([
            'company' => 'required',
            'title' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]); 

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        // return redirect('/');

        return back()->with('message', 'Listing record updated successfully!');
   }

   // Delete Listing
   public function destroy(Listing $listing){        
        $listing->delete();

        return redirect('/')->with('message', 'Listing is deleted successfully!');
   }
}
