@extends('../layout')

@section('title')
    Show Project
@endsection

@section('title')
    Show Project
@endsection

@section('page-title')
    {{ $project->title }}
@endsection

@section('content')    
    <div>{{ $project->description }}</div>
    <div class="blue-link">
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>
    
    <!--DISPLAY PROJECT TASKS-->
    @if ($project->tasks->count())
        <div class="panel">
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        
                        <label class="form-check {{ $task->completed ? 'is-complete' : ''}}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
    
    <!--ADD A NEW TASK-->
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="panel">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">New Task</label>
            
            <div>
                <input type="text" class="form-control" name="description" placeholder="New Task" required>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
            
            @include('errors')          
            
        </div>
    </form>
    
@endsection