<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from websroad.com/foxio/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>SIGBC-SISTEMA INTEGRADO DE GESTÃO BOMBAS DE COMBUSTÍVEL</title>

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color.css" title="theme-color1">
    <link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="theme-color2">
    <link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="theme-color3">
    <link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="theme-color4">
    <link rel="alternate stylesheet" href="assets/css/colors/color5.css" title="theme-color5">
    <link rel="alternate stylesheet" href="assets/css/colors/color6.css" title="theme-color6">
    <link rel="alternate stylesheet" href="assets/css/colors/color7.css" title="theme-color7">
    <link rel="alternate stylesheet" href="assets/css/colors/color8.css" title="theme-color8">
    <link rel="alternate stylesheet" href="assets/css/colors/color9.css" title="theme-color9">
</head>
<body class="gray-bg">
    <main class="header-expand">
        <div class="sidepanel">
            <span class="sidebanel-btn"><i class="icon ion-ios-cog fa-spin"></i></span>
            <div class="sidepanel-inner">
                <h6>Tema</h6>
                <div class="option-list">
                    <a class="light-btn applied" href="#" title="">Luz</a>
                    <a class="semi-dark-btn" href="#" title="">Pouca Luz</a>
                    <a class="dark-btn" href="#" title="">Escuro</a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Tema do Sistema</h6>
                <div class="option-list theme-color-options">
                    <a class="theme-color1" href="#" title="" onclick="setActiveStyleSheet('theme-color1'); return false;"></a>
                    <a class="theme-color2" href="#" title="" onclick="setActiveStyleSheet('theme-color2'); return false;"></a>
                    <a class="theme-color3" href="#" title="" onclick="setActiveStyleSheet('theme-color3'); return false;"></a>
                    <a class="theme-color4" href="#" title="" onclick="setActiveStyleSheet('theme-color4'); return false;"></a>
                    <a class="theme-color5" href="#" title="" onclick="setActiveStyleSheet('theme-color5'); return false;"></a>
                    <a class="theme-color6" href="#" title="" onclick="setActiveStyleSheet('theme-color6'); return false;"></a>
                    <a class="theme-color7" href="#" title="" onclick="setActiveStyleSheet('theme-color7'); return false;"></a>
                    <a class="theme-color8" href="#" title="" onclick="setActiveStyleSheet('theme-color8'); return false;"></a>
                    <a class="theme-color9" href="#" title="" onclick="setActiveStyleSheet('theme-color9'); return false;"></a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Barra Lateral</h6>
                <div class="option-list">
                    <a class="mini-header-btn" href="#" title="">Mini Cabeçalho</a>
                    <a class="full-header-btn applied" href="#" title="">Cabeçalho Completo</a>
                </div>
            </div>
        </div><!-- Side Panel -->
        <div class="topbar">
            <div class="logo"><a href="dashboard.html" title="Logo"><img src="assets/images/logo.png" alt="logo.png"></a></div><!-- Logo -->
            <span class="menu-btn"><i class="fa fa-align-right"></i></span>
            <form class="topbar-search">
                <input type="text" placeholder="Pesquisar">
                <button type="submit"><i class="icon ion-android-search"></i></button>
            </form><!-- Topbar Search -->
        </div><!-- Topbar -->
        <header class="dark-bg">
            <div class="usr-inf" style="background-image: url(assets/images/usr-inf-bg.jpg);">
                <div class="usr-inf-inner">
                    <span class="usr-img"><img src="assets/images/resources/user-im.jpg" alt="user-img.jpg"><i class="usr-sts onln"></i></span>
                    <div class="usr-nm-desg">
                        <h4>First</h4>
                        <span>Empresarial</span>
                    </div>
                </div>
                <p> Bem-Vindo ao sistema integrado de gestão bombas de combustível </p>
                <div class="usr-inf-btns">
                    <a class="usr-msg" href="#" title="">Entrar</a>
                    <a class="usr-log" href="#" title="">Sair</a>
                </div>
                
            </div><!-- User Info -->
            <nav>
                <ul>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-android-contact"></i><span>Consultas</span></a>
                        <ul class="children">
                            <li><a href="{{url('empresarial')}}" title="">Lista de Automóvel</a></li>
                            <li><a href="{{url('historico')}}" title="">Histórico de Compras</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Conta</span></a>
                        <ul class="children">
                            <li><a href="{{url('perfil')}}" title="">Perfil</a></li>
                            <li><a href="{{url('')}}" title="">Alterar Palavra-Passe</a></li>
                            <li><a href="{{url('')}}" title="">Terminar Sessão</a></li><hr>
                            <li><a href="{{url('')}}" title="">Políticas e Privacidade</a></li>
                            <li><a href="{{url('')}}" title="">Contacte-nos</a></li>
                            <li><a href="{{url('')}}" title="">Sobre</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Nav -->
        </header><!-- Header -->
        @yield('content')
