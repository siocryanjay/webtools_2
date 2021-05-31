@extends('layouts.admin')
@section('title','Edit Product')
@section('content')
<hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card card-primary justify-content-center">
            
                <div class="card-header">
                <a href="{{ route('product.index') }}" class="btn btn-success btn-sm float-right">
                            <i class="fa fa-reply" aria-hidden="true"></i> Back to Products
                        </a>
                    <h3 class="card-title ">Edit Product: {{ $product->name }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form action="{{ route('product.update' , $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                        <label for="name"><strong>Name:</strong></label>
                        <input id="name" type="text"placeholder="{{ $product->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}"  
                        aria-describedby="basic-addon2" autocomplete="name" required autofocus >

            

                        <label for="description" class="mt-4"><strong>Description:</strong></label>
                        <input id="description" type="text" placeholder="{{ $product->description }}" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}"  
                        aria-describedby="basic-addon2" autocomplete="description" required autofocus >

        

                        <label for="price" class="mt-4"><strong>Price:</strong></label>
                        <input id="price" type="text" placeholder="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}"  
                        aria-describedby="basic-addon2" autocomplete="price" required autofocus >
                    <hr>
                    <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-danger">Cancel</a>
                    <a class="btn btn-primary btn-block"><button type="submit" class="btn btn-primary btn-block">Update</button></a>
                
                    </form>
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
              <h4 class="modal-title text-right">Are you sure you want to cancel editing?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No, cancel</button>
                <a href="{{ route('product.index') }}"> <button  type="submit" class="btn btn-outline-light">Yes, confirm</button></a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection

