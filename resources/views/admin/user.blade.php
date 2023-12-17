@extends('admin/navbar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <style>
        .card {
            margin: auto;
            background-color: gray;
            width: 540px;
        }

        .img-radius {
            margin-top: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
    @forelse ($user as $item)
        @if (is_object($item))
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card-block text-center">
                                    <div class="m-b-25">
                                        <img src="{{ $item->image }}" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="text-white">{{ $item->name }}</h6>
                                    <p class="text-white">
                                        {{ $item->status }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="text-white">Information</h5>
                                    <hr>
                                    <p class="text-white">Email : {{ $item->email }}<br />
                                        Phone : {{ $item->no_telp }}<br />
                                        Umur : {{ $item->umur }} tahun<br />
                                    </p>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('user.destroy', $item->id) }}" method="POST">
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>\
        @endif
    @empty
        <div class="alert alert-danger">
            Data User belum tersedia
        </div>
        </div>
    @endforelse
    {{ $user->links() }}
@endsection
