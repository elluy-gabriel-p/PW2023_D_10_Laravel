@extends('admin/navbar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kamar</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ asset('/addKamar') }}" class="btn btn-lg btn-primary mb-3"><i
                                    class="fa-regular fa-square-plus"></i> Add Kamar </a>
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Photo</th>
                                        <th>Tipe Kamar</th>
                                        <th>Harga (per malam)</th>
                                        <th>Deskripsi</th>
                                        <th>Jumlah Kasur</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ $row['featured_photo'] }}"alt="" class="img-fluid"
                                                    style="width: 18rem;">
                                            </td>
                                            <td>{{ $row['tipe'] }}</td>
                                            <td>Rp. {{ $row['price'] }}</td>
                                            <td>{{ $row['deskripsi'] }}</td>
                                            <td>{{ $row['total_beds'] }}</td>
                                            <td>{{ $row['status'] }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ asset('/editKamar') }}" class="btn btn-sm btn-primary"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit </a>
                                                <a href="{{ asset('/dashboard') }}" class="btn btn-sm btn-danger"
                                                    onClick="return confirm('Apakah Anda Yakin Ingin menghapus Kamar ini?');"><i
                                                        class="fa-solid fa-trash"></i> Delete</a>
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
@endsection
