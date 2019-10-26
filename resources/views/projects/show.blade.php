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
    
    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </p>
@endsection