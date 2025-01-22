<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
</head>

<body>
    <h1>惑星情報登録</h1>

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



    <form action="{{ route('planets.store') }}" method="post">
        @csrf
        <p>
            <label for="name"><b>名前 </b></label><input type="text" name="name" id="name"
                value="{{ old('name') }}">
        </p>
        <p>
            <label for="english_name"><b>名前(英語)
                </b></label><input type="text" name="english_name" id="english_name"
                value="{{ old('english_name') }}">
        </p>
        <p>
            <label for="radius"><b>半径
                </b></label><input type="number" name="radius" id="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="weight"><b>重量
                </b></label><input type="number" name="weight" id="weight" value="{{ old('weight') }}">
        </p>
        <input type="submit" value="登録">
    </form>
    <a href="{{ route('planets.index') }}">戻る</a>
</body>

</html>
