<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Not Found</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <style>
        .err-desc, .text-2 a {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>
</head>
<body style="max-height: 100vh">
    <div class="container text-center">
        <div class="text-1" style="margin-top: -13rem">
            <span style="font-size: 40rem">4</span>
            <img src="{{ asset('images/0_in 404.png') }}" style="margin-top: -25rem">
            <span style="font-size: 40rem">4</span>
        </div>

        <div class="text-2" style="margin-top: -13rem">
            <strong style="font-size: 3rem">Whoops, Nothing delicious to find here!</strong>
            <p style="color: #555555; font-size: 20px" class="err-desc">The page you are looking for doesn't exist or has been moved.</p>

            <a href="{{ route('home') }}" class="btn px-4 fs-4 py-3 mt-4" style="background-color: #E1B168; color: #292E36; border-radius: 0">Back to Home</a>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>