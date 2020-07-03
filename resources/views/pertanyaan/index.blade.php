@extends('adminlte.master')

@section('title', 'List Pertanyaan')
@section('content')
<a href="/pertanyaan/create" class="btn btn-primary mb-2" role="button">Buat Pertanyaan</a>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Pertanyaan</h3>

    
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Pertanyaan</th>
          </tr>
        </thead>
        <tbody>
        @foreach($pertanyaans as $key => $pertanyaan)
            <tr onclick="window.location='jawaban/{{$pertanyaan->id}}';">
            <td>{{$pertanyaan->id}}</td>
            <td>{{$pertanyaan->judul}}</td>
            <td>{{$pertanyaan->isi}}</td>
          </tr>
        @endforeach
        
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection