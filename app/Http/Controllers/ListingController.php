<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    //Show all listing
    public function index()
    {
        return view('page.listing.index', [
            'listing' => Listing::latest()
                ->filter(request(['tag', 'search', 'company']))
                ->paginate(5)
        ]);
    }

    //Show single listing
    public function show(Listing $listing)
    {
        return view('page.listing.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form 
    public function create()
    {
        // dd(auth()->id());
        return view('page.listing.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            // 'company' => ['required', Rule::unique('listings', 'company')],
            'company' => 'required',
            'location' => 'required',
            'tags' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $formFields['user_id'] = auth()->id();
        // dd($formFields);
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }

    // Edit Data
    public function edit(Listing $listing)
    {
        return view('page.listing.edit', ['listing' => $listing]);
    }

    // Update Data
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            // 'company' => ['required', Rule::unique('listings', 'company')],
            'company' => 'required',
            'location' => 'required',
            'tags' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // $formFields['user_id'] = auth()->id();

        $listing->update($formFields);

        return back()->with('message', 'Listing Updated Successful');
    }

    // Delete Listing
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted Successful');
    }
    
    // Delete Listing
    public function manage()
    {
        return view('page.listing.manage', ['listings' => auth()->user()->listings()
        ->paginate(5)]);
    }
}
