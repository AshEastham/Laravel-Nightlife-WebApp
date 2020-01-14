<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\EventCreated;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        // Must be logged in to create or edit an event
        $this->middleware('auth')->only(['create','store','edit','update','destroy']);
    }    
    
    public function index() 
    {
        // Query to return all events.
        $events = Event::all();
        
        return view('events.index', compact('events'));
    }
    
    public function show(Event $event) {
        // Code to display a specific event.  Uses the event passed to the show method.
        return view('events.show', compact('event'));
    }
    
    public function create()
    {
        return view('events.create');
    }
    
    public function store()
    {
        // Take all values related to the event with validation, using the validateEvent function.
        $attributes = $this->validateEvent();
        // Creatte eventt using validated attributes.
        $event = Event::create($attributes);
        // Send a Mailable when an event has been created, currently just sends to 'admin', could be mailed
        // to the user who created the event, using an 'owner id'.
        \Mail::to('ash-eastham@hotmail.co.uk')->send(
        
            new EventCreated($event)
        
        );        
        
        return redirect('/events');
    }
    
    public function edit(Event $event) 
    {
        return view('events.edit', compact('event'));
    }
    
    public function update(Event $event)
    {
        // Query used when updating an event, uses same validation as when an event is created.
        $event->update($this->validateEvent());
        
        return redirect('/events');
    }
    
    public function destroy(Event $event)
    {
        // Delete an event
        $event->delete();
        return redirect('/events');
    }
    
    protected function validateEvent()
    {
        // Get the event attributes and validate them.
        return request()->validate([
            'name' => ['required', 'min:3'],
            'biography' => ['required', 'min:3'],
            'vidLink' => ['required', 'min:3'],
            'fbLink' => ['required', 'min:3'],
            'emailLink' => ['min:3'],
            'indexImgSrc' => ['required', 'min:3'],
            'profileImgSrc' => ['required', 'min:3'],
        ]);
    }    
}
