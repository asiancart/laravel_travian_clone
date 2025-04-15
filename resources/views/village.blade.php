<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>{{ $village->name }}</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; padding: 20px; }
        .container { display: flex; gap: 20px; flex-wrap: wrap; }
        .building {
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 10px;
            width: 150px;
            background: white;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .building img {
            width: 64px;
            height: 64px;
        }
    </style>
</head>
<body>
    <h1>{{ $village->name }}</h1>
    <p>Location: ({{ $village->x }}, {{ $village->y }})</p>

    <h2>Sources</h2>
    <div class="container">
        <div class="building">
            <img src="/images/wood.jpg" alt="Odun">
            <p>Wood: {{ $village->resource->wood }}</p>
        </div>
        <div class="building">
            <img src="/images/clay.jpg" alt="Kil">
            <p>Clay: {{ $village->resource->clay }}</p>
        </div>
        <div class="building">
            <img src="/images/iron.jpg" alt="Demir">
            <p>Iron: {{ $village->resource->iron }}</p>
        </div>
        <div class="building">
            <img src="/images/crop.jpg" alt="Tahıl">
            <p>Crop: {{ $village->resource->crop }}</p>
        </div>
    </div>

    <h2>Buildings</h2>
    <div class="container">
        @foreach ($village->buildings as $building)
            <div class="building">
                <img src="/images/{{ strtolower($building->type) }}.jpg" alt="{{ $building->type }}">
                <p>{{ $building->type }} <br> Level {{ $building->level }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
