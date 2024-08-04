@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media-query.css">
    <script src="../js/script.js"></script>
@endsection

@section('title', 'Início')

@section('header')
    <a href="{{ route('pages-planos') }}" class="link-header">Planos</a>
    <a href="{{ route('pages-contato') }}" class="link-header">Contato</a>
    <a href="{{ route('pages-sobre') }}" class="link-header">Quem Somos?</a>
    <a href="" class="link-header">Login</a>
    <a href="" class="link-header">Registre-se</a>
@endsection

@section('main')
    <div class="background">
        <div class="text">
            <h2 class="title-text">Por que ir ao Dentista?</h2>
            <p class="text-text">
                Manter a saúde bucal em dia é fundamental para o bem-estar geral do nosso corpo. Uma das maneiras mais eficazes de garantir isso é através de visitas regulares ao dentista. O dentista não só cuida da saúde dos nossos dentes, mas também da saúde da nossa gengiva e da nossa boca como um todo.

                Ir ao dentista regularmente ajuda a prevenir problemas bucais, como cáries, gengivite e doenças periodontais. Além disso, o dentista pode identificar precocemente qualquer problema e tratá-lo antes que se agrave, o que pode resultar em tratamentos mais simples e menos invasivos.
            </p>
        </div>
        <div class="div-btn">
            <a href="{{ route('pages-planos') }}" class="btn btn-primary btn-back">Fazer meu plano</a>
        </div>
    </div>
    <div>
        <h1 class="title-1">Veja sobre <span class="title-2">nossos planos</span></h1>
    </div>

    <!-- Planos -->

    <section class="ex-planos">
        @if(count($planos) > 0)
            @foreach($planos as $plano)
                <div class="box-planos">
                    <div class="c-box-planos">
                        <img src="{{ $plano->foto }}" alt="" class="img-plano">
                        <h3 class="text-center">{{ $plano->plano }}</h3>
                        <span class="desc-planos">
                            {{ $plano->descricao }}
                        </span>
                        <button class="btn btn-back btn-primary">R${{ $plano->precoFormatado }}/{{ $plano->assinatura }}</button>
                        <span class="line-box"></span>
                        <a href="" class="text-decoration-none">
                            <button class="btn btn-back btn-success">Entrar em Contato</button>
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="msg-not-found">
                <div class="c-msg-not-found">
                    <h3 class="text-primary">Sem planos disponíveis</h3>
                </div>
            </div>
        @endif
    </section>

    <!-- Horários -->

    <span class="line"></span>
    <div>
        <h1 class="title-1">Marque sua <span class="title-2">consulta conosco</span></h1>
    </div>
    <section class="ex-planos">
        <div class="calendar">
            <div class="c-box-calendar">
                <h2>Vaga mais próxima</h2>
                <span></span>
            </div>
        </div>
    </section>

    <!-- Tratamentos -->

    <span class="line"></span>
    <h1 class="title-1">Conheça <span class="title-2">nossos tratamentos</span></h1>
    <section class="ex-planos">
        @if(count($tratamentos) > 0)
            @foreach($tratamentos as $tratamento)
                <div class="tratamentos">
                    <div class="c-tratamentos">
                        <img src="{{ $tratamento->photo }}" class="img-tratamentos">
                        <h4 class="text-center">{{ $tratamento->title }}</h4>
                        <p class="text-tratamentos">
                            {{ $tratamento->descricao }}
                        </p>
                        <button class="btn btn-back btn-primary">Saiba Mais</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="msg-not-found">
                <div class="c-msg-not-found">
                    <h3 class="text-primary">Tratamentos indisponíveis</h3>
                </div>
            </div>
        @endif
    </section>

    <!-- Informacoes sobre a clínica -->

    <span class="line"></span>
    <h1 class="title-1">Veja mais <span class="title-2">sobre nós</span></h1>
    <section class="ex-planos bg-white info mb-5">
        <div class="box-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
            </svg>
            <p>A melhor do Brasil</p>
        </div>
        <div class="box-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
            </svg>
            <p>Melhores profissionais</p>
        </div>
        <div class="box-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
            </svg>
            <p>Suporte 24H</p>
        </div>
    </section>

    <!-- Localizaçao da clínica -->

    <h1 class="title-1">Encontre nossa <span class="title-2">clínica</span></h1>
    <section class="ex-planos">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15834.609520978978!2d-34.89551885!3d-7.1661236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace9ad661b549f%3A0x7e6b4ccd0e17422!2sBeMais%20Supermercados%20-%20Oitizeiro!5e0!3m2!1spt-BR!2sbr!4v1721836421903!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa"></iframe>
    </section>
@endsection