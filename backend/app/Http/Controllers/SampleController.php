<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

//学習で追記
use App\Http\Requests\SampleRequest;




class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = ['key' => "value"];
      return view('sample.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tpl()
    {
        $data = ['val' => 2,
        'parentList' => ['key1' => 1],
        'list' => ['key1' => 1, 'key2' => 2, 'key3' => 3],
        'emptyList' => []
        ];
        return view('sample.tpl', $data);
    }

    public function child()
    {
        $data = ['msgList' => ["msg1", "msg2"]];
        return view('sample.child', $data);
    }

    public function viewCompose()
    {
        $data = ['key' => 123456789.123456];
        return view('sample.viewCompose', $data);
    }

    public function request1(Request $request)
    {
        $request->flash();

        $data = [
        'get'           => $request->get('a'),
        'input'         => $request->input('a'),
        'request_get'   => $request->request->get('a'),
        'query_get'     => $request->query->get('a'),
        'query'         => $request->query('a'),
        'all'           => var_export($request->all(), true),
        'only'          => var_export($request->only(['a', 'b']), true),
        'except'        => var_export($request->except(['b']), true),
        ];

        return view('sample.request1', $data);
    }

    public function request2(Request $request)
    {
        $request->flash();

        $data = [
            'get'           => $request->get('a'),
            'input'         => $request->input('a'),
            'request_get'   => $request->request->get('a'),
            'query_get'     => $request->query->get('a'),
            'query'         => $request->query('a'),
            'all'           => var_export($request->all(), true),
            'only'          => var_export($request->only(['a', 'b']), true),
            'except'        => var_export($request->except(['b']), true),
        ];

        return view('sample.request2', $data);
    }

    public function post()
    {
        return view('sample.post');
    }

    public function session1(Request $request)
    {
        $request->getSession()->put("key1", "value1");
        $request->getSession()->put("key2", "value2");
        return view('sample.session1');
    }

    public function session2(Request $request)
    {
        $data = [
            'key1' => $request->getSession()->get("key1")
        ];
        return view('sample.session2', $data);
    }

    //うまく動作しなかった為再度違うやり方を調べる
    // public function upload(Request $request)
    // {
    //     $file = $request->file('a');

    //     if (!is_null($file)) {
    //         date_default_timezone_set('Asia/Tokyo');

    //         $originalName = $file->getClientOriginalName();
    //         $micro = explode(" ", microtime());
    //         $fileTail = date("Ymd_His", $micro[1]) . '_' . (explode('.', $micro[0])[1]);

    //         $dir = 'upFiles';
    //         $fileName = $originalName . '.' . $fileTail;
    //         $file->storeAs($dir, $fileName, ['disk' => 'local']);
    //     }

    //     return view('sample.upload');
    // }

    //   public function download1()
    // {
    //     return view('sample.download');
    // }

    // public function download2(Request $request, Response $response)
    // {
    //     $this->sendHeader($response, 'sample.txt', 'text/plain');

    //     for ($row = 0; $row < 100; $row++) {

    //         $line = '';
    //         for ($col = 0; $col < 10; $col++) {
    //             $line .= $col;
    //             $line .= "\t";
    //         }
    //         $line .= "\n";

    //         $this->sendContentBody($line);

    //     }

    //     $this->sendContentEnd();

    //     exit;
    // }

    // private function sendHeader($response, $fileName, $mimeType){

    //     $response->setProtocolVersion('1.1');
    //     $response->headers->replace([
    //         'Content-Type' => $mimeType,
    //         'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    //         'Transfer-Encoding' => 'chunked'
    //     ]);
    //     $response->sendHeaders();

    //     ob_flush();
    //     flush();

    // }

    // private function sendContentBody($line){

    //     echo dechex(strlen($line));
    //     echo "\r\n";
    //     echo $line;
    //     echo "\r\n";

    //     ob_flush();
    //     flush();
    // }

    // private function sendContentEnd(){

    //     echo '0';
    //     echo "\r\n";
    //     echo "\r\n";

    //     ob_flush();
    //     flush();

    // }

    public function json1(Request $request)
    {
        return view('sample.json');
    }

    public function json2(Request $request)
    {
        $data = [
            'a' => $request->input('a'),
            'b' => $request->input('b')
        ];
        return $data;
    }

    public function requestJson1(Request $request)
    {
        return view('sample.requestJson');
    }

    public function requestJson2(Request $request)
    {
        $data = [
            'a' => $request->input('a'),
            'b' => $request->input('b.bb'),
            'c' => $request->input('c')['cc']
        ];
        return $data;
    }

    public function beforeAfter(Request $request)
    {
        error_log("SampleController\n", 3, dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "Middleware" . DIRECTORY_SEPARATOR  . "sample.log");

        return view('sample.beforeAfter');
    }

    public function validation1()
    {
        return view('sample.validation1');
    }

    public function validation2(SampleRequest $request)
    {
        $data = [
            'msg' => '入力チェックOK',
        ];
        return view('sample.validation2', $data);
    }

    public function redirect1(Request $request)
    {
        return view('sample.redirect1');
    }

    public function redirect2(Request $request)
    {
        return redirect('sample/redirect3')->withInput();
    }

    public function redirect3(Request $request)
    {
        return view('sample.redirect3');
    }

}
