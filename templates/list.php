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
    <script src="js/login.js"></script>
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
                        <a href="#">
                            <div class="row mb-2 list-item" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Click on a location to see more info">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="afc">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Aquatic and Fitness Center (AFC)</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="afc">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Astronomy Building</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Bryant hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Bryant Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Chemical engineering">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Chemical Engineering Building</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Chem building">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Chemistry Building</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Dell 1">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Dell 1</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Dell 2">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Dell 2</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Gilmer">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Gilmer Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Rice Hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Rice Hall</h4>
                                </div>
                            </div>
                        </a>
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
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Alderman Library">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Alderman Library</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Brooks hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Brooks Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Bryan hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Bryan Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Brown College">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Brown College</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Clark hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Clark Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Cobb hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Cobb Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Cocke hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Cocke Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Clemons library">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Clemons Library</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Gibson hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Gibson Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Halsey hall">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">Halsey Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="New Cabell">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">New Cabell Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Rotunda">
                                </div>
                                <div class="col-md-10 mx-md-auto">
                                    <h4 class="mt-md-5 mt-3">The Rotunda</h4>
                                </div>
                            </div>
                        </a>
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
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Bayly building">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Bayly Building</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Campbell hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Campbell Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Drama ed building">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Drama Education Building</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Fayerweather hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Fayerweather Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Ruffin hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Ruffin Hall</h4>
                                </div>
                            </div>
                        </a>
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
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Nursing School">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Claude Moore Nursing</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="Pinn Hall">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">Pinn Hall</h4>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="row mb-2 list-item">
                                <div class="col-md-2 py-2">
                                    <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                        alt="McLeod">
                                </div>
                                <div class="col-md-10">
                                    <h4 class="mt-md-5 mt-3">McLeod Hall</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JS for popover -->
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    </script>
</body>

</html>