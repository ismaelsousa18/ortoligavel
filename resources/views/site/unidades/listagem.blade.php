@extends('site.layout.internas')

@section('breadcrumb-item')
<li class='item active'><a href="/unidades">Unidades</a></li>
@endsection

@section('breadcrumb-title', 'Unidades')

@section('content')

<div class="unidades-listagem-page">

    <div class="container content">

        <h3 class="tiny">Ortoligável</h3>
        <h2 class="title">Próximo a você!</h2>

    </div>

    @include('site.includes.unidades', ['title' => false])

</div>

@endsection