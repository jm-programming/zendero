@extends('admin.layout')


@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Listado de Posts</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="post_table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Extracto</th>
          
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
            
                @foreach ($posts as $post )
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->excerpt }}</td>                
                    <td>
                        <button class="btn btn-success btn-xs"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"> <i class="fa-solid fa-trash"></i></button>
                    </td>

                </tr>
                @endforeach
            
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection