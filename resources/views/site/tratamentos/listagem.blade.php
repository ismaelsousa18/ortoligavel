@extends('site.layout.internas')

@section('breadcrumb-item')
    <li class='item active'><a href="/tratamentos">Tratamentos</a></li>
@endsection

@section('breadcrumb-title','Tratamentos')

@section('content')

    <section class="tratamentos-listagem-page">

        <div class="content">
    
            <div class="title">Nós podemos te ajudar a identificar o tratamento ideal para você!</div>
            <div class="sub">Tratamentos ortodônticos mais rápidos, mais confortável, menos dor, menos extrações dentárias...</div>

            <ul class="listagem">

                <img src="/img/tratamentos/detail-left.png" alt="" class="detail-left">

                <div class="container">
            
                    <li class="tratamento yellow">
                    
                        <div class="left">
                            <img src="/img/tratamentos/yellow.png" alt="Alinhadores Invisíveis" class="image">
                        </div>

                        <div class="right">
                            <h3 class="title">Alinhadores Invisíveis</h3>

                            <div class="desc">
                                <p class="text">
                                    A maneira simples e rápida de ter um novo sorriso! Os alinhadores NewALIGNER são a mais alta e moderna tecnologia a serviço da ortodontia.
                                </p>

                                <a href="/tratamentos/alinhadores-invisiveis" class="link">
                                    <button class="arrow"><i class="icon" data-feather="chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="tratamento blue">
                    
                        <div class="left">
                            <img src="/img/tratamentos/blue.png" alt="Braquetes Autoligáveis" class="image">
                        </div>

                        <div class="right">
                            <h3 class="title">Braquetes Autoligáveis</h3>

                            <div class="desc">
                                <p class="text">
                                    Braquetes autoligáveis mais higiênicos e o mais indicado para pacientes com problemas periodontais...
                                </p>

                                <a href="/tratamentos/braquetes-autoligaveis" class="link">
                                    <button class="arrow"><i class="icon" data-feather="chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="tratamento purple">
                    
                        <div class="left">
                            <img src="/img/tratamentos/purple.png" alt="TOHi - Tratamento Ortodôntico Híbrido" class="image">
                        </div>

                        <div class="right">
                            <h3 class="title">TOHi - Tratamento Ortodôntico Híbrido</h3>

                            <div class="desc">
                                <p class="text">
                                    Utilizar aparelho ou alinhadores? A Ortoligável é pioneira na utilização do TOHi - Tratamento Ortodôntico Híbrido que combina o uso dos braquetes autoligáveis. 
                                </p>

                                <a href="/tratamentos/tratamento-hibrido" class="link">
                                    <button class="arrow"><i class="icon" data-feather="chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="tratamento green">
                    
                        <div class="left">
                            <img src="/img/tratamentos/green.png" alt="Tratamentos 100% estéticos" class="image">
                        </div>

                        <div class="right">
                            <h3 class="title">Tratamentos 100% estéticos</h3>

                            <div class="desc">
                                <p class="text">
                                    Para todos os tratamentos, utilizamos os braquetes estéticos autoligáveis New Evolution e os alinhadores invisíveis NewALIGNER, ambos produtos da NewONE Orthodontics.
                                </p>

                                <a href="/tratamentos/tratamento-estetico" class="link">
                                    <button class="arrow"><i class="icon" data-feather="chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </li>

                    <li class="tratamento red">
                    
                        <div class="left">
                            <img src="/img/tratamentos/red.png" alt="Autoligável Lingual" class="image">
                        </div>

                        <div class="right">
                            <h3 class="title">Autoligável Lingual</h3>

                            <div class="desc">
                                <p class="text">
                                    A maneira simples e rápida de ter um novo sorriso! Os alinhadores NewALIGNER são a mais alta e moderna tecnologia a serviço da ortodontia.
                                </p>

                                <a href="/tratamentos/autoligavel-lingual" class="link">
                                    <button class="arrow"><i class="icon" data-feather="chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </li>

                </div>

                <img src="/img/tratamentos/detail-right.png" alt="" class="detail-right">

            </ul>

        </div>

    </section>

@endsection