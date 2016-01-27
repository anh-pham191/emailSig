@extends('app')

@section('content')

    <h2>Sample Signature</h2><hr>

    <ul>
        @foreach($signatures as $signature)
            <li>
                {!! HTML::image($signature->image, null, array('width'=>'50')) !!}
                {!! $signature->name  !!}
            </li>
        @endforeach
    </ul>

@stop