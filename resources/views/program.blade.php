<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html,body {
            height:100%;
            margin:0;
            background: #ffffff;
        }
        header {
            background-image: url('https://bucket.mlcdn.com/a/1332/1332954/images/90fc913d170f7b48683cb4a15b1b6f5ac70c2583.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        h1 {
            font-size: 72px;
            color: #ffffff;
            font-weight: bold;
        }
    </style>

</head>
<body>
<header class="h-25 d-flex justify-content-center p-5">
    <h1 class="text-center p-3 align-self-center">4 Days sport program</h1>
</header>
<section class="container-fluid">
    <div class="container">
        <div class="row p-5">
            <div class="col-4">
                <img src="https://bucket.mlcdn.com/a/1332/1332954/images/b3775874dff84aad3209ed980cc0404308085070.jpeg" class="rounded-circle" width="100%">
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="info align-self-center">
                    <h2 class="align-self-center">{{ $name }}</h2>
                    <p>{{ $activity }}</p>
                    <p>{{ $hobbies }}</p>
                </div>

            </div>
        </div>
        <div class="row p-5">
            <div class="col">
                <h2>Day 1</h2>
                <ul class="list-group">

                    @forelse ($day1 as $day1)
                        <li class="list-group-item"> {{$day1}} </li>

                    @empty

                        <li>Rest</li>

                    @endforelse

                </ul>
            </div>
            <div class="col">
                <h2>Day 2</h2>
                <ul class="list-group">

                    @forelse ($day2 as $day2)
                        <li class="list-group-item"> {{$day2}} </li>

                    @empty

                        <li>Rest</li>

                    @endforelse

                </ul>
            </div>
            <div class="col">
                <h2>Day 3</h2>
                <ul class="list-group">

                    @forelse ($day3 as $day3)
                        <li class="list-group-item"> {{$day3}} </li>

                    @empty

                        <li>Rest</li>

                    @endforelse

                </ul>
            </div>
            <div class="col">
                <h2>Day 4</h2>
                <ul class="list-group">

                    @forelse ($day4 as $day4)
                        <li class="list-group-item"> {{$day4}} </li>

                    @empty

                        <li>Rest</li>

                    @endforelse

                </ul>
            </div>
        </div>
    </div>
</section>
</body>
</html>
