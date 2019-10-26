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
    
        <div>
            <label for="title">Project Title</label><br>
            <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}" required>
        </div>
        
        <div>
            <label for="description">Project Description</label><br>
            <textarea name="description" placeholder="Project description" value="{{ old('description') }}" required></textarea>
        </div>
        
        <div>
            <button type="submit">Create Project</button>
        </div>
        
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        </div>
        
    </form>
@endsection