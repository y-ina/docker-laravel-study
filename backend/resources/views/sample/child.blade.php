{{-- resources/views/layout/parent.blade.phpを使うのでlayout.parentにする --}}
@extends('layout.parent')

{{-- parent.blade.phpの@yield('title')を置換する --}}
@section('title', 'Sample@tpl')

{{-- parent.blade.phpの@section('menu')から@showまでを置換する --}}
@section('menu')
    {{-- parent.blade.phpの@section('menu')から@showまでを描画する --}}
    @parent
    {{-- child.blade.php独自のメニューを描画する --}}
    <li>独自メニュー1</li>
    <li>独自メニュー2</li>
@endsection

{{-- parent.blade.phpの@yield('content')を置換する --}}
@section('content')
    <p>child.blade.phpのコンテンツ</p>

    {{-- resources/views/component/msgList.blade.phpを描画する --}}
    @component('component.msgList', ['msgTitle' => 'コンポーネントタイトル', 'msgList' => $msgList])
        @slot('addMsg')
            <div>addMsg1</div>
            <div>addMsg2</div>
        @endslot
    @endcomponent

    {{-- resources/views/component/msgList.blade.phpを描画する --}}
    @include('component.msgList', ['msgTitle' => 'インクルードタイトル', 'msgList' => $msgList, 'addMsg' => '<div>addMsg1</div><div>addMsg2</div>'])

@endsection
