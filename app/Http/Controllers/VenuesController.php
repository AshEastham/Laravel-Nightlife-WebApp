<?php

namespace App\Http\Controllers;

use App\Venue;
use App\Mail\VenueCreated;
// use App\Events\VenueCreated;

use Illuminate\Http\Request;

class VenuesController extends Controller
{
    public function __construct()
    {
        // Can't access edit Venues features without being authenticated.  Using the Auth Middleware.
        $this->middleware('auth')->only(['create','store','edit','update','destroy']);
    }
    
    public function index() 
    {
        // Show's all venues.
        $venues = Venue::all();
        
        return view('venues.index', compact('venues'));
    }
    
    public function show(Venue $venue) {
        // Venues Show Method, displays the selected Venue.
        return view('venues.show', compact('venue'));
    }
    
    public function create()
    {
        return view('venues.create');
    }
    
    public function store()
    {
        // Validate Form attributes, as defined in the function below.  
        $attributes = $this->validateVenue();
        // Create a new Venue, as long as attributes are valid.  
        $venue = Venue::create($attributes);
        
        // Mailable to 'admin' user when a new Venue is created.  
        \Mail::to('ash-eastham@hotmail.co.uk')->send(
        
            new VenueCreated($venue)
        
        );
        
        // event(new VenueCreated($venue));
        
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
        // Take the POST request data, validate it and return it for use.
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
            'event_id' => ['min:1']
        ]);
    }
}
