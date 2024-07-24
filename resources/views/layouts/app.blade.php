<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
    @yield('links')
    <title>@yield('title')</title>
</head>
<body class="bg-primary bg-gradient">

    <!-- header do site -->

    <header>
        @yield('header')
    </header>

    <!-- parte principal do site -->

    <main>
        @yield('main')
        <a href="">
            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" height="50" width="50"           
            class="icon-wpp">
        </a>
    </main>

    <!-- rodapé do site -->

    <span class="line"></span>
    <footer>
        <span style="color: white">&copyGuiMendS</span>
        <div class="box-footer">
            <h5 class="title-footer">Horários</h5>
            <a href="" class="link-footer">Segunda a Sábado</a>
            <a href="" class="link-footer">09h às 19h</a>
            <a href="" class="link-footer">Emergências</a>
            <a href="" class="link-footer">(00) 0000-0000</a>
        </div>
        <div class="box-footer">
            <h5 class="title-footer">Endereço</h5>
            <a href="" class="link-footer">Paraíba - Brasil</a>
            <a href="" class="link-footer">João Pessoa - PB</a>
            <a href="" class="link-footer">Bairro XXXX</a>
            <a href="" class="link-footer">Rua XXXX, 000</a>
        </div>
        <div class="box-footer">
            <h5 class="title-footer">Redes Sociais</h5>
            <a href="" class="link-footer">Instagram</a>
            <a href="" class="link-footer">Facebook</a>
            <a href="" class="link-footer">TikTok</a>
            <a href="" class="link-footer">Telegram</a>
        </div>
        <div class="box-footer">
            <h5 class="title-footer">Suporte</h5>
            <a href="" class="link-footer">Fale Conosco</a>
            <a href="" class="link-footer">Reclame Aqui</a>
            <a href="" class="link-footer">WhatsApp</a>
            <a href="" class="link-footer">(00) 0000-0000</a>
        </div>
    </footer>
</body>
</html>