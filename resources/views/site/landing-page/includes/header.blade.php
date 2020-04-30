
<header class="header">

<div class="container content">

    <div class="logo">
        <img src="img/logo-w.png" alt="" class="image">
    </div>

    <div class="text">
        Fale com a Ortoligável
        <img src="img/icons/phone.png" alt="" class="icon">
        <a href="tel:+551332226543" class="link">(13) 3222-6543</a>
    </div>

</div>

<div class="container">
    <div class="form-container">
        <form method="post" action="{{ route('sendMailLp') }}" class="form needs-validation col-lg-5 offset-lg-7 col-md-7 offset-md-5 col-12 contact-form" novalidate>
            @csrf
            
            <div class="title">Agende uma consulta <br> agora mesmo!</div>

            @if(count($errors) > 0)

                @foreach($errors->all() as $error)
                    <div class="message error">{{ $error }}</div>
                @endforeach
            @endif

            @if(session('success'))
                <div class="message success">Mensagem enviada com sucesso.</div>
            @endif

            <label class="desc-input">Nome:
                <img src="img/icons/user.png" alt="" class="icon">
                <input type="text" class="input" autocomplete="off" name="nome" required>
                <div class="invalid-feedback">Preencha com seu nome.</div>
            </label>

            <label class="desc-input">E-mail:
                <img src="img/icons/mail.png" alt="" class="icon">
                <input type="text" class="input" autocomplete="off" name="email" required>
                <div class="invalid-feedback">Preencha com seu e-mail.</div>
            </label>

            <label class="desc-input">Telefone:
                <img src="img/icons/phone_grey.png" alt="" class="icon">
                <input type="text" class="input" autocomplete="off" name="telefone" required>
                <div class="invalid-feedback">Preencha com seu telefone.</div>
            </label>

            <button type="submit" class="submit">Agendar uma consulta</button>
        </form>
    
    </div>
</div>

<ul class="dots-list left">
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
</ul>

<ul class="dots-list right">
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
    <li class="dot"></li>
</ul>

</header>