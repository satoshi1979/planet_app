<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>更新</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('planets.update', $planet) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="name"><b>名前 </b></label><input type="text" name="name" id="name"
                value="{{ old('name', $planet->name) }}">
        </p>
        <p>
            <label for="english_name"><b>名前(英語)
                </b></label><input type="text" name="english_name" id="english_name"
                value="{{ old('english_name', $planet->english_name) }}">
        </p>
        <p>
            <label for="radius"><b>半径
                </b></label><input type="number" name="radius" id="radius"
                value="{{ old('radius', $planet->radius) }}">
        </p>
        <p>
            <label for="weight"><b>重量
                </b></label><input type="number" name="weight" id="weight"
                value="{{ old('weight', $planet->weight) }}">
        </p>
        <input type="submit" value="登録"><br>
        <a href="{{ route('planets.index') }}">戻る</a>
    </form>
</body>

</html>
