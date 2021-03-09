@extends('layouts.dashboard')

@section('content')
<h1 class="mt-4 mb-4">Edit Product</h1>
<form action="{{ route('product.update' , $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
        <label for="name"><strong>Name:</strong></label>
        <input id="name" type="text"placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  
        aria-describedby="basic-addon2" autocomplete="name" required autofocus >

        <label for="description" class="mt-4"><strong>Description:</strong></label>
        <input id="description" type="text"placeholder="Description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  
        aria-describedby="basic-addon2" autocomplete="description" required autofocus >

        <label for="price" class="mt-4"><strong>Price:</strong></label>
        <input id="price" type="text"placeholder="Price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  
        aria-describedby="basic-addon2" autocomplete="price" required autofocus >

        <button type="submit" class="mt-5 btn btn-primary float-right">Submit</button>
    </form>
@endsection