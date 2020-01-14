@extends('layout')

@section('title')
    Image Upload Utility
@endsection

@section('page-title')
    Image Upload Utility
@endsection

@section('content')
<div class="container">

    <div class="panel panel-primary">

      <div class="panel-body">

            <form method="post" id="formImgInp" action="{{ route('image.add') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="file" name="image" id="image"/>
                <br>
                <input type="submit"/>
            </form>

      </div>

    </div>

</div>

@if(session('success'))
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
            <p style="color: black">{{ session('success') }}</p>
            <img class="img-responsive" src="{{ asset('images/' . session('image')) }}">
            <p>Image name: {{ session('image') }}</p>
        </div>
    </div>
</div>
@endif

@endsection