<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- Sistem Informasi Manajemen Perpustakaan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h1 class="display-3 text-center">Please sign in</h1>
                <p class="display-6 text-center">Sistem Informasi Manajemen Pengembalian</p>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form action="login.php" method="post" class="mx-5">
                    <div class="form-floating">
                        <input type="text" class="form-control " name="user" id="user" placeholder="Username">
                        <label for="user">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control " name="pass" id="pass" placeholder="Password">
                        <label for="pass">Password</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input class="form-check-label" 
                         type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" name="submit" value="submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-center text-body-secondary"> copyright &copy; <?=date('Y') ?></p>
                </form>
            </div>
        </div>

    </div>
</body>
</html>