@extends('../layout')

@section('title')
    Show Project
@endsection

@section('title')
    Show Project
@endsection

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    
    <div>{{ $project->description }}</div>
    
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
@endsection