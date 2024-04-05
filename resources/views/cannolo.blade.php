<!DOCTYPE html>
<html lang="it-IT" lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cannoli</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <header class="bg-secondary">

        <div class="container d-flex justify-content-between align-items-center py-5">

            <h1>
                <a class="text-decoration-none text-dark" href="{{route('home')}}">LOGO</a>
            </h1>

            <ul class="list-unstyled d-flex align-items-center gap-5 m-0">

                <li>
                    <a class="text-decoration-none text-white" href="{{route('home')}}">HOME</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{route('gelato')}}">GELATO</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{route('cioccolato')}}">CIOCCOLATO</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{route('cannolo')}}">CANNOLO</a>
                </li>
                <li>
                    <a class="text-decoration-none text-white" href="{{route('ravazzatina')}}">RAVAZZATINA</a>
                </li>

            </ul>

        </div>

    </header>
    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>