@extends('user/navbar')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            margin: 8px 8px;
            padding: 8px 8px;
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

        .review-box {
            /* background: rgba(0, 0, 0, 0.3); */
            margin: 10px 10px;
            padding: 10px;
            border-radius: .25rem;
        }

        .review-content {
            padding: 12px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: column;
            gap: 16px;
        }

        .stars {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            flex-direction: row;
            gap: 4px;
            margin-bottom: 8px
        }

        .click {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 24px 0;
        }

        .btn-review {
            padding: 8px 12px;
            color: white;
            background-color: #3469c2;
            border-radius: 8px;
            text-decoration: none;
            font-size: 24px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-review:hover {
            background-color: #5c96e2;
            color: white;
        }

        .checked {
            color: orange;
        }

        .edit-delete-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 16px;
        }

        .btn-edit,
        .btn-delete {
            color: #555;
            font-size: 18px;
            margin: 0 8px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit:hover,
        .btn-delete:hover {
            color: #3469c2;
        }
    </style>

    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>REVIEW</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 card">
                    <h2 class="text-center">{{ $kamar->jenis }}</h2>
                    <img src="{{ url('images/kamar') . '/' . $kamar->image }}" alt="Image Description">
                    <h4 class="text-center">{{ $kamar->fasilitas }}</h5>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <h2 class="text-center">REVIEW</h2>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="click">
                        <a href="/review/{{ $kamar->id }}/create" class="btn-review">BUAT ULASAN</a>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @forelse ($reviews as $review)
                        <div class="col-lg-12 card">
                            <div class="review-box">
                                <div class="review-content text-center">
                                    <p style="font-size: 24px">{{ $review->reviewerName }}</p>
                                    <div class="stars">
                                        @for ($i = 1; $i <= $review->rating; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                    <p style="font-size: 16px">{{ $review->comment }}</p>
                                    @auth
                                        @if ($review->user_id == auth()->user()->id)
                                            <div class="edit-delete-buttons">
                                                <a href="/review/{{ $review->id }}/edit" class="btn btn-edit">
                                                    <i class="fa fa-pencil"></i> Edit</a>
                                                <form action="/review/{{ $review->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-delete"
                                                        onclick="return confirm('Apakah Anda Yakin Ingin menghapus review ini?')">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Belum ada review
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    @endsection
