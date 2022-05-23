@extends('layout.master')
@section('content')

@foreach($posts as $a)
<div class="box item">
    @include("fragmentos.subview")
@endforeach

<hr>
@forelse($posts as $a)
    <h4>*{{$a}}</h4>
@empty
    <p>no hay datos</p>
@endforelse
{{$name}}
@endsection