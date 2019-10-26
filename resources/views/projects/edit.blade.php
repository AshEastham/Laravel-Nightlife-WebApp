@extends('../layout')

@section('title')
    Edit Project
@endsection

@section('title')
    Edit Project
@endsection

@section('content')
    <h1 class="title">Edit Project</h1>
    
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
    
        <div class="form-group">
            <label for="title">Title</label>
            
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
            
            <div>
                <label for="description">Description</label>
                
                <div>
                    <textarea name="description" class="form-control">{{ $project->description }}</textarea>         
                </div>
            </div>
            
            <div>
                <div>
                    <button type="submit" class="btn btn-primary">Update Project</button>  
                </div>
            </div>
            
        </div>
    </form>
    
    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <div>
            <div>
            <button type="submit" class="btn btn-danger">Delete Project</button>
            </div>
        </div>
    </form>
    
@endsection