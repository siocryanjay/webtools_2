@extends('layouts.admin')
@section('title','Show Details')
@section('content')

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-primary justify-content-center">
         
              <div class="card-header">
              <a href="{{ route('product.index') }}" class="btn btn-success btn-sm float-right">
                        <i class="fa fa-reply" aria-hidden="true"></i> Back to Products
                    </a>
                <h3 class="card-title text-center">{{ $product->name }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Product Number</strong>

                <p class="text-muted">
                  {{ $product->id }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Name</strong>

                <p class="text-muted">{{ $product->name }}</p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Desription</strong>

                <p class="text-muted">{{ $product->description }}</p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i>Price</strong>

                <p class="text-muted">{{ $product->price }}</p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i>Date</strong>

                <p class="text-muted"><p>{{ $product->created_at }}</p></p>
                <hr>
                <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-danger">
                                        Delete
                <a href="{{ route('product.edit', $product) }}" class="btn btn-primary btn-block">Edit Product</a>
                               
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
              <h4 class="modal-title text-right">Are you sure you want to delete?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No, cancel</button>

              <form action="{{ route('product.destroy',  $product) }}" method="POST">
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
