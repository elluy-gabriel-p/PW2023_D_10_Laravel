@extends('user/navbar')

@section('content')
    <div class="page-top text-white">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-white">BOOKING</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4 text-white">
        <div class="row">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @forelse ($bookings as $booking)
                <div class="col-md-4 mb-4">
                    <div class="invoice-card p-4 rounded" style="background-color:#295bcc;">
                        <h2 class="text-white">Invoice</h2>
                        <hr>
                        <!-- Booking details -->
                        <div class="mb-4 text-white">
                            <h5 class="text-white">Booking Details</h5>
                            <p class="text-white">
                                <strong>Booking ID : </strong> {{ $booking->id }}<br>
                                <strong>Check-In Date : </strong> {{ $booking->checkInDate }}<br>
                                <strong>Check-Out Date : </strong> {{ $booking->checkOutDate }}<br>
                                <strong>Room Type : </strong> {{ $booking->roomType }}<br>
                            </p>
                        </div>

                        <!-- Guest information -->
                        <div class="mb-4 text-white">
                            <h5 class="text-white">Guest Information</h5>
                            <p class="text-white">
                                <strong>Nama : </strong> {{ $booking->guestName }}<br>
                                <strong>Email : </strong> {{ $booking->guestEmail }}<br>
                                <strong>No. Telepon : </strong> {{ $booking->guestPhone }}<br>
                                <strong>Jumlah Orang : </strong> {{ $booking->people }}<br>
                            </p>
                        </div>
                        <!-- Payment information -->
                        <div class="mb-4 text-white">
                            <h5 class="text-white">Payment Information</h5>
                            <p class="text-white">
                                <strong>jumlah total : </strong> Rp. {{ $booking->totalAmount }}<br>
                            </p>
                        </div>

                        <!-- Footer -->
                        <p class="text-center text-white"><em>Thank you for choosing our hotel. We look forward to your
                                stay!</em></p>
                        <div class="text-center">
                            <form action="/booking/{{ $booking->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda Yakin Ingin menghapus Pesanan Booking ini?')">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>

                            <a href="/booking/{{ $booking->id }}/edit" class="btn btn-sm btn-secondary">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a>

                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger text-center">
                    Data booking belum ada
                </div>
            @endforelse
        </div>
    </div>
@endsection
