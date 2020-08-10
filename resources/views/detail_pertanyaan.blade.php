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
                    <a href="{{ route('pertanyaan.edit', ['pertanyaan'=>$data->id]) }}"
                        class="btn btn-primary">Ubah</a>
                </div>
                <div class="col-1">
                    <form
                        action="{{ route('pertanyaan.destroy',['pertanyaan'=>$data->id]) }}"
                        method="POST">
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
