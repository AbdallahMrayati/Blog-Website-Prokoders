<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #4a4b4b;
        }

        .navbar-brand,
        .nav-link,
        .footer {
            color: white !important;
        }

        .footer {
            background-color: #4a4b4b;
            text-align: center;
            padding: 10px;
        }

        .blog-title {
            color: #4a4b4b;
        }

        .card {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    @include('layouts.inc.user.nav')

    @include('flashMessage')
    @yield('content')

    {{-- <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">© 2023 My Blog. All Rights Reserved.</p>
        </div>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
