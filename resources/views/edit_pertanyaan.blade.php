@extends('master')

@section('content')
@foreach($pertanyaan as $data)
    <div class="card">
        <div class="card-header">
            <p class="card-title"><strong>Ubah Pertanyaan</strong></p>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form
                action="{{ route('pertanyaan.update',['pertanyaan'=>$data->id]) }}"
                method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">

                </div>
                <div class="form-group">
                    <label for="isi">Isi/Konten Pertanyaan</label>
                    <textarea class="form-control" id="isi" name="isi" rows="11">{{ $data->isi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endforeach
@endsection
