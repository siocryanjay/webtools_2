@extends('layouts.dashboard')

@section('content')
<h1 class="mt-4 mb-4">Edit File</h1>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <form action="{{ route('file.update' , $file) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
    
    <div class="row">
        <div class="col-md-4 offset-4">
            <label for="name"><strong>Name:</strong></label>
            <input id="name" type="text"placeholder="{{ $file->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  
             aria-describedby="basic-addon2" autocomplete="name" autofocus >
        </div>
        <div class="col-md-12 offset-4 mt-5">
            <div class="form-group">
                <input type="file" name="files" placeholder="Choose file" id="file">

             </div>
        </div>
    
        <div class="col-md-12 offset-4 mt-3">
            <button type="submit" class="btn btn-primary" id="submit">Apply Changes</button>
            <a href="{{ route('file.index') }}" class="btn btn-danger">
                <span class="hidden-xs hidden-sm"><em>Cancel</em></span>
            </a>
        </div>
    </div>   
</form>
@endsection