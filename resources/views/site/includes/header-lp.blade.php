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
        <form method="post" action="{{ url('/send-mail') }}" class="form col-lg-5 offset-lg-7 col-md-7 offset-md-5 col-12">
            @csrf
            
            <div class="title">Agende uma consulta <br> agora mesmo!</div>

            @if(count($errors) > 0)
                <div class="message error">Não foi possivel enviar sua mensagem.</div>
            @endif

            @if(session('success'))
                <div class="message success">Mensagem enviada.</div>
            @endif

            <label class="desc-input">Nome:
                <img src="img/icons/user.png" alt="" class="icon">
                <input type="text" class="input" name="nome">
            </label>

            <label class="desc-input">E-mail:
                <img src="img/icons/mail.png" alt="" class="icon">
                <input type="text" class="input" name="email">
            </label>

            <label class="desc-input">Telefone:
                <img src="img/icons/phone_grey.png" alt="" class="icon">
                <input type="text" class="input" name="telefone">
            </label>

            <button type="submit" class="submit">Agendar uma consulta</button>
        </form>
    </div>

</header>