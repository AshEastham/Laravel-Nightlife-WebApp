@extends('../layout')

@section('title')
    Create a Project
@endsection

@section('title')
    Create a new Project
@endsection

@section('content')
    <h1>Create A New Project</h1>
    
    <form method="POST" action="/projects">
    
        {{ csrf_field() }}
    
        <div class="form-group">
            <label for="title">Project Title</label><br>
            <input 
                type="text" 
                class="form-control" 
                name="title" 
                placeholder="Project title" 
                value="{{ old('title') }}" 
                required
            >
        </div>
        
        <div class="form-group">
            <label for="description">Project Description</label><br>
            <textarea 
                name="description" 
                class="form-control" 
                placeholder="Project description" 
                value="{{ old('description') }}" 
                required
            >
            
            </textarea>
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">Create Project</button>
        </div>
        
        @include('errors')
        
    </form>
@endsection