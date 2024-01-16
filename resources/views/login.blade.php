<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA Compitable" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
        <link rel="icon" href="img/loginlogo.jpg" type="image/x-icon">
        <link href="https://unpkg.com/boxicon@2.1.4/css/boxicons.min.css" rel="stylesheet">
        
       <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
        @push('css')
            <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
        @endpush
        

    </head>
    <body>
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required  >
                    <i class="bx bxs-user"></i>
                </div>

                <div class="input-box">
                    <input type="Password" placeholder="Password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox"> Ingat Saya? </label>
                    <a href="/forget">Lupa Password</a>
                </div>

                <div class="register-link">
                    <p>Silahkan <a href='/register'>Register</a> jika belum memiliki akun</p>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <script src="../js/script.js"></script>
    </body>
</html>