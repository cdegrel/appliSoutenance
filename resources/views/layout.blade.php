<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Application | @yield('title')</title>

    <meta charset="utf-8"/>
    <meta name="author" content="Cédric DEGRELLE, Gaëtan CRETIN, Valentin BONNAL, Thomas LEHMANN, Thibaud PERRIN"/>
    <meta name="description" content="Application d'aide à l'évaluation de prestations orales"/>
    <meta name="keywords" content="evaluation, soutenance, projet, etudiants">

    <!-- Css -->
    {!! Html::style('/assets/css/menu.css') !!}
    {!! Html::style('/assets/css/auth.css') !!}
    {!! Html::style('/assets/css/style.css') !!}
    @yield('css')

    <!-- Jquery -->
    {!! Html::script('/assets/js/jquery.js') !!}
</head>

<body>

<!-- Contenu -->
<div class="container">
    @yield('contenu')
</div>

<!-- Js -->
{!! Html::script('/assets/js/auth.js') !!}
@yield('js')
</body>
</html>
