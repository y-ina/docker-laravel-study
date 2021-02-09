<html>
    <head>
        <title>sample</title>
    </head>
    <body>

        <form action="{{ url('sample/validation2') }}" method="post">
            @csrf
            @error('sample_input')
                @foreach ($errors->get('sample_input') as $error)
                    <div style="color:red;">{{ $error }}</div>
                @endforeach
            @enderror
            <div>sample word1<input type="text" name="sample_input" value="{{ old('sample_input') }}"></div>

            @error('single_array.sample_input')
                @foreach ($errors->get('single_array.sample_input') as $error)
                    <div style="color:red;">{{ $error }}</div>
                @endforeach
            @enderror
            <div>sample word2<input type="text" name="single_array[sample_input]" value="{{ old('single_array.sample_input') }}"></div>

            @error('multi_array.0.sample_input')
                @foreach ($errors->get('multi_array.0.sample_input') as $error)
                    <div style="color:red;">{{ $error }}</div>
                @endforeach
            @enderror
            <div>sample word3<input type="text" name="multi_array[0][sample_input]" value="{{ old('multi_array.0.sample_input') }}"></div>
            <input type="submit" >
        </form>

    </body>
</html>
