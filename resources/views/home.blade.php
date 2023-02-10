<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)  
                <div class="col-4 py-4">
                    <div class="card">
                        <div class="card-header">
                            {{$train->company}}
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{$train->departure_station}}
                            </p>
                            <h5 class="text-warning">
                                {{$train->arrivals_station}}
                            </h5>
                            <p>
                                {{$train->departure_time}}
                            </p>
                            <p>
                                {{$train->train_code}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
