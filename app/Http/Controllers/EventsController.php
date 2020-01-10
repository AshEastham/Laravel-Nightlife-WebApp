<?php

namespace App\Http\Controllers;

use App\Event;

use Illuminate\Http\Request;

class EventsController extends Controller
{
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
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'biography' => ['required', 'min:3'],
            'vidLink' => ['required', 'min:3'],
            'fbLink' => ['required', 'min:3'],
            'emailLink' => ['min:3'],
            'indexImgSrc' => ['required', 'min:3'],
            'profileImgSrc' => ['required', 'min:3'],
        ]);
        
        Event::create($attributes);
        
        return redirect('/events');
    }
    
    public function edit(Event $event) 
    {
        return view('events.edit', compact('event'));
    }
    
    public function update(Event $event) 
    {
        $event->update(request(['name','biography','vidLink','fbLink','emailLink','indexImgSrc','profileImgSrc']));
        
        return redirect('/events');
    }
    
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('/events');
    } 
}
