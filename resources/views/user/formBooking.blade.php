@extends('user/navbar')

@section('content')
    <style>
        .isi {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            min-height: 125vh;
            background-size: cover;
        }
    </style>
    <div class="isi">
        <div class="col-md-5 p-4 rounded pb-5" style="background-color:#3e99d0;">
            <div class="wrapper">
                <div class="form-box booking" style="color: white;">
                    <div style="display:flex;justify-content:center;">
                        <h1>BOOKING</h1>
                    </div>

                    <form class="row g-3 needs-validation" novalidate action="/booking" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" class="form-control" id="user_id" placeholder="Masukkan Nama" name="user_id"
                            value="{{ auth()->user()->id }}" readonly>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" id="guestName" placeholder="Masukkan Nama"
                                    name="guestName" value="{{ auth()->user()->name }}" readonly>
                                <label class="form-label" style="font-weight: bold" for="guestName">Nama</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="guestPhone"
                                    placeholder="Masukkan Nomor Telepon" name="guestPhone"
                                    value="{{ auth()->user()->no_telp }}" readonly>
                                <label class="form-label" style="font-weight: bold" for="guestPhone">No
                                    Telepon</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="email" class="form-control" id="guestEmail" name="guestEmail"
                                    value="{{ auth()->user()->email }}" readonly>
                                <label class="form-label" style="font-weight: bold" for="InputEmail">Email</label>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="id_kamar" name="id_kamar"
                            value="{{ $kamar->id }}">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" value="{{ $kamar->jenis }}" readonly>
                                <label class="form-label" style="font-weight: bold" for="InputEmail">Tipe Kamar</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" name="harga" value="{{ $kamar->harga }}"
                                    readonly>
                                <label class="form-label" style="font-weight: bold" for="InputEmail">Harga</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-solid fa-people-arrows"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="people"
                                    placeholder="Masukkan Jumlah person" name="people" required>
                                <label class="form-label" style="font-weight: bold" for="people">Jumlah
                                    Orang</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
                                <label class="form-label" style="font-weight: bold;">CHECK IN</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="checkOutDate" name="checkOutDate"
                                    required>
                                <label class="form-label" style="font-weight: bold;">CHECK OUT</label>

                            </div>
                        </div>
                        <div style="width:100vw;display:flex; justify-content:center;">
                            <button class="btn btn-primary rounded" type="submit">
                                <h4 style="color:white">Book Now</h4>
                                {{-- <a href="href=" {{ asset('/showUser') }}> --}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
