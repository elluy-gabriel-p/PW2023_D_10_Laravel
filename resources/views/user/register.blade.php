<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="{{ asset('img/IMPERIAL LOGO.png') }}">
</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #3e99d0;
            height: 100%;
        }

        .btn-outline-success {
            color: #3e99d0;
            border-color: #3e99d0;
        }

        .isi {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 150vh;
            background-size: cover;
        }

        .imperial-logo {
            position: absolute;
            width: 10rem;
            height: 10rem;
            top: 25px;
            left: 50%;
            transform: translate(-50%);
        }

        .wrapper {
            position: relative;
            width: 60%;
            height: 550px;
            background: white;
            border-radius: 10px;
        }

        .form-box {
            width: 100%;
            padding: 40px;
        }

        .form-box h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #3e99d0;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .punyaAkun {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .punyaAkun a {
            text-decoration: none;
            color: #3e99d0;
        }

        .punyaAkun a:hover {
            text-decoration: underline;
        }

        .btn-primary {
            width: 100%;
            padding: 10px 0;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            outline: none;
            background-color: #3e99d0;
        }

        .bi {
            position: absolute;
            margin-left: 300px;
            margin-top: -40px;
            cursor: pointer;
        }
    </style>
    <div class="isi">
        <div class="logo-container">
            <a href="{{ asset('/') }}">
                <img src="{{ asset('img/IMPERIAL LOGO.png') }}" alt="Logo" class="imperial-logo">
            </a>
        </div>
        <div class="wrapper">
            <div class="form-box Registration">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <h1>Register</h1>
                <hr>
                <form class="row g-3 needs-validation" action="{{ route('actionRegister') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                            <div class="form-floating text-muted">
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email"
                                    name="email" value="{{ old('email') }}" required />
                                <label class="form-label" style="font-weight: bold" for="email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="fa-solid fa-phone"></i></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="no_telp"
                                    placeholder="Masukkan No Telepon" name="no_telp" value="{{ old('no_telp') }}"
                                    required />
                                <label class="form-label" style="font-weight: bold" for="no_telp">No.
                                    Telepon</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                            <div class="form-floating text-muted">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukkan Password" name="password" value="{{ old('password') }}"
                                    required />
                                <i id="togglePassword" class="bi bi-eye-slash"></i>
                                <label for="password" class="form-label" style="font-weight: bold">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><i
                                    class="fa-solid fa-person-falling"></i></span>
                            <div class="form-floating text-muted">
                                <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur"
                                    name="umur" value="{{ old('umur') }}" required />
                                <label class="form-label" style="font-weight: bold" for="umur">Umur</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text @error('image') is-invalid @enderror" id="basic-addon5"><i
                                    class="fa-solid fa-image"></i></span>
                            <div class="form-floating text-muted">
                                <input type="file" class="form-control" id="image"
                                    placeholder="Masukkan Foto Profile" name="image" value="{{ old('image') }}" />
                                <label class="form-label" style="font-weight: bold" for="image">Foto
                                    Profile</label>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon4"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating text-muted">
                                <input type="text" class="form-control" id="name"
                                    placeholder="Masukkan Nama" name="name"
                                    value="{{ old('name') }}"required />
                                <label class="form-label" style="font-weight: bold" for="name">Nama</label>
                            </div>
                        </div>
                    </div>
                    <div class="punyaAkun">
                        <p class="mb-0">Punya Akun ?
                            <a href="{{ route('login') }}" class="forgot-password">Login</a>
                        </p>
                    </div>
                    <button class="btn btn-primary" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

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
</body>

</html>
