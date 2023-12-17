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
                        <h1>EDIT BOOKING</h1>
                    </div>

                    <form class="row g-3 needs-validation" novalidate action="{{ asset('/profile') }}">

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
                                <h4 style="color:white">Update Booking</h4>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
