@extends('user/navbar')

@section('content')
    <style>
        .card {
            margin: auto;
            margin-top: 100px;
            background-color: #3e99d0;
        }

        .img-radius {
            margin-top: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>PROFILE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="card-block text-center">
                    <div class="m-b-25">
                        <img src="{{ url('images/profile') . '/' . Auth::user()->image }}" class="img-radius"
                            alt="User-Profile-Image">
                    </div>
                    <h6 class="text-white">{{ Auth::user()->name }}</h6>
                    <a href="{{ route('profile.edit', Auth::user()->id) }}">
                        <i class="fa-solid fa-pen-to-square" style="color: #1F4A72"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="text-white">Information</h5>
                    <hr>
                    <p class="text-white">{{ Auth::user()->email }}<br />
                        No Telepon : {{ Auth::user()->no_telp }}<br />
                        Umur : {{ Auth::user()->umur }}
                    </p>
                    <a class="btn btn-sm btn-primary" type="button" href="{{ asset('/booking') }}">
                        <i class="fa-solid fa-file-invoice"></i> Invoice
                    </a>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal"
                        type="button">
                        <i class="fa-solid fa-right-from-bracket"></i> Hapus Akun
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header text-bg-primary">
                    <h1 class="modal-title fs-5" id="logoutModalLabel">Apakah Ingin Menghapus Akun Ini ? </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                        action="{{ route('profile.destroy', Auth::user()->id) }}" method="POST">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
