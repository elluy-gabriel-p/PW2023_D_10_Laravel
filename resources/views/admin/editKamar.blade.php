@extends('admin/navbar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Kamar</h1>
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
                        <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="font-weight-bold">
                                            Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" value="{{ old('image', $kamar->image) }}"
                                            placeholder="Masukkan Image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                Gambar kamar Tidak Boleh Kosong !
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="font-weight-bold">Jenis Kamar</label>
                                        <select class="form-control @error('jenis') is-invalid @enderror" name="jenis">
                                            <option selected disabled>Pilih Jenis Kamar</option>
                                            <option value="President Room">President Room</option>
                                            <option value="Family Room">Family Room</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Twin Room">Twin Room</option>
                                        </select>
                                        @error('jenis')
                                            <div class="invalid-feedback">
                                                Harus Pilih Salah Satu Jenis kamar !
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="font-weight-bold">Harga</label>
                                        <input type="number"
                                            class="form-control
                                            @error('harga') is-invalid @enderror"
                                            name="harga" value="{{ old('harga', $kamar->harga) }}"
                                            placeholder="Masukkan Harga">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                Price Tidak Boleh Kosong !
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="font-weight-bold">Deskripsi</label>
                                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                            value="{{ old('deskripsi', $kamar->deskripsi) }}" placeholder="Masukkan Deskripsi" rows="3"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="font-weight-bold">Fasilitas</label>
                                        <input type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                            name="fasilitas" value="{{ old('fasilitas', $kamar->fasilitas) }}"
                                            placeholder="Masukkan Fasilitas">
                                        @error('fasilitas')
                                            <div class="invalid-feedback">
                                                Fasilitas Minimal 1 !
                                            </div>
                                        @enderror
                                        <div class="mb-4">
                                            <label class="font-weight-bold">Status</label>
                                            <select class="form-control @error('status') is-invalid @enderror"
                                                name="status">
                                                <option disabled selected>Pilih Status Kamar...</option>
                                                <option value="Terisi">Terisi</option>
                                                <option value="Tersedia">Tersedia</option>
                                                <option value="Maintenance">Maintenance</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    Harus Pilih Salah Satu Status Kamar !
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-md btn-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i> Update</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
