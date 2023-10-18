<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light p-3">
        <div class="container">
            <a class="navbar-brand text-light" href="#">
                <img src="assets/img/logo.png" alt="" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold me-5" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5" href="kajian.html">Kajian</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control-sm me-2 small-placeholder" type="search" placeholder="Search"
                        aria-label="Search">
                    <img src="assets/img/search.png" alt="" class="me-3" width="30px" height="30px">
                </form>

                <div class="d-flex akun">
                    <button class="sign-up me-3 fw-bolder" type="submit">
                        Sign Up
                    </button>
                    <button class="sign-in fw-bolder me-3" type="submit">
                        Sign In
                    </button>
                </div>
            </div>
        </div>
    </nav>