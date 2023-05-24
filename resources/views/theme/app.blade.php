<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        @media (min-width: 992px) {
            .max-width-answer {
                max-width: 220px !important;
            }

        }

        @media (min-width: 991) {
            .jumbotron {
                padding: 2rem 2rem;
            }

        }

        .lg-long-p {
            max-width: 45%;
        }

        .hero {
            position: relative;
            height: calc(100vh - 56px);
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero::before {
            content: "";
            filter: blur(2px);
            background-image: url('https://i.ibb.co/vHMbs9Y/workspace-1280538-1280.jpg');
            background-size: cover;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 1;
            border: none;
            outline: none;
        }

        h1 {
            position: relative;
            color: #ffffff;
            font-size: 14rem;
            line-height: 0.9;
        }

        p {
            position: relative;
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Proyecto Throwback</a>
            <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div style="flex-grow: 0!important;" class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('student.create') }}">Datos
                            Generales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Auto-eficacia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pertenencia</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>

</body>

</html>
