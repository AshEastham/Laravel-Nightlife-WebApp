<?php

namespace App\Http\Controllers;

use App\Venue;

use Illuminate\Http\Request;

class VenuesController extends Controller
{
    public function index() 
    {
        $venues = Venue::all();
        
        return view('venues.index', compact('venues'));
    }
    
    public function show(Venue $venue) {
        return view('venues.show', compact('venue'));
    }
    
    public function create()
    {
        return view('venues.create');
    }
    
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'about' => ['required', 'min:3'],
            'biography' => ['required', 'min:3'],
            'mapLat' => ['required', 'min:3'],
            'mapLon' => ['required', 'min:3'],
            'fbLink' => ['required', 'min:3'],
            'siteLink' => ['required', 'min:3'],
            'emailLink' => ['min:3'],
            'indexImgSrc' => ['required', 'min:3'],
            'profileImgSrc' => ['required', 'min:3'],
        ]);
        
        Venue::create($attributes);
        
        return redirect('/venues');
    }
    
    public function edit(Venue $venue) 
    {
        return view('venues.edit', compact('venue'));
    }
    
    public function update(Venue $venue) 
    {
        $venue->update(request(['name', 'about','biography','mapLat','mapLon','fbLink','siteLink','emailLink','indexImgSrc','profileImgSrc']));
        
        return redirect('/venues');
    }
    
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return redirect('/venues');
    }    
}
