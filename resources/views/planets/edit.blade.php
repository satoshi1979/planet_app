<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>更新</h1>
    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title"><b>名前 </b></label><input type="text" name="name" id="name">
        </p>
        <p>
            <label for="body"><b>名前(英語) </b></label><input type="text" name="english_name" id="english_name">
        </p>
        <p>
            <label for="body"><b>半径 </b></label><input type="number" name="radius" id="radius">
        </p>
        <p>
            <label for="body"><b>重量 </b></label><input type="number" name="weight" id="weight">
        </p>
        <input type="submit" value="登録"><br>
        <a href="{{ route('planets.show', $planet) }}">戻る</a>
    </form>
</body>

</html>
