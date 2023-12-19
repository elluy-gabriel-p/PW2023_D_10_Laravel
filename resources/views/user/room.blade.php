@extends('user/navbar')

@section('content')
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            /* background-color: #fff; */
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            margin: 8px 8px;
            padding: 8px 8px;
            background-image: url('https://mediastore.hotelcontent.net/7ee9523abe7e5e4977e6caacb066ee21/79521cdea3eff83/f0b94dd7bd081e8f24b4fc5576ce6f2a.jpg');
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem
        }

        .card-title {
            float: left;
            font-size: 1.1rem;
            font-weight: 400;
            margin: 0;
            margin-bottom: .75rem;
        }

        .preview-box {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin: 10px 10px;
            padding: 10px;
            border-radius: .25rem;
        }

        .preview-content {
            padding: 12px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
            gap: 16px;
        }

        .btn-ulas {
            padding: 0 15px;
            color: white;
            border: 2px solid white;
            background-color: transparent;
            text-decoration: none;
            font-size: 24px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-ulas:hover {
            padding: 0 15px;
            color: black;
            border-color: white;
            background-color: white;
            text-decoration: none;
        }

        .btn-booking {
            padding: 0 15px;
            color: white;
            background-color: #3469c2;
            border: 2px solid #3469c2;
            text-decoration: none;
            font-size: 24px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-booking:hover {
            background-color: #5c96e2;
            border: 2px solid #5c96e2;
            color: white;
        }

        .click {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: row;
            gap: 16px;
        }
    </style>

    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>KAMAR</h2>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($room as $item)
                    <div class="col-lg-5 card">
                        <div class="preview-box">
                            <div class="preview-content">
                                <p class="text-white" style="text-decoration: none; font-size: 36px">{{ $item->jenis }}</p>
                                <p class="text-white" style="font-size: 24px">AVALAIBLE FROM Rp. {{ $item->harga }}</p>
                                <p class="text-white" style="text-decoration: none;">{{ $item->fasilitas }}</p>
                                <div class="click">
                                    <a href="/review" class="btn-ulas">REVIEW</a>
                                    <a class="btn-booking" href="/booking/create" role="button">
                                        BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">
                        Belum Ada kamar yang tersedia
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
