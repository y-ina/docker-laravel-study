<html>
    <head>
        <title>sample</title>
        <script type="text/javascript">
            function ajax(){

                var form = document.getElementById("sampleForm");

                var reqData = {"_token": null, "a": null, "b": {"bb": null}, "c": {"cc": null}};
                reqData._token = form._token.value;
                reqData.a = form.a.value;
                reqData.b.bb = form.b.value;
                reqData.c.cc = form.c.value;

                var req = new XMLHttpRequest();
                req.open(form.method, form.action);
                req.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
                req.responseType = 'json';
                req.send(JSON.stringify(reqData));
                req.onload = function () {
                    var json = req.response;
                    alert("a:" + json['a']  + "\n" + "b.bb:" + json['b']+ "\n" + "c.cc:" + json['c']);
                }
            }
        </script>
    </head>
    <body>

        <form id="sampleForm" action="{{ url('sample/request-json2') }}" method="post"  onsubmit="ajax(); return false;">
            @csrf
            <input type="text" name="a" >
            <input type="text" name="b" >
            <input type="text" name="c" >
            <input type="submit" >
        </form>

    </body>
</html>