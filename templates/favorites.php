<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Thomas Laughridge & Catherine Sublett">
    <meta name="description" content="Favorite Locations">
    <meta name="keywords" content="user favorite locations">

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
</head>
<body>
    <div class="container">
    <?php if (isset($data[0])) {
            foreach ($data[0] as $location) { ?>
                <a href="#">
                    <div class="row mb-2 list-item">
                        <div class="col-md-2 py-2">
                            <img src="images/thumbnails/afc.jpeg" class="thumbnail img-fluid rounded-3"
                                alt="<?= $location["name"] ?>">
                        </div>
                        <div class="col-md-10">
                            <h4 class="mt-md-5 mt-3">
                                <?= $location["name"] ?>
                            </h4>
                        </div>
                    </div>
                </a>
            <?php }
        } ?>
    </div>
</body>

</html>