@extends('master')

@section('content')
@foreach($pertanyaan as $data)
    <div class="card">
        <div class="card-header">
            <p class="card-title"><strong>{{ $data->judul }}</strong></p>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <small><strong>{{ $data->tanggal_dibuat }}</strong></small>
            <hr>
            <p>{{ $data->isi }}</p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="row justify-content-end">
                <div class="col-1">
                    <a href="/pertanyaan/{{ $data->id }}/edit" class="btn btn-primary">Ubah</a>
                </div>
                <div class="col-1">
                    <form action="/pertanyaan/{{ $data->id }}" method="POST" style="">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
