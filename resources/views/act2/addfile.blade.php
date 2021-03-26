@extends('layouts.dashboard')

@section('content')
<h1 class="mt-4 mb-4">Click choose file to upload</h1>

    <form action="{{ route('file.store', $file) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            
            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="files" placeholder="Choose file" id="file">
                    @error('files')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
                
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" id="submit">Add File</button>
                <a href="{{ route('file.index') }}" class="btn btn-danger">
                    <span class="hidden-xs hidden-sm"><em>Cancel</em></span>
                </a>
            </div>
        </div>     
    </form>
@endsection