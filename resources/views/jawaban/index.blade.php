@extends('adminlte.master')

@section('title', 'List Jawaban')
@section('content')
<div class="timeline-item mb-3">
    <h3 class="timeline-header">{{$pertanyaan->judul}}</h3>
    <div class="timeline-body">{{$pertanyaan->isi}}</div>
</div>
<a href="/jawaban/{{$pertanyaan->id}}/create" class="btn btn-primary mb-2" role="button">Buat Jawaban</a>
<div class="card">
     
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jawaban</th>
          </tr>
        </thead>
        <tbody>
        @foreach($jawabans as $key => $jawaban)
            <tr>
            <td>{{$jawaban->id}}</td>
            <td>{{$jawaban->isi}}</td>
          </tr>
        @endforeach
        
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <a class="btn btn-warning btn-sm" href="/pertanyaan">List Pertanyaan</a>
@endsection