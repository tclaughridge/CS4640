<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Thomas Laughridge & Catherine Sublett">
        <meta name="description" content="Interactive Map Feature">
        <meta name="keywords" content="uva map">

        <title>Map | WahooMaps</title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css/base.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="?command=deleteUser" method="post" id="deleteForm" class="mx-auto">
                <input type="hidden" id="delete" name="delete">
                <button type="submit" class="btn btn-danger text-center">Delete Your Account</button>
            </form>
        </div>
    </body>
</html>