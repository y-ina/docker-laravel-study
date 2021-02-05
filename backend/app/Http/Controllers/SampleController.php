<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
