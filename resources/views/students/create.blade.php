@extends('templates.default')

@php 
        $preTitle = 'Data';

        $title = 'Tambah Data siswa ';
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('students.index')}}" class="" method="post">
            @csrf 
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" name="example-text-input" placeholder="Tulis Nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control" name="example-text-input" placeholder="Tulis Alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">No Tlp</label>
                <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="Tulis No tlp">
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="class"class="form-control" name="example-text-input" placeholder="Tulis Kelas">
            </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>

        </form>
    </div>
</div>
@endsection