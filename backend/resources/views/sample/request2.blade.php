<html>
    <head>
        <title>sample</title>
    </head>
    <body>

        <form action="{{ url('sample/request2') }}?a=q_a&b=q_b&c=q_c" method="post">
            @csrf
            <div>a<input type="text" name="a" value="{{ old('a') }}"></div>
            <div>b<input type="text" name="b" value="{{ old('b') }}"></div>
            <div>c<input type="text" name="c" value="{{ old('c') }}"></div>
            <input type="submit" >
        </form>

        <div>get:{{$get}}</div>
        <div>input:{{$input}}</div>
        <div>request_get:{{$request_get}}</div>
        <div>query_get:{{$query_get}}</div>
        <div>query:{{$query}}</div>
        <div>all:{{$all}}</div>
        <div>only:{{$only}}</div>
        <div>except:{{$except}}</div>

    </body>
</html>