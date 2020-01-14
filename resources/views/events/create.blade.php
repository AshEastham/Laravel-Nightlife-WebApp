@extends('../layout')

@section('title')
    Create Event
@endsection

@section('title')
    Create a new Event
@endsection

@section('content')
    <h1>Create A New Event</h1>
    
    <form method="POST" action="/events">
    
        {{ csrf_field() }}
        
        <h2>General Event Info</h2>
    
        <div class="form-group">
            <label for="name">Event Name</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="name" 
                placeholder="Please enter the Event's name" 
                value="{{ old('name') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="biography">Event Biography Description</label><br>
            <textarea
                name="biography" 
                class="form-control" 
                placeholder="Event biography description, please enter an excerpt from the event's official channels" 
                value="{{ old('biography') }}" 
                required
            ></textarea>
        </div>
        
        <h2>Event Video Info</h2>
        
        <div class="form-group">
            <label for="vidLink">Event Facebook video embed link</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="vidLink" 
                placeholder="Please enter the Event's video embed link from Facebook. Please only include the link between the src quotation marks of the embed link"  
                value="{{ old('vidLink') }}" 
                required
            >
        </div>
        
        <img src="{{ asset('images/videoEmbed.gif') }}" class="img-responsive">
        
        <h2>Event Social Info</h2>
        
        <div class="form-group">
            <label for="fbLink">Event Facebook Page Link</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="fbLink" 
                placeholder="Please enter the link for the Event's Facebook page" 
                value="{{ old('fbLink') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="emailLink">Event Contact Email</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="emailLink" 
                placeholder="Please enter the Event's contact email" 
                value="{{ old('emailLink') }}" 
            >
        </div>
        
        <h2>Event Image Info</h2>
        <p>
            DISCLAIMER: Please enter the name of the image source.  <br>
            Please keep filenames simple i.e. 'beaverworks.jpg', or 'beaverworks-profile.jpg'.  <br>
            The recommended image size for the Index page is '1500 x 900'. <br>
            And for the profile image (displayed on the actual event page) the recommended
            size is 1340 x 575.  
        </p>
        <p>
            Images can be uploaded using the photo upload utility, which you can find <a href="{{ url('/imageUpload') }}" target="_blank"><strong>here</strong></a>
        </p>
        
        <div class="form-group">
            <label for="indexImgSrc">Event Index Image Source</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="indexImgSrc" 
                placeholder="Please enter the event's image name (displayed on Event selection page)" 
                value="{{ old('indexImgSrc') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="profileImgSrc">Event Profile Image Source</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="profileImgSrc" 
                placeholder="Please enter the event's image name (displayed on Event profile page)" 
                value="{{ old('profileImgSrc') }}" 
                required
            >
        </div>        
        
        <div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </div>
        
        @include('errors')
        
    </form>    
@endsection