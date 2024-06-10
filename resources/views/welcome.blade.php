<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- including vite assets --}}
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <div class="row">
            @foreach ($movies as $movie)        
            <div class="col-3 py-3 text-center text-white">
                <div class="bg-black pb-3">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body pt-2">
                        <h5 class="card-title">{{ $movie->original_title }}</h5>
                        <div>"{{ $movie->title }}"</div>
                        <div class="card-text">{{ $movie->nationality }}</div>
                        <div>{{ $movie->date }}</div>
                        @for ($i = 0; $i < 5; $i++)
                            <span><i class="fa-{{ intval($movie->vote / 2) <= $i ? 'regular' : 'solid' }} fa-star text-warning"></i>
                        @endfor
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
