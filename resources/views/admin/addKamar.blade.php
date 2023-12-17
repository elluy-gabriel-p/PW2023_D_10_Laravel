@extends('admin/navbar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Kamar</h1>
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
                        <form action="{{ asset('/user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Room Photo</label>
                                        <div>
                                            <input type="file" name="featured_photo" required>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Tipe Kamar *</label>
                                        <select class="form-select" id="tipeKamar" name="tipe" required>
                                            <option value="" selected disabled>Pilih Tipe Kamar</option>
                                            <option value="President Room">President Room</option>
                                            <option value="Family Room">Family Room</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Twin Room">Twin Room</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Price *</label>
                                        <input type="text" class="form-control" name="price" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="deskripsi" rows="3"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Beds</label>
                                        <input type="text" class="form-control" name="total_beds">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" id="InputStatus1" placeholder="Masukkan status"
                                            name="status" required />
                                        <option disabled selected   >Choose...</option>
                                        <option value="1">Terisi</option>
                                        <option value="2">Tersedia</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa-solid fa-square-plus"></i> Tambah</button>
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
