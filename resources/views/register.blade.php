<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>

    {{-------------- css --------------}}
    <link rel="stylesheet" href="assets/css/loginRegister.css">
</head>

<body>
    <section class="form-login-register">
        <div class="form">
            <div class="welcome">
                <span>Hello, </span>
                <span>Welcome</span>

                <p>Selamat Datang di Sahabat Karir, Daftar yuk!</p>
            </div>

            <form action="">
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Masukkan Username" autocomplete="off">
                    </li>

                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Masukkan Email" autocomplete="off">
                    </li>

                    <li>
                        <label for="password">Password</label>

                        <div class="__mata">
                            <input type="password" id="password" placeholder="Masukkan Password" autocomplete="off">

                            <div class="mata hidden">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                    </li>

                    <li>
                        <label for="confirm">Confirm Password</label>

                        <div class="__mata">
                            <input type="password" id="confirm" placeholder="Masukkan Password" autocomplete="off">

                            <div class="mata hidden">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                    </li>

                    <li class="tombol">
                        <button type="submit">Sign Up</button>
                    </li>

                    <li class="daftar-sekarang">
                        <span>Sudah punya akun?</span>
                        <a href="">Login Sekarang</a>
                    </li>
                </ul>
            </form>
        </div>

        <div class="gambar-vektor">
            <img src="assets/img/login-register/register.png" alt="sahabat karir">
        </div>
    </section>
</body>

{{-------------- font awesome --------------}}
<script src="https://kit.fontawesome.com/02db274a60.js" crossorigin="anonymous"></script>

{{-------------- js --------------}}
<script src="assets/js/loginRegister.js"></script>

</html>