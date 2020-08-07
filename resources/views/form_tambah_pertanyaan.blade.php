@extends('master')

@section('content')
<div class="card">
    <div class="card-header">
        <p class="card-title"><strong>Tambah Pertanyaan Baru</strong></p>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Pertanyaan</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul','')}}">
                @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi/Konten Pertanyaan</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="11">{{old('isi','')}}</textarea>
                @error('isi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection