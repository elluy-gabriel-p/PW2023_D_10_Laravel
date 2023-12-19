@extends('user/navbar')

@section('content')
    <style>
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 12px;
            padding: 24px 24px;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            box-shadow: inset 0 0 0 transparent;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .btn-batal {
            padding: 8px 12px;
            color: white;
            border-radius: 8px;
            background-color: #1f4a72;
            text-decoration: none;
            font-size: 20px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-batal:hover {
            color: white;
            background-color: #3469c2;
            text-decoration: none;
        }

        .btn-kirim {
            padding: 8px 12px;
            color: white;
            border-radius: 8px;
            background-color: #3469c2;
            text-decoration: none;
            font-size: 20px;
            transition: border-color 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn-kirim:hover {
            color: white;
            background-color: #3e99d0;
            text-decoration: none;
        }

        .click {
            display: flex;
            flex-direction: row;
            gap: 8px;
            justify-content: flex-end;
            align-items: center;
        }
    </style>

    <div class="page-top">
        <div class="bg"></div>
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
                <div class="card col-md-6">
                    <form method="post" action="/review" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="reviewerName">Nama</label>
                            <input class="form-control" type="text" name="reviewerName" id="reviewerName" required>
                        </div>
                        <div class="form-group">
                            <label>Nilai (1-5)</label><br>
                            @for ($i = 1; $i <= 5; $i++)
                                <input type="radio" id="rating{{ $i }}" name="rating"
                                    value="{{ $i }}" required>
                                <label for="rating{{ $i }}">{{ $i }}</label>
                            @endfor
                        </div>
                        <div class="form-group">
                            <label for="comment">Komentar</label>
                            <textarea class="form-control" rows="12" name="comment" id="comment" required></textarea>
                        </div>
                        <div class="click">
                            <a href="/review" class="btn btn-batal">Batal</a>
                            <button class="btn btn-kirim" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
