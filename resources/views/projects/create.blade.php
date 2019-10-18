@extends('../layout')

@section('title')
    Create a Project
@endsection@extends('../layout')

@section('title')
    Create a new Project
@endsection

@section('content')
    <h1>Projects</h1>
    
    <form method="POST" action="/projects">
    
        {{ csrf_field() }}
    
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
@endsection