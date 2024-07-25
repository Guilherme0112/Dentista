@extends('layouts.app')

@section('title', 'Sobre nós')

@section('links')
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/sobre.css">
<link rel="stylesheet" href="../css/media-query.css">
@endsection

@section('header')
<a href="{{ route('pages-index') }}" class="link-header">Início</a><a href="{{ route('pages-planos') }}" class="link-header">Planos</a>
<a href="{{ route('pages-contato') }}" class="link-header">Contato</a>
<a href="" class="link-header">Login</a>
<a href="" class="link-header">Registre-se</a>
@endsection

@section('main')
<div class="text">
    <h2>Clínica Odontológica</h2>
    <p>
        Na nossa clínica Odontológica, acreditamos que um sorriso saudável e radiante é a chave para uma vida mais feliz e confiante. Por isso, nossa equipe de dentistas experientes e apaixonados se dedica a oferecer atendimento odontológico de excelência para toda a família, em um ambiente acolhedor e amigável.
    </p>
    <h2>Nosso Compromisso:</h2>
    <p>
        Cuidado Personalizado: Cada paciente é único, e por isso, oferecemos planos de tratamento individualizados, que levam em consideração suas necessidades e expectativas.
        Tecnologia de Ponta: Contamos com equipamentos odontológicos modernos e de última geração para garantir procedimentos precisos, rápidos e confortáveis.
        Profissionais Qualificados: Nossa equipe de dentistas é formada por profissionais altamente qualificados e experientes, que participam constantemente de cursos de atualização para oferecer as melhores técnicas e procedimentos odontológicos.
        Ambiente Acolhedor: Acreditamos que um ambiente agradável faz toda a diferença. Por isso, nossa clínica é projetada para proporcionar conforto e tranquilidade aos nossos pacientes.
        Atendimento Humanizado: Priorizamos o bem-estar de nossos pacientes, oferecendo um atendimento humanizado e personalizado, com foco em construir relações de confiança e respeito mútuo.
    </p>
    <h2>Serviços Odontológicos Completos:</h2>
    <p>
        Oferecemos uma ampla gama de serviços odontológicos para atender às necessidades de toda a família, desde procedimentos preventivos até tratamentos complexos:

        Odontologia Geral: Limpeza dental, exames periódicos, obturações, extrações, radiografias.
        Odontologia Estética: Clareamento dental, facetas de porcelana, lentes de contato dental, botox e preenchimento facial.
        Odontologia Infantil: Prevenção da cárie, tratamento de cáries infantis, ortodontia infantil.
        Ortodontia: Aparelhos ortodônticos para crianças, adolescentes e adultos.
        Implantodontia: Restauração da dentição com implantes dentários.
        Cirurgias Bucais: Remoção de cistos, sisos e outros procedimentos cirúrgicos.
        Prótese Dentária: Coroas, pontes, próteses dentais removíveis e fixas.
    </p>
    <h2>Mais do que um Sorriso:</h2>
    <p>

        Na nossa clínica Odontológica, acreditamos que o cuidado com a saúde bucal é fundamental para o bem-estar geral do paciente. Por isso, oferecemos um atendimento completo que vai além dos procedimentos odontológicos, com foco na promoção da saúde bucal e na prevenção de doenças.

        Venha nos Conhecer:

        Agende sua consulta e experimente a diferença de um atendimento odontológico de qualidade, em um ambiente acolhedor e amigável.
    </p>
</div>
@endsection