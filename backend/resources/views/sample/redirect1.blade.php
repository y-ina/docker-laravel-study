<html>
    <head>
        <title>sample</title>
    </head>
    <body>

        <form action="{{ url('sample/redirect2') }}" method="post">
            @csrf
            <div>a<input type="text" name="a" value="{{ old('a') }}"></div>
            <div>b<input type="text" name="b" value="{{ old('b') }}"></div>
            <div>c<input type="text" name="c" value="{{ old('c') }}"></div>
            <input type="submit" >
        </form>

    </body>
</html>