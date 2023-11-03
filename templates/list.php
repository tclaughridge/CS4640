<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Thomas Laughridge & Catherine Sublett">
    <meta name="description" content="List Feature">
    <meta name="keywords" content="uva building list">

    <title>List | WahooMaps</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/list.css" rel="stylesheet">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>
    <!-- Main Body Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg"></div>
            <div class="col-lg"></div>
            <div class="col-lg">
                <!-- Search Form -->
                <form class="d-flex mt-5 mb-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
        <!-- Accordion -->
        <div class="accordion mb-5" id="accordionExample">
            <!-- Dorms/E-Way -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Dorms / Engineers Way
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php if(isset($data[0])) { foreach($data[0] as $location) { ?>
                            <a href="#">
                                <div class="row mb-2 list-item">
                                    <div class="col-md-2 py-2">
                                        <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3" alt="<?= $location["name"] ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="mt-md-5 mt-3"><?= $location["name"] ?></h4>
                                    </div>
                                    <div class="col">
                                        <form action="?command=manageFavorites" method="post">
                                            <input type="hidden" id="<?= $location["name"] ?>" name="location">
                                            <button type="submit" class="btn btn-outline-warning favorite-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33
                                                    -.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 
                                                    3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 
                                                    2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        <?php } } ?>   
                    </div>
                </div>
            </div>

            <!-- Central Grounds -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Central Grounds
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php if(isset($data[1])) { foreach($data[1] as $location) { ?>
                            <a href="#">
                                <div class="row mb-2 list-item">
                                    <div class="col-md-2 py-2">
                                        <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3" alt="<?= $location["name"] ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="mt-md-5 mt-3"><?= $location["name"] ?></h4>
                                    </div>
                                </div>
                            </a>
                        <?php } } ?>
                    </div>
                </div>
            </div>

            <!-- Arts Grounds -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Arts Grounds
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php if(isset($data[2])) { foreach($data[2] as $location) { ?>
                            <a href="#">
                                <div class="row mb-2 list-item">
                                    <div class="col-md-2 py-2">
                                        <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3" alt="<?= $location["name"] ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="mt-md-5 mt-3"><?= $location["name"] ?></h4>
                                    </div>
                                </div>
                            </a>
                        <?php } } ?>
                    </div>
                </div>
            </div>

            <!-- UVA Health -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        UVA Health
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php if(isset($data[3])) { foreach($data[3] as $location) { ?>
                            <a href="#">
                                <div class="row mb-2 list-item">
                                    <div class="col-md-2 py-2">
                                        <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3" alt="<?= $location["name"] ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <h4 class="mt-md-5 mt-3"><?= $location["name"] ?></h4>
                                    </div>
                                </div>
                            </a>
                        <?php } } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>