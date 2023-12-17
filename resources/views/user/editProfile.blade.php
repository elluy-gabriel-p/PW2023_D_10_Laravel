@extends('user/navbar')

@section('content')
    <style>
        .btn-outline-success {
            color: #3e99d0;
            border-color: #3e99d0;
        }

        .form-box {
            width: 100%;
            padding: 40px;
        }

        .bi {
            position: absolute;
            margin-left: 725px;
            margin-top: -40px;
            cursor: pointer;
        }

        .button-container {
            display: flex;
            gap: 10px;
        }
    </style>
    <div class="page-top">
        <div class="bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>EDIT PROFILE</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="isi">
        <div class="wrapper">
            <div class="form-box Edit">
                <form class="row g-3 needs-validation" novalidate ction="{{ route('profile.update', $user->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="email" class="form-control" id="InputEmail1" name="email"
                                    placeholder="Masukkan Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                    value="{{ old('email', $user->email) }}" required />
                                <label class="form-label" style="font-weight: bold" for="InputEmail1">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-phone"></i></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="InputPhone1" name="no_telp"
                                    placeholder="Masukkan No Telepon" value="{{ old('no_telp', $user->no_telp) }}"
                                    required />
                                <label class="form-label" style="font-weight: bold" for="InputPhone1">No.
                                    Telepon</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="password" class="form-control" id="InputPassword1" name="password"
                                    placeholder="Masukkan Password" value="{{ old('password', $user->password) }}"
                                    required />
                                <i id="togglePassword" class="bi bi-eye-slash"></i>
                                <label for="InputPassword1" class="form-label" style="font-weight: bold">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><i
                                    class="fa-solid fa-person-falling"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="InputUmur1" name="umur"
                                    placeholder="Masukkan Umur" value="{{ old('umur', $user->umur) }}" required />
                                <label class="form-label" style="font-weight: bold" for="InputUmur1">Umur</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon5"><i class="fa-solid fa-image"></i></span>
                            <div class="form-floating text-muted">
                                <input type="file" class="form-control" id="InputFoto1" name="image"
                                    placeholder="Masukkan Foto Profile" value="{{ old('image', $user->image) }}" required />
                                <label class="form-label" style="font-weight: bold" for="InputFoto1">Foto
                                    Profile</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" id="InputNama1" name="name"
                                    placeholder="Masukkan nama" value="{{ old('name', $user->name) }}" required />
                                <label for="InputPassword1" class="form-label" style="font-weight: bold">Nama</label>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="{{ asset('/user') }}" type="button" class="btn btn-danger"><i
                                class="fa-regular fa-trash-can"></i>
                            Cancel</a>
                        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i>
                            Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const password = document.querySelector("#InputPassword1");
        const togglePassword = document.querySelector("#togglePassword");

        togglePassword.style.display = "none";

        password.addEventListener("input", function() {
            if (password.value.trim() !== "") {
                togglePassword.style.display = "block";
            } else {
                togglePassword.style.display = "none";
            }
        });

        togglePassword.addEventListener("click", function() {
            const type =
                password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            this.classList.toggle("bi-eye");
        });
    </script>
@endsection
