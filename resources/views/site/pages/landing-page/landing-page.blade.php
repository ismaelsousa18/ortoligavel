@extends('site.layout.general')

@section('content')

<div class="landing-page">

    @include('site.pages.landing-page.includes.header')    

    @include('site.pages.landing-page.includes.content')

    @include('site.pages.landing-page.includes.footer')

</div>

@endsection