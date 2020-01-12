<?php

namespace App\Http\Controllers;

use App\Venue;
use App\Mail\VenueCreated;

use Illuminate\Http\Request;

class VenuesController extends Controller
{
    public function __construct()
    {
        // Can't access edit Venues features without being authenticated.
        $this->middleware('auth')->only(['create','store','edit','update','destroy']);
    }
    
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
        $attributes = $this->validateVenue();
        
        $venue = Venue::create($attributes);
        
        \Mail::to('ash-eastham@hotmail.co.uk')->send(
        
            new VenueCreated($venue)
        
        );
        
        return redirect('/venues');
    }
    
    public function edit(Venue $venue) 
    {
        return view('venues.edit', compact('venue'));
    }
    
    public function update(Venue $venue)
    {
        
        $venue->update($this->validateVenue());
        
        return redirect('/venues');
    }
    
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return redirect('/venues');
    }
    
    protected function validateVenue()
    {
        return request()->validate([
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
    }
}
