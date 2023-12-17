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

                    <form class="row g-3 needs-validation" novalidate action="{{ asset('/') }}">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" id="InputNama" placeholder="Masukkan Nama"
                                    required>
                                <label class="form-label" style="font-weight: bold" for="InputNama">Nama</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="InputTelepon"
                                    placeholder="Masukkan Nomor Telepon" required>
                                <label class="form-label" style="font-weight: bold" for="InputTelepon">No
                                    Telepon</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="email" class="form-control" id="InputEmail" placeholder="Masukkan Email Anda"
                                    required>
                                <label class="form-label" style="font-weight: bold" for="InputEmail">Email</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-bed"></i></span>
                            <div class="form-floating text-muted">
                                <select class="form-select" id="InputTipeKamar" required>
                                    <option value="" disabled selected>Pilih Tipe Kamar</option>
                                    <option value="President Room">President Room</option>
                                    <option value="Family Room">Family Room</option>
                                    <option value="Single Room">Single Room</option>
                                    <option value="Twin Room">Twin Room</option>
                                    <label class="form-select" style="font-weight: bold" for="InputTipeKamar"></label>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-solid fa-people-arrows"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="InputEmail"
                                    placeholder="Masukkan Jumlah person" required>
                                <label class="form-label" style="font-weight: bold" for="InputPerson">Jumlah
                                    Orang</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="InputDate" required>
                                <label class="form-label" style="font-weight: bold;">CHECK IN</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="InputDate" required>
                                <label class="form-label" style="font-weight: bold;">CHECK OUT</label>

                            </div>
                        </div>
                        <div style="width:100vw;display:flex; justify-content:center;">
                            <button class="btn btn-primary rounded" type="submit">
                                <h4 style="color:white">Book Now</h4>
                                <a href="href=" {{ asset('/showUser') }}>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
