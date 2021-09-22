<?php
$header = "Lord of The Rings App";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEACABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAADDxoAD++8QAafLQAAlCcAAxfowABTZQAFm2tAA1gmAAEaq4ABna+AAR5vgAcg8IAAkiSAC+35QAIaqYAK5XJACqh2QBL1/4AAne8ADSl3gA5tugAAVadAAd0tAAYk9AAE2isAEXE8gAlmNIAA3K6ADCf1wACVJsAIp7jAAJwuAABY6sABmCrAAtjmgAFVakAI37BAAhrpQAqpt0ARMP2ABR1sgAEZaYAAn3GAAaEywAWbbAAD3W7AEnP/gAShsUAM6HbAANzuQAKaKYAC2imAEK88gAzo94ANaPeAEK/8gACYaoAOb7tAAFHkAAwnNEAAkeQADGe3ABBxfIAN6XhAB10tgAEVJUAO6/mABBxtwADTKQADWOlAAZnswAFcbgAAV2mAB10twAJd8AACmadAARzuwAMYJUAD4TNAEfD+QARbrAAF4a/ABNusAAdjcQAEXu1AAZ4vgAHb64AKpfRAErT/gA6uuoAJpHBABFqowAHUJoABXnEAEa68gAroNkAKIjKADq87QAJYpkAA2+3AABVnQA3uOgABWanAGPR+wAVZ6wAOq3mAABDjgAMZ5wADmq9AAFTmwALe78ADWOXAEPA8wArktAAF2WqABx8vAAEZ7YAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQ9RTtdTxQAAAAAAAAAFAQNayRtc3MfEQAAAAAAIE1HIi5cB0olYQ4RAAAAFyZzTghGQXJDFWY4NQAACURMD0gZHQAAAAAAZW5ZADRXCyEMAAAAAAAAABYKWx4sEwZYAAAAAAAAABxLMlR1K0InAAAAAAAAAFIzMmNaXmdRAAAAAAAAAAEjViowAGRwUgAAAAAAUjlSVW8pAABJVxRTUlIFaS0DYBh0AAAAAGxxPzo2Pjw8EBtgAAAAAAAAEigaakA3MRRiAAAAAAAAAAACL1BoXwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//AAD8BwAA8AMAAOABAADAAQAAgPgAAIP4AAAH8AAAD+AAAB/BAAAfAwAAAAcAAIAPAADAHwAA4P8AAP//AAA=" rel="icon" type="image/x-icon" />
    <title>Lord of the rings app</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="public/assets/css/carousel.css">
    <link rel="stylesheet" href="public/assets/css/main.css">
    <link rel="stylesheet" href="public/assets/css/signin.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo $header ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $routes->get('homepage')->getPath(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('characters')->getPath() ?>">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('books')->getPath() ?>">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('movies')->getPath() ?>">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $routes->get('quotes')->getPath() ?>">Quotes</a>
                    </li>
<!--                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>-->
                </ul>
                <form class="d-flex">
                    <!--  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <a class="btn btn-outline-success auth-button" type="submit" href="<?php echo $routes->get('login')->getPath() ?>">Login</a>
                    <a class="btn btn-outline-success auth-button" type="submit" href="<?php echo $routes->get('register')->getPath() ?>">Register</a>
                    <a class="btn btn-outline-success auth-button" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>
</header>