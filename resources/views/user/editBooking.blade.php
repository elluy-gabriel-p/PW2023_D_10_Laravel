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
                    <form class="row g-3 needs-validation" novalidate action="/booking/{{ $booking->id }}" method="post"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="fa-solid fa-people-arrows"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="people"
                                    placeholder="Masukkan Jumlah person" name="people" value="{{ $booking->people }}"
                                    required>
                                <label class="form-label" style="font-weight: bold" for="people">Jumlah
                                    Orang</label>
                            </div>
                        </div>
                        <input type="number" class="form-control" id="harga" placeholder="Masukkan Jumlah person"
                            name="harga" value="{{ $booking->kamar->harga }}" readonly hidden>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="checkInDate" name="checkInDate" required
                                    value="{{ $booking->checkInDate }}">
                                <label class="form-label" style="font-weight: bold;">CHECK IN</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required
                                    value="{{ $booking->checkOutDate }}">
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
