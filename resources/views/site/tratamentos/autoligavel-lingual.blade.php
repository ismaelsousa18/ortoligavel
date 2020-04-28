@extends('site.layout.tratamentos-integra')

@section('breadcrumb-item')
<li class='item'><a href="/tratamentos">Tratamentos</a></li>
<li class='item active'><a href="/tratamentos/autoligavel-lingual">Autoligável Lingual</a></li>
@endsection

@section('breadcrumb-title','Autoligável Lingual')

@section('breadcrumb-class','red')

@section('content')

    <div class="principal container">

        <h2 class="title">Autoligável Lingual</h2>

        <p class="desc">
            A maneira simples e rápida de ter um novo sorriso! Os alinhadores NewALGINER são a mais alta e moderna tecnologia a serviço da ortodontia. Possibilitam um tratamento ortodôntico livre dos braquetes, proporcionando ao paciente um maior conforto e com resultados rápidos sem que ninguém perceba que o paciente está em tratamento, devido ao grande valor estético. Outra grande vantagem é a possibilidade de retirada do alinhador para uma perfeita higienização dos dentes e sem nenhuma restrição alimentar. Transmitem forças leves aos tecidos do complexo dento-alveolar, realizando não apenas movimentações dentárias simples, mas também as complexas.
        </p>

        <a href="/agendar">
            <button class="agendar">Agendar uma consulta</button>
        </a>

    </div>

    <div class="photos-area">

        <ul class="container photos-list">
            <li class="photo">
                <img src="/img/pages/tratamentos-integra/alinhadores-invisiveis.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/alinhadores-invisiveis.png" data-lightbox="images-list" class="link"></a>
            </li>

            <li class="photo">
                <img src="/img/pages/tratamentos-integra/tratamento-estetico.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/tratamento-estetico.png" data-lightbox="images-list" class="link"></a>
            </li>

            <li class="photo">
                <img src="/img/pages/tratamentos-integra/photo-1.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/photo-1.png" data-lightbox="images-list" class="link"></a>
            </li>

            <li class="photo">
                <img src="/img/pages/tratamentos-integra/alinhadores-invisiveis.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/alinhadores-invisiveis.png" data-lightbox="images-list" class="link"></a>
            </li>

            <li class="photo">
                <img src="/img/pages/tratamentos-integra/tratamento-estetico.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/tratamento-estetico.png" data-lightbox="images-list" class="link"></a>
            </li>

            <li class="photo">
                <img src="/img/pages/tratamentos-integra/photo-1.png" alt="Ortoligável" class="source">
                <a href="/img/pages/tratamentos-integra/photo-1.png" data-lightbox="images-list" class="link"></a>
            </li>
        </ul>

    </div>

    <div class="porque-usar container">

        <h2 class="title">Por que usar Alinadores Invisíveis?</h2>

        <ul class="list">
            <li class="item"><i data-feather="check" class="icon"></i>Melhorar o alinhamento dos dentes</li>
            <li class="item"><i data-feather="check" class="icon"></i>Corrigir a mordida aberta</li>
            <li class="item"><i data-feather="check" class="icon"></i>Corrigir a mordida cruzada</li>
            <li class="item"><i data-feather="check" class="icon"></i>Sorriso mais harmônico</li>
            <li class="item"><i data-feather="check" class="icon"></i>Correção de mandíbula</li>
            <li class="item"><i data-feather="check" class="icon"></i>Facilita a higiene oral</li>
        </ul>

    </div>

    <div class="passos container">

        <h2 class="title">Entenda os passos para começar seu Tratamento</h2>

        <ul class="passos-list">
        
            <li class="passo">
                <div class="number">1</div>
                <div class="title">Agendamento</div>
                <div class="desc">Basta enviar um formulário ou nos enviar uma mensagem no Whatsapp.</div>
            </li>

            <li class="passo">
                <div class="number">2</div>
                <div class="title">Avaliação</div>
                <div class="desc">Aqui entendemos qual é o melhor tipo de aparelho e tratamento.</div>
            </li>

            <li class="passo">
                <div class="number">3</div>
                <div class="title">Documentação Ortodôntica</div>
                <div class="desc">Você faz todos os exames na própria clínica para dar início ao tratamento.</div>
            </li>

            <li class="passo">
                <div class="number">4</div>
                <div class="title">Contrato e Plano de Tratamento</div>
                <div class="desc">Pronto! Agora é só agendar a data de início do seu Tratamento.</div>
            </li>

        </ul>

        <a href="/agendar">
            <button class="agendar">Agendar uma consulta</button>
        </a>
    </div>

@endsection