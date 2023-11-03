<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Thomas Laughridge & Catherine Sublett">
        <meta name="description" content="Navbar">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css/base.css" rel="stylesheet">

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <title>Sign Up | WahooMaps</title>
    </head>
    <body>
        <div class="container p-3">
            <div><?= $message ?></div>
            <div class="bg-light rounded-3 my-5 responsive-width mx-auto">
                <h3 class="fw-bold text-center text-primary pt-4 my-4">Create Your Account</h3>
                <form action="?command=signup" method="post" id="signupForm" class="my-4 px-5 pb-5">
                    <div class="mb-3">
                        <label for="text" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div class="invalid-feedback">Please enter a username</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwd" name="passwd" required>
                        <div id="passwordHelp" class="form-text">Password must contain at least one number, one uppercase letter, one lowercase letter, and one special character.</div>
                        <div class="invalid-feedback">Please enter a password.</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary button-primary text-center w-100">Create your account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>