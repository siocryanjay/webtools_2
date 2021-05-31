@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="row justify-content-center">
        <div class="col-md-5">
        <div class="card card-primary justify-content-center">
            
                <div class="card-header">
                <a href="{{ route('file.index') }}" class="btn btn-success btn-sm float-right">
                            <i class="fa fa-reply" aria-hidden="true"></i> Back to File Upload
                        </a>
                    <h3 class="card-title ">Add new file</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form action="{{ route('file.store', $file) }}" method="POST" enctype="multipart/form-data">
                @csrf

                        <!-- /input-group -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <input type="file" name="files" id="file">
                    @error('files')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  <!-- /btn-group -->
                  
                </div>
                <!-- /input-group -->
            
                    <hr>
                    <a href="{{ route('file.index') }}" class="btn btn-danger btn-block">Cancel</a>
                    <a class="btn btn-primary btn-block"><button type="submit" id="submit" class="btn btn-primary btn-block">Add File</button></a>
                

                    </form>
                </div>
                <!-- /.card-body -->
                </div>
        </div>
    </div>
</div>
@endsection



