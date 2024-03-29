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
        <link href="css/nav.css" rel="stylesheet">

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand logo" href="?command=home">
                    <img src="images/logo-stroke.png" alt="logo" width="30" height="30">
                    WahooMaps
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Navigation Left -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <?php if (isset($this->input["command"])) { 
                            if ($this->input["command"] == "home" || $this->input["command"] == "login") { ?>
                                <a class="nav-link active" href="?command=home">Home</a>
                            <?php } else { ?>
                                <a class="nav-link" href="?command=home">Home</a>
                            <?php }} else { ?>
                                <a class="nav-link active" href="?command=home">Home</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($this->input["command"])) { 
                            if ($this->input["command"] == "map") { ?>
                                <a class="nav-link active" href="?command=map">Map</a>
                            <?php } else { ?>
                                <a class="nav-link" href="?command=map">Map</a>
                            <?php }} else { ?>
                                <a class="nav-link" href="?command=map">Map</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($this->input["command"])) { 
                            if ($this->input["command"] == "list") { ?>
                                <a class="nav-link active" href="?command=list">List</a>
                            <?php } else { ?>
                                <a class="nav-link" href="?command=list">List</a>
                            <?php }} else { ?>
                                <a class="nav-link" href="?command=list">List</a>
                            <?php } ?>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($this->input["command"])) { 
                            if ($this->input["command"] == "about") { ?>
                                <a class="nav-link active" href="?command=about">About</a>
                            <?php } else { ?>
                                <a class="nav-link" href="?command=about">About</a>
                            <?php }} else { ?>
                                <a class="nav-link" href="?command=about">About</a>
                            <?php } ?>
                        </li>
                    </ul>
                    <!-- Login / Username Display-->
                    <ul class="navbar-nav d-flex">
                        <?php if (isset($_SESSION["signedin"]) && $_SESSION["signedin"]) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION["username"] ?></a>
                                <ul class="dropdown-menu" data-bs-theme="light">
                                    <li><a class="dropdown-item" href="#">Saved Locations</a></li>
                                    <li><a class="dropdown-item" href="?command=profile">My Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="?command=logout">Log Out</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item" id="loginButtonContainer">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header background-primary">
                        <h5 class="modal-title text-white" id="loginModalLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= $message ?>
                        <form action="?command=login" method="post" id="loginForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required 
                                <?php if(isset($_COOKIE["email_cookie"])) { ?> value="<?= $_COOKIE["email_cookie"] ?> " <?php } ?>>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwd" name="passwd" required>
                                <div class="invalid-feedback">Please enter a password.</div>
                            </div>
                            <div class="row">
                                <div class="col mt-1">
                                    <div id="signup" class="form-text text-left">Don't have an account? <a href="?command=signup" style="text-decoration: none;">Sign Up</a></div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary button-primary float-end" id="loginButton">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prevents modal close until validation occurs -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var emailInput = document.getElementById('email');
                var passwordInput = document.getElementById('passwd');
                var loginButton = document.getElementById('loginButton');
                var loginForm = document.getElementById('loginForm');

                function validateFields() {
                    if (emailInput.validity.valid && passwordInput.validity.valid) {
                        loginButton.setAttribute('data-bs-dismiss', 'modal');
                    } else {
                        loginButton.removeAttribute('data-bs-dismiss');
                    }
                }

                emailInput.addEventListener('input', validateFields);
                passwordInput.addEventListener('input', validateFields);

                loginForm.addEventListener('submit', function (event) {
                    if (loginForm.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    loginForm.classList.add('was-validated');
                });
            });
        </script>
    </body>
</html>