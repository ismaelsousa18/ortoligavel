@php $active = View::getSections()['breadcrumb-class']; @endphp

<div class="tratamentos-nav">

    <ul class="menu {{ $active }}">

        <div class="content container">

            <li
                {{ ($active == 'yellow')? "class=active" : 'class=item' }}>
                Alinhadores Invisíveis
                <a href="/tratamentos/alinhadores-invisiveis" class="link"></a>
            </li>

            <li 
                {{ ($active == 'blue')? "class=active" : 'class=item' }}>
                Braquetes Autoligáveis
                <a href="/tratamentos/braquetes-autoligaveis" class="link"></a>
            </li>

            <li 
                {{ ($active == 'purple')? "class=active" : 'class=item' }}>
                TOHi - Tratamento ortodôntico Híbrido
                <a href="/tratamentos/tratamento-hibrido" class="link"></a>
            </li>

            <li
                {{ ($active == 'green')? "class=active" : 'class=item' }}>
                Tratamentos 100% Estéticos
                <a href="/tratamentos/tratamento-estetico" class="link"></a>
            </li>

            <li
                {{ ($active == 'red')? "class=active" : 'class=item' }}>
                Autoligável Lingual
                <a href="/tratamentos/autoligavel-lingual" class="link"></a>
            </li>

        </div>

    </ul>

</div>