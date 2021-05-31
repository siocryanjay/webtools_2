@extends('layouts.admin')
@section('title','Products')
@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>

          <div class="card-tools">
          <a href="{{ route('product.create') }}" type="button" class="btn btn-block bg-gradient-primary">Add Product</a>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 25%">
                          Product Name
                      </th>
                      <th style="width: 25%">
                          Description
                      </th>
                      <th style="width:10%">
                         Price
                      </th>
                      <th style="width: 15%">
                          Date Created
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                  <tr>
                                 <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td> 
                                <td>{{ $product->price }}</td>          
                                <td>{{ $product->updated_at }}</td>
                          
                      </td>
                      <td class="d-inline-flex text-right">
                          <a href="{{ route('product.show', $product) }}">
                          <button class="btn btn-primary btn-sm" type="button">
                              <i class="fas fa-folder">
                              </i>
                              View
                            </button>
                            </a>
                          <a href="{{ route('product.edit', $product) }}">
                          <button class="btn btn-info btn-sm" type="button">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                              </button>
                            </a>
                       
                            <form action="{{ route('product.destroy',  $product->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                               <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</button>
                            </form>  
                        
                         
                      </td>
                  </tr>
                  @endforeach
            </tbody>
</table>
</div>
@endsection

    
                  
               
