<!DOCTYPE html>

<?php
$imageLogo = 'https://bitbucket.org/chocoalain/online-files/raw/331a758d4cb12ca0c85e538381674bc3580e4498/1563190816830.png';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <title>@yield('title', 'Register')</title>
    @yield('style')
</head>

<body>
    <div class="centered-container">
        <div class="container ">
            <div class="text-center" style="margin-top: 50px">
                <img class="d-block mx-auto mb-2" src="<?php echo $imageLogo; ?>" alt="" width="100"
                    height="100">
                <h2 class="text-light ">@yield('title')</h2>
                <p class="lead text-light regFormText">@yield('textContent')</p>
            </div>
            <div class="row justify-content-md-center">
                @yield('content')
            </div>
        </div>
    </div>
    @include('background')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
<footer class="text-muted text-center text-small fixed-bottom">
    <p class="mb-1 text-light">© 2019–2023 HanzPh</p>
</footer>

</html>
