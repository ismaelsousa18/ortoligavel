<header class="header">

    <div class="container content">

        <div class="logo">
            <img src="img/logo.png" alt="" class="image">
        </div>

        <div class="text">
            Fale com a Ortoligável
            <img src="img/icons/phone.png" alt="" class="icon">
            <a href="tel:+551332226543" class="link">(13) 3222-6543</a>
        </div>

    </div>

    <div class="container">
        <form method="post" action="{{ url('/send-mail') }}" class="form col-lg-5 offset-lg-7 col-md-7 offset-md-5 col-12 contact-form" novalidate>
            @csrf
            
            <div class="title">Agende uma consulta <br> agora mesmo!</div>

            @if(count($errors) > 0)
                <div class="message error">Não foi possivel enviar sua mensagem.</div>
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

</header>