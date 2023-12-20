@extends('admin/navbar')
@section('content')
    <style>
        .form-box {
            width: 100%;
            padding: 40px;
        }

        .bi {
            position: absolute;
            margin-left: 500px;
            margin-top: -40px;
            cursor: pointer;
        }

        .button-container {
            display: flex;
            gap: 10px;
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="isi bg-secondary">
        <div class="wrapper">
            <div class="form-box Edit">
                <form class="row g-3 needs-validation" novalidate ction="{{ route('user.update', $user->id) }}" method="POST"
                    enctype="multipart/form-data">
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
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon6"><i class="fa-solid fa-user-xmark"></i>
                            </span>
                            <div class="form-floating text-muted">
                                <select class="form-control" id="InputStatus1" placeholder="Masukkan Status"
                                    rvalue="{{ old('status', $user->status) }}" name="status" required />
                                <option disabled selected>Choose...</option>
                                <option value="User">User</option>
                                <option value="Admin">Admin</option>
                                </select>
                                <label class="form-label" style="font-weight: bold" for="InputFoto1">Status</label>
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
