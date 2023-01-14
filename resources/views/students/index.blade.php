@extends('templates.default')


@php
        $preTitle = 'Data';
        $title = 'Data siswa2';
@endphp

@push('page-action')
    <a href="{{route('students.create')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Class</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->phone_number }}</td>
                        <td>{{ $student->class }}</td>
                        <td>
                        

                            <form action="{{route('students.edit',$student->id)}}" class="">
                                <input type="submit" value="Edit" class="btn btn-success btn-sm">
                            </form>

                                <form action="{{route('students.destroy',$student->id)}}" method="post">

                                @csrf 

                                @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection