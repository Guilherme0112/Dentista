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
    <header>
        @yield('header')
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <span style="color: white">&copyGuiMendS</span>
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
        </div>
    </footer>
</body>
</html>