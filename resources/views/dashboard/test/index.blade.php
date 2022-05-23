<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    {{$name}}<br>
     {{$age}}<br>
     
    The current UNIX timestamp is {{ now() }}
    {!! $html !!}
    <!--funcion if -->
    @if($age <=18)
      eres un jovenazo
    @else
     asi joven joven ya  no
    @endif
   
    <!--funcion autentificacion -->
    @auth
    // The user is authenticated...
@endauth
 <!--funcion invitado -->
@guest
    // The user is not authenticated...
@endguest
@unless (Auth::check())
    You are not signed in.
@endunless
<hr>
@foreach($array as $a)
<div class="box item">
    @include("fragmentos.subview")
@endforeach
<hr>
@for ($i = 0; $i < count($array); $i++)
    @if($i%2==0)
        <b>{{$array[$i]}}</b><br>
    @else
        {{$array[$i]}}<br>
    @endif
@endfor
<hr>
@php 
    $array =[];
@endphp
@forelse($array as $a)
    <h4>*{{$a}}</h4>
@empty
    <p>no hay datos</p>
@endforelse


</body>
</html>