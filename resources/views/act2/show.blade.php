@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-primary justify-content-center">
         
              <div class="card-header">
              <a href="{{ route('file.index') }}" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-reply" aria-hidden="true"></i> Back to File Upload
                    </a>
                <h3 class="card-title text-center">{{ $file->name }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Filename:</strong>

                <p class="text-muted">
                  {{ $file->name }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> File Type:</strong>

                <p class="text-muted">{{ $file->extension }}</p>

                <hr>
                <div class="col-md-6-offset-4">
                        {{-- <embed src="/storage/{{ $file->path }}" type="application/pdf" width="100%" height="600px" />--}}
                         <a href="/storage/{{ $file->path }}"><button type="submit"> Open File </button></a>
                        {{--  <iframe src="{{ url('storage/'. $file->path) }}" frameborder="5" style="width: 100%"></iframe> --}} 
                </div>
                <hr>  

                <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-danger">
                                        Delete
                <a href="{{ route('file.edit', $file) }}" class="btn btn-primary btn-block">Edit File</a>
                               
              </div>
              <!-- /.card-body -->
            </div>
          </div>
       </div>

</div>
    <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title text-right">Are you sure you want to delete file?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No, cancel</button>

              <form action="{{ route('file.destroy',  $file) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-light">Yes, confirm</button>
                </form>    
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection


