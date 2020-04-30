@extends('site.layout.internas')

@section('breadcrumb-item')
<li class='item active'><a href="/contato">Contato</a></li>
@endsection

@section('breadcrumb-title', 'Contato')

@section('content')

<div class="contato-page">

    <h2 class="title">Entre em contato conosco.</h2>

    <p class="desc">
        Utilize o formulário abaixo ou por e-mail <a href="mailto:contato@ortoligavel.com.br" class="link">contato@ortoligavel.com.br</a>
        Se você preferir falar ao telefone, ligue para <a href="tel:+551332226543" class="link">+55 (13) 3222-6543.</a>
    </p>

    <form action="{{ route('sendMail') }}" method="POST" class="contact-form needs-validation" novalidate>
        @csrf

        <div class="content container">

            @if(session('success'))
                <div class="alert success">Mensagem enviada com sucesso!</div>    
            @endif

            @if(count($errors) > 0)
                <div class="alert error">Não foi possível enviar sua mensagem! Erros encontrados:
                    <ul class="errors-list">
                        @foreach($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label class="desc-input">
                <div class="desc">Nome:</div>
                <img src="/img/icons/user.png" alt="" class="icon">
                <input type="text" name="nome" class="input" required>
                <div class="invalid-feedback">Preencha com seu nome</div>
            </label>

            <label class="desc-input">
                <div class="desc">E-mail:</div>
                <img src="/img/icons/mail.png" alt="" class="icon">
                <input type="text" name="email" class="input" required>
                <div class="invalid-feedback">Preencha com seu email</div>
            </label>

            <div class="line">
                <label class="desc-input">
                    <div class="desc">Telefone:</div>
                    <img src="/img/icons/phone_grey.png" alt="" class="icon">
                    <input type="text" name="telefone" class="input" required>
                    <div class="invalid-feedback">Preencha com seu número de telefone</div>
                </label>

                <label class="desc-input">
                    <div class="desc">Assunto:</div>
                    <select name="assunto" class="input" required>
                        <option value="">Selecione</option>
                        <option value="agendar consulta">Agendar uma consulta</option>
                    </select>
                    <div class="invalid-feedback">Selecione um assunto</div>
                </label>
            </div>

            <label class="desc-input">
                <div class="desc">Mensagem:</div>
                <textarea name="mensagem" class="input" required></textarea>
                <div class="invalid-feedback">Preencha com sua mensagem</div>
            </label>

            <button type="submit" class="submit">Enviar Mensagem</button>

        </div>

    </form>

    <div class="maparea">

        <div class="content container">

            <h2 class="title">Ortoligável próximo a você!</h2>

            <ul class="unidades-list">
                <li class="unidade active">
                    João Pessoa, PB
                </li>
                <li class="unidade">
                    Mossoró, RN
                </li>
                <li class="unidade">
                    Natal, RN
                </li>
                <li class="unidade">
                    Rio de Janeiro, RJ
                </li>
                <li class="unidade">
                    Santos, SP
                </li>
            </ul>

        </div>

        <div class="map">

            <ul class="details-list">
                <li class="detail active">
                    <h5 class="title">João Pessoa, PB</h5>

                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="map-pin"></i>
                        </div>
                        Av. Gen. Edson Ramalho, 190, Manaíra,<br>
                        João Pessoa, PB, CEP: 58038-100.
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="phone"></i>
                        </div>
                        Ligue-nos: <a href="tel:+558332470900">+55 (83) 3247-0900</a>
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="mail"></i>
                        </div>
                        E-mail: <a href="mailto:joaopessoa@ortoligavel.com.br">joaopessoa@ortoligavel.com.br</a>
                    </div>
                </li>

                <li class="detail">
                    <h5 class="title">Mossoró, RN</h5>

                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="map-pin"></i>
                        </div>
                        Av. Gen. Edson Ramalho, 190, Manaíra,<br>
                        João Pessoa, PB, CEP: 58038-100.
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="phone"></i>
                        </div>
                        Ligue-nos: <a href="tel:+558332470900">+55 (83) 3247-0900</a>
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="mail"></i>
                        </div>
                        E-mail: <a href="mailto:joaopessoa@ortoligavel.com.br">joaopessoa@ortoligavel.com.br</a>
                    </div>
                </li>

                <li class="detail">
                    <h5 class="title">Natal, RN</h5>

                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="map-pin"></i>
                        </div>
                        Av. Gen. Edson Ramalho, 190, Manaíra,<br>
                        João Pessoa, PB, CEP: 58038-100.
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="phone"></i>
                        </div>
                        Ligue-nos: <a href="tel:+558332470900">+55 (83) 3247-0900</a>
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="mail"></i>
                        </div>
                        E-mail: <a href="mailto:joaopessoa@ortoligavel.com.br">joaopessoa@ortoligavel.com.br</a>
                    </div>
                </li>

                <li class="detail">
                    <h5 class="title">Rio de Janeiro, RJ</h5>

                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="map-pin"></i>
                        </div>
                        Av. Gen. Edson Ramalho, 190, Manaíra,<br>
                        João Pessoa, PB, CEP: 58038-100.
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="phone"></i>
                        </div>
                        Ligue-nos: <a href="tel:+558332470900">+55 (83) 3247-0900</a>
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="mail"></i>
                        </div>
                        E-mail: <a href="mailto:joaopessoa@ortoligavel.com.br">joaopessoa@ortoligavel.com.br</a>
                    </div>
                </li>

                <li class="detail">
                    <h5 class="title">Santos, SP</h5>

                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="map-pin"></i>
                        </div>
                        Av. Gen. Edson Ramalho, 190, Manaíra,<br>
                        João Pessoa, PB, CEP: 58038-100.
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="phone"></i>
                        </div>
                        Ligue-nos: <a href="tel:+558332470900">+55 (83) 3247-0900</a>
                    </div>
                    <div class="line">
                        <div class="icon-container">
                            <i class="icon" data-feather="mail"></i>
                        </div>
                        E-mail: <a href="mailto:joaopessoa@ortoligavel.com.br">joaopessoa@ortoligavel.com.br</a>
                    </div>
                </li>
                
            </ul>

            <iframe class="map-frame active" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126682.34216138872!2d-34.95163747430612!3d-7.146433232552248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace839019aa3d7%3A0x6e414a9c6d26db34!2sJo%C3%A3o%20Pessoa%2C%20PB!5e0!3m2!1spt-BR!2sbr!4v1588275462031!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63574.85458541477!2d-37.376659455729666!3d-5.1951503555124905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba06e074d5ce0b%3A0x46694ffe5df19ebe!2zTW9zc29yw7MsIFJO!5e0!3m2!1spt-BR!2sbr!4v1588275505944!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127020.64259512188!2d-35.292284135203055!3d-5.799743858188796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3aaac26460531%3A0x5d8b404cf00fed69!2sNatal%2C%20RN!5e0!3m2!1spt-BR!2sbr!4v1588275786522!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235199.33674488263!2d-43.58606543689348!3d-22.913753087447972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio%20de%20Janeiro%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1588275825798!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116759.0376284426!2d-46.36026928996128!3d-23.864077171453008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03b97cc7856f%3A0x3ff3e507b04bbc46!2sSantos%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1588275861022!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

</div>

@endsection