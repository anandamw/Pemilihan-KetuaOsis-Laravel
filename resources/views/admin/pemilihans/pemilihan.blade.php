@extends('admin.layouts.template')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->

            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Datatable</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>

                                            <th>No</th>
                                            {{-- <th>Nis</th> --}}
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            {{-- <th>Email</th> --}}
                                            <th>Role</th>
                                            <th>Tanggal</th>
                                            <th>Kandidat yang dipilih</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getPemilihan as $get)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $get->name }} <br> {{ $get->nis }} </td>
                                                <td>{{ $get->kelas }}</td>
                                                {{-- <td>{{ $get->email }}</td> --}}
                                                <td>{{ $get->role }}</td>
                                                <td>{{ $get->created_at }}</td>
                                                <td>{{ $get->nama_kandidat }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
