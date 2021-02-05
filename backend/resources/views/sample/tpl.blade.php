<html>
    <head>
        <title>sample</title>
    </head>
    <body>

        {{-- コメント --}}

        {{-- {!!  !!}はエスケープしないデータの表示 --}}
        <div>[{!! '&#064;php' !!}]</div>
        @php
            $tplVal = 10;
            echo '<div>' . $tplVal . '</div>';
        @endphp

        <br>

        <div>[echo]</div>
        <div>{{ $val }}</div>
        <br>

        <div>[if]</div>
        @if ($val === 1)
            <div>1</div>
        @elseif ($val === 2)
            <div>2</div>
        @else
            <div>else</div>
        @endif
        <br>

        <div>[switch]</div>
        @switch($val)
            @case(1)
                <div>1</div>
                @break
            @case(2)
                <div>2</div>
                @break
            @default
                <div>default</div>
        @endswitch
        <br>

        <div>[unless]</div>
        @unless (true)
            <div>true</div>
        @else
            <div>false</div>
        @endunless
        <br>

        <div>[isset]</div>
        @isset($list['key1'])
            <div>isset true</div>
        @else
            <div>isset false</div>
        @endisset
        <br>

        <div>[empty]</div>
        @empty($list['key1'])
            <div>empty true</div>
        @else
            <div>empty false</div>
        @endempty
        <br>

        <div>[for]</div>
        @for ($i = 0; $i < 10; $i++)
            @if ($i == 1)
                @continue
            @endif
            <div>{{ $i }}</div>
            @if ($i >= 3)
                @break
            @endif
        @endfor
        <br>

        <div>[foreach]</div>
        @foreach ($list as $listKey => $listVal)
            @if ($listVal == 1)
                @continue
            @endif
            <div>{{ $listKey }}:{{ $listVal }}</div>
            @if ($listVal >= 3)
                @break
            @endif
        @endforeach
        <br>

        <div>[forelse]</div>
        @forelse ($emptyList as $listKey => $listVal)
            <div>{{ $listKey }}:{{ $listVal }}</div>
        @empty
            <div>空っぽのリストです</div>
        @endforelse
        <br>

        <div>[while]</div>
        @php
            $whileIndex = 0;
        @endphp
        @while ($whileIndex <= 3)
            <div>{{ $whileIndex }}</div>
            @php
                $whileIndex++;
            @endphp
        @endwhile
        <br>

        <div>[$loop]</div>
        @foreach ($parentList as $parentListKey => $parentListVal)
            <div>parent:{{ $parentListKey }}:{{ $parentListVal }}</div>
            @foreach ($list as $listKey => $listVal)
                <div>child:{{ $listKey }}:{{ $listVal }}</div>
                <div>$loop->index:    {{ $loop->index }}</div>
                <div>$loop->iteration:{{ $loop->iteration }}</div>
                <div>$loop->remaining:{{ $loop->remaining }}</div>
                <div>$loop->count:    {{ $loop->count }}</div>
                <div>$loop->first:    {{ $loop->first }}</div>
                <div>$loop->last:     {{ $loop->last }}</div>
                <div>$loop->even:     {{ $loop->even }}</div>
                <div>$loop->odd:      {{ $loop->odd }}</div>
                <div>$loop->depth:    {{ $loop->depth }}</div>

                <div>$loop->parent->index:    {{ $loop->parent->index }}</div>
                <div>$loop->parent->iteration:{{ $loop->parent->iteration }}</div>
                <div>$loop->parent->remaining:{{ $loop->parent->remaining }}</div>
                <div>$loop->parent->count:    {{ $loop->parent->count }}</div>
                <div>$loop->parent->first:    {{ $loop->parent->first }}</div>
                <div>$loop->parent->last:     {{ $loop->parent->last }}</div>
                <div>$loop->parent->even:     {{ $loop->parent->even }}</div>
                <div>$loop->parent->odd:      {{ $loop->parent->odd }}</div>
                <div>$loop->parent->depth:    {{ $loop->parent->depth }}</div>

                @if ($listVal >= 2)
                    @break
                @endif

            @endforeach
        @endforeach
        <br>

    </body>
</html>