<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\EventCreated;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create','store','edit','update','destroy']);
    }    
    
    public function index() 
    {
        $events = Event::all();
        
        return view('events.index', compact('events'));
    }
    
    public function show(Event $event) {
        return view('events.show', compact('event'));
    }
    
    public function create()
    {
        return view('events.create');
    }
    
    public function store()
    {
        $attributes = $this->validateEvent();
        
        $event = Event::create($attributes);
        
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
        $event->update($this->validateEvent());
        
        return redirect('/events');
    }
    
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/events');
    }
    
    protected function validateEvent()
    {
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
