

@extends('layouts.app')


@section('title')
bienvenue sur Hello city
@endsection


@section('content')



<p> test de site Laravel </p>
<div class="backdrop-filter backdrop-grayscale backdrop-blur-md backdrop-contrast-200 ...">

    <!-- ... -->



<img src="{{ asset('/img/im1.png')  }}" alt="mon image">


<p class="underline ...">c'est un test de CSS</p>

{{config('app.jp')}}

{{ config('jp.taille') }}




</div>
@endsection
