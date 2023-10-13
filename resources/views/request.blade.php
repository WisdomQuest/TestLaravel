<x-my-request>
    <x-slot name="ip">{{$request->ip()}}</x-slot>
    <x-slot name="value">{{$request->fullUrl()}}</x-slot>
    <x-slot name="value">
        {{--       @foreach($request->input() as $input)--}}
        {{--           {{$input}}--}}
        {{--       @endforeach--}}

        <?php
        $paramString = '';
        foreach ($request->input() as $key => $value) {
            $paramString .= $key . '=' . $value . '; ';
        }
        ?>
        {{$paramString}}


    </x-slot>
</x-my-request>

