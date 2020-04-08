@extends('site.layout.general')

@section('content')

@include('site.includes.header.header-slide')

<section class="index-page">

    <div class="blue-area">

        <div class="container">
            <h3 class="sub">Podemos te ajudar a identificar</h3>
            <h2 class="title">O tratamento ideal para  <br> você.</h2>
        </div>

    </div>

    <div class="tratamentos">
        
        <div class="container content">
            <ul class="list">
                <li class="item yellow">
                    <div class="left">
                        <img src="/img/tratamentos/yellow.png" alt="" class="back">
                        <div class="text">
                            Alinhadores Invisíveis
                        </div>
                    </div>
                    <div class="right">
                        <div class="text">
                            A maneira simples e rápida de ter um novo sorriso! Os alinhadores NewALGINER são a mais alta e moderna tecnologia a serviço da ortodontia.
                        </div>
                    </div>
                    <div class="more">
                        Saiba mais
                        <button>
                            <i data-feather="chevron-right"></i>
                        </button>
                    </div>
                    <a href="/" class="link"></a>
                </li>

                <li class="item blue">
                    <div class="left">
                        <img src="/img/tratamentos/blue.png" alt="" class="back">
                        <div class="text">
                            Braquetes Autoligáveis
                        </div>
                    </div>
                    <div class="right">
                        <div class="text">
                            Braquetes autoligáveis mais higiênicos e o mais indicado para pacientes com problemas periodontais.
                        </div>
                    </div>
                    <div class="more">
                        Saiba mais
                        <button>
                            <i data-feather="chevron-right"></i>
                        </button>
                    </div>
                    <a href="/" class="link"></a>
                </li>

                <li class="item purple">
                    <div class="left">
                        <img src="/img/tratamentos/purple.png" alt="" class="back">
                        <div class="text">
                            TOHi - Tratamento Ortodôntico Híbrido
                        </div>
                    </div>
                    <div class="right">
                        <div class="text">
                            Utilizar aparelho ou alinhadores? A Ortoligável é pioneira na utilização do TOHi - Tratamento Ortodôntico Híbrido que combina o uso dos braquetes autoligáveis (aparelho) por um tempo e o uso dos alinhadores a seguir.
                        </div>
                    </div>
                    <div class="more">
                        Saiba mais
                        <button>
                            <i data-feather="chevron-right"></i>
                        </button>
                    </div>
                    <a href="/" class="link"></a>
                </li>

                <li class="item green">
                    <div class="left">
                        <img src="/img/tratamentos/green.png" alt="" class="back">
                        <div class="text">
                            Tratamentos 100% estéticos
                        </div>
                    </div>
                    <div class="right">
                        <div class="text">
                            Para todos os tratamentos, utilizamos os braquetes estéticos autoligáveis New Evolution e os alinhadores invisíveis NewALIGNER, ambos produtos da NewONE Orthodontics.
                        </div>
                    </div>
                    <div class="more">
                        Saiba mais
                        <button>
                            <i data-feather="chevron-right"></i>
                        </button>
                    </div>
                    <a href="/" class="link"></a>
                </li>

            </ul>
        </div>

    </div>

    <div class="about">

        <div class="content container">

            <div class="left">

                <h3 class="sub">Sobre Nós</h3>
                <h2 class="title">Ortodontia Inteligente</h2>

                <p class="desc">
                    A ORTOLIGÁVEL trabalha exclusivamente com o mais novo conceito de tratamento ortodôntico conhecido como <strong>SISTEMA AUTOLIGÁVEL.</strong>
                </p>
                <p class="desc">
                    Este sistema apresenta duas diferenças básicas em relação a ortodontia convencional: os braquetes autoligáveis, que dispensam o uso da borrachinhas, e os modernos fios termoativados de alinhamento, que trabalham na variação da temperatura da boca dos pacientes.
                </p>
                <p class="desc">
                    vem a atender as exigências...
                </p>

                <p class="desc strong">
                    Proporcionando tratamentos ortodônticos mais rápidos, mais confortável, menos dor, menos extrações dentárias.
                </p>

                <a href="">
                    <button class="agendar">Agendar uma consulta</button>
                </a>

            </div>

            <div class="right">
                <img src="/img/pages/home/about.png" alt="Ortoligável" class="image">
            </div>

        </div>

    </div>

    <div class="unidades">

        <div class="container content">

            <h3 class="sub">Unidades Ortoligável</h3>
            <h2 class="title">Escolha a unidade mais próxima de você:</h2>

            <ul class="list">
                <li class="item">

                    <div class="image-area">
                        <img src="/img/pages/home/unidade-2.png" alt="" class="source">
                    </div>

                    <div class="text-area">
                        <div class="icon">
                            <img src="/img/icons/map.png" alt="" class="source">
                        </div>
                        <div class="text">
                            SANTOS/SP
                        </div>
                    </div>

                </li>
                <li class="item">

                    <div class="image-area">
                        <img src="/img/pages/home/unidade-2.png" alt="" class="source">
                    </div>

                    <div class="text-area">
                        <div class="icon">
                            <img src="/img/icons/map.png" alt="" class="source">
                        </div>
                        <div class="text">
                            SANTOS/SP
                        </div>
                    </div>

                </li>
            </ul>

        </div>

    </div>

</section>

@endsection
