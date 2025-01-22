<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>
    <form action="{{ route('planets.store') }}" method="post">
        @csrf
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
        <input type="submit" value="登録">
    </form>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>

</html>
