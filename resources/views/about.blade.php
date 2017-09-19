@extends('layouts.app')

@section('content')

<style type="text/css">

    .label2{
        padding-top: 15px;
        text-align: right;
        color: #555;
    }
    @media (max-width:991px) {
        .label2 {
            text-align: left;
        }
    }
</style>
<div class="container-fluid agency-bg" style="background-image: url(/img/bg-6.jpg); height: 250px; padding-top: 120px; background-position: cover">
    <div class="container">
        <h2 class="text-white">Về chúng tôi</h2>

    </div>
</div>
<br>
<br>
<div class="IBESearchForm"></div>
<div class="IBESearchResult"></div>
<div class="container">
    <div class="row">
        <br>
        {!! $content['about'] !!}

    </div>
</div>
<br>
<br>
<br>
@component('component.footer')
@endcomponent

@endsection
