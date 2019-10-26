@extends('../layout')

@section('title')
    Projects
@endsection

@section('page-title')
    Projects
@endsection

@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection