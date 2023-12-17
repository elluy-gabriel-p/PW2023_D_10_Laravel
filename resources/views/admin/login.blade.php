<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="{{ asset('img/imperial_logo.png') }}">
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
            background: gray;
        }

        .btn-outline-success {
            color: gray;
            border-color: gray;
        }

        .isi {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
        }

        .wrapper {
            position: relative;
            width: 400px;
            height: 375px;
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
            color: gray;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .btn-success {
            width: 100%;
            padding: 10px 0;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            outline: none;
            background-color: gray;
        }

        .bi {
            position: absolute;
            margin-left: 250px;
            margin-top: -40px;
            cursor: pointer;
        }
    </style>
    <div class="isi">
        <div class="wrapper">
            <div class="form-box login">
                <h1>Login</h1>
                <form class="row g-3 needs-validation" novalidate action="{{ asset('/dashboard') }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <div class="form-floating text-muted">
                            <input type="text" class="form-control" id="InputUsername1"
                                placeholder="Masukkan Username" required />
                            <label class="form-label" style="font-weight: bold" for="InputUsername1">Username</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                        <div class="form-floating text-muted">
                            <input type="password" class="form-control" id="InputPassword1"
                                placeholder="Masukkan Password" required />
                            <i id="togglePassword" class="bi bi-eye-slash"></i>
                            <label for="InputPassword1" class="form-label" style="font-weight: bold">Password</label>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>

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
