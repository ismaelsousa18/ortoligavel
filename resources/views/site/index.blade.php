@extends('site.layout.main')

@section('content')

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

        <img src="/img/pages/home/unidade-bg.png" alt="" class="background">

        <div class="container content">

            <h3 class="sub">Unidades Ortoligável</h3>
            <h2 class="title">Escolha a unidade mais próxima de você:</h2>

            <ul class="list">
                <li class="item">
                    
                    <div class="top">
                        <div class="image-area">
                            <img src="/img/pages/home/unidade-2.png" alt="" class="source">
                        </div>
                        <div class="icon">
                            <img src="/img/icons/map.png" alt="" class="source">
                        </div>
                    </div>

                    <div class="text-area">
                        <div class="text">
                            Santos / SP
                        </div>
                    </div>

                </li>
                <li class="item">
                    
                    <div class="top">
                        <div class="image-area">
                            <img src="/img/pages/home/unidade-1.png" alt="" class="source">
                        </div>
                        <div class="icon">
                            <img src="/img/icons/map.png" alt="" class="source">
                        </div>
                    </div>

                    <div class="text-area">
                        <div class="text">
                            João Pessoa / PB
                        </div>
                    </div>

                </li>
                
            </ul>

        </div>

    </div>

    <div class="entenda">
        <img src="/img/pages/home/entenda-bg.png" alt="" class="background">

        <div class="content container">
            <div class="tiny">Somos uma</div>
            <div class="strong">Clínica Digital Estética</div>

            <a href="">
                <button class="entenda-mais">Entenda Mais</button>
            </a>
        </div>
    </div>

    <div class="parceiros">

        <div class="content container">

            <div class="top">

                <div class="tiny">Cientes e parceiros</div>
                <div class="strong">Ortoligável</div>

            </div>

            <ul class="parceiros-carousel">

                <li class="item black-light">
                    <a href="http://newone.odo.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-one-logo.png" alt="New One" class="source">
                </li>

                <li class="item blue-dark">
                    <a href="http://newaligner.com.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-aligner-logo.png" alt="New Aligner" class="source">
                </li>

                <li class="item black">
                    <a href="https://newevolution.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-evolution-logo.png" alt="New Evolution" class="source">
                </li>
                
                <li class="item white">
                    <a href="http://casa.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/casa-logo.png" alt="Centro Avançado em Sistema Autoligável" class="source">
                </li>

                <li class="item black-light">
                    <a href="http://newone.odo.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-one-logo.png" alt="New One" class="source">
                </li>

                <li class="item blue-dark">
                    <a href="http://newaligner.com.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-aligner-logo.png" alt="New Aligner" class="source">
                </li>

                <li class="item black">
                    <a href="https://newevolution.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-evolution-logo.png" alt="New Evolution" class="source">
                </li>
                
                <li class="item white">
                    <a href="http://casa.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/casa-logo.png" alt="Centro Avançado em Sistema Autoligável" class="source">
                </li>

                <li class="item black-light">
                    <a href="http://newone.odo.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-one-logo.png" alt="New One" class="source">
                </li>

                <li class="item blue-dark">
                    <a href="http://newaligner.com.br" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-aligner-logo.png" alt="New Aligner" class="source">
                </li>

                <li class="item black">
                    <a href="https://newevolution.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/new-evolution-logo.png" alt="New Evolution" class="source">
                </li>
                
                <li class="item white">
                    <a href="http://casa.odo.br/" target="_blank" class="link"></a>
                    <img src="/img/pages/home/casa-logo.png" alt="Centro Avançado em Sistema Autoligável" class="source">
                </li>

            </ul>

            

        </div>

    </div>


</section>

@endsection
