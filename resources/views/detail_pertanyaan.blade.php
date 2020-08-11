@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <p class="card-title"><strong>{{ $pertanyaan->judul }}</strong></p>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <small><strong>{{ $pertanyaan->tanggal_dibuat }}</strong></small>
            <hr>
            <p>{{ $pertanyaan->isi }}</p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="row justify-content-end">
                <div class="col-1">
                    <a href="{{ route('pertanyaan.edit', ['pertanyaan'=>$pertanyaan->id]) }}"
                        class="btn btn-primary">Ubah</a>
                </div>
                <div class="col-1">
                    <form
                        action="{{ route('pertanyaan.destroy',['pertanyaan'=>$pertanyaan->id]) }}"
                        method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
