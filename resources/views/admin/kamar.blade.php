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
                            <a href="{{ route('kamar.create') }}" class="btn btn-md btn-success mb-3"><i
                                    class="fa-regular fa-square-plus"></i> Add Kamar </a>
                            <div class="table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Photo</th>
                                            <th class="text-center">Tipe Kamar</th>
                                            <th class="text-center">Harga (per malam)</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Fasilitas</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($kamar as $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                                <td class="text-center align-middle">
                                                    @if ($item->image)
                                                        <img src="{{ url('images/kamar') . '/' . $item->image }}"
                                                            class="img-fluid" style="width: 18rem;">
                                                    @endif
                                                </td>
                                                <td class="text-center align-middle">{{ $item->jenis }}</td>
                                                <td class="text-center align-middle">Rp. {{ $item->harga }}</td>
                                                <td class="text-center align-middle">{{ $item->deskripsi }}</td>
                                                <td class="text-center align-middle">{{ $item->fasilitas }}</td>
                                                <td class="text-center align-middle">{{ $item->status }}</td>
                                                <td class="text-center align-middle">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('kamar.destroy', $item->id) }}" method="POST">
                                                        <a href="{{ route('kamar.edit', $item->id) }}"
                                                            class="btn btn-sm btn-primary">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">DELATE</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data Kamar belum tersedia
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            {{ $kamar->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
