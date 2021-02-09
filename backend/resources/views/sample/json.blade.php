<html>
    <head>
        <title>sample</title>
        <script type="text/javascript">
            function ajax(){
                var form = document.getElementById("sampleForm");
                var req = new XMLHttpRequest();
                req.open(form.method, form.action);
                req.responseType = 'json';
                req.send(new FormData(form));
                req.onload = function () {
                    var json = req.response;
                    alert("a:" + json['a'] + "\n" + "b:" + json['b']);
                }
            }
        </script>
    </head>
    <body>

        <form id="sampleForm" action="{{ url('sample/json2') }}" method="post"  onsubmit="ajax(); return false;">
            @csrf
            <input type="text" name="a" >
            <input type="text" name="b" >
            <input type="submit" >
        </form>

    </body>
</html>
