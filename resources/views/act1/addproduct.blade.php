@extends('layouts.admin')

@section('title','Add Product')
@section('content')
<!-- Content Header (Page header) -->
<hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card card-primary justify-content-center">
            
                <div class="card-header">
                <a href="{{ route('product.index') }}" class="btn btn-success btn-sm float-right">
                            <i class="fa fa-reply" aria-hidden="true"></i> Back to Products
                        </a>
                    <h3 class="card-title ">Add New Product</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('product.store' , $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <label for="name"><strong>Name:</strong></label>
                        <input id="name" type="text"placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  
                        aria-describedby="basic-addon2" autocomplete="name" required autofocus >

            

                        <label for="description" class="mt-4"><strong>Description:</strong></label>
                        <input id="description" type="text"placeholder="Description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  
                        aria-describedby="basic-addon2" autocomplete="description" required autofocus >

        

                        <label for="price" class="mt-4"><strong>Price:</strong></label>
                        <input id="price" type="text"placeholder="Price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  
                        aria-describedby="basic-addon2" autocomplete="price" required autofocus >
                    <hr>
                    <a href="{{ route('product.index') }}" class="btn btn-danger btn-block">Cancel</a>
                    <a class="btn btn-primary btn-block"><button type="submit" class="btn btn-primary btn-block">Add Product</button></a>
                
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
        </div>
    </div>
@endsection

