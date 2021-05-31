@extends('layouts.admin')
@section('title','File Upload')
@section('content')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Files</h3>

          <div class="card-tools">
          <a href="{{ route('file.create') }}" type="button" class="btn btn-block bg-gradient-primary">Add File</a>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 30%">
                         Filename
                      </th>
                      <th style="width: 25%">
                          File Type
                      </th>
                      <th style="width: 10%">
                         Date Created
                      </th>
                      <th style="width:10%">
                         Date Updated
                      </th>
                      <th style="width: 15%">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($files as $file)
                  <tr>
                                <td>{{ $file->name }}</td>
                                <td>{{ $file->extension }}</td>       
                                <td>{{ $file->created_at }}</td>
                                <td>{{ $file->updated_at }}</td>
                          
                   
                      <td class="d-inline-flex text-right">
                          <a href="{{ route('file.show', $file) }}">
                          <button class="btn btn-primary btn-sm" type="button">
                              <i class="fas fa-folder">
                              </i>
                              View
                            </button>
                            </a>
                          <a href="{{ route('file.edit', $file) }}">
                          <button class="btn btn-info btn-sm" type="button">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                              </button>
                            </a>
                       
                            <form action="{{ route('file.destroy',  $file) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                               <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Delete</button>
                            </form>  
                        
                         
                      </td>
                  </tr>
               @endforeach
            </tbody>



                     
</table>
@endsection




