<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>SIGBC-SISTEMA INTEGRADO DE GESTÃO BOMBAS DE COMBUSTÍVEL</title>

    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
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

    @livewireStyles
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
            <ul class="topbar-lists">
                <li>
                    <a class="setng-btn" href="#" title=""><i class="icon ion-android-settings"></i></a>
                    <div class="set-lst">
                        <h4>Configurações Gerais</h4>
                        <ul class="sett-lst">
                            <li>
                                <span class="chck-bx">
                                    <input id="set1" type="checkbox">
                                    <label for="set1">Relatório de uso do painel</label>
                                </span>
                                <i>Informações de configurações gerais</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set2" type="checkbox">
                                    <label for="set2">E-mail</label>
                                </span>
                                <i>Informações de configurações gerais</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set3" type="checkbox">
                                    <label for="set3">Nome do Bombeiro</label>
                                </span>
                                <i>Informações de configurações gerais</i>
                            </li>
                        </ul>
                        <h4>Configurações do Chat</h4>
                        <ul>
                            <li>
                                <span class="chck-bx">
                                    <input id="set4" type="checkbox">
                                    <label for="set4">Mostre-me online</label>
                                </span>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set5" type="checkbox">
                                    <label for="set5">Desligar notificações</label>
                                </span>
                            </li>
                        </ul>
                        <a class="btn-danger" href="#" title=""><i class="fa fa-trash"></i>Deletar histórico de Chat</a>
                    </div>
                </li>
                <li>
                    <a class="mail-btn" href="#" title=""><i class="icon ion-android-drafts"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>Você tem </span> 4 Mensagens</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb1.jpg" alt="acti-thmb1.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 1</a></h5><span></span>
                                    <i>Mensagem</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb2.jpg" alt="acti-thmb2.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 2</a></h5><span></span>
                                    <i>Mensagem</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 3</a></h5><span></span>
                                    <i>Mensagem</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 4</a></h5><span></span>
                                    <i>Mensagem</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">VER TUDO</a>
                    </div>
                </li>
                <li>
                    <a class="cnt-btn" href="#" title=""><i class="icon ion-android-contacts"></i></a>
                    <div class="cnt-lst">
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb1.jpg" alt="acti-thmb1.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Bombeiro 1</a></h5>
                                <span>Periodo da Manhã</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb2.jpg" lt="acti-thmb2.html">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Bombeiro 2</a></h5>
                                <span>Periodo da Manhã</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Bombeiro 3</a></h5>
                                <span>Periodo da Tarde</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Bombeiro 4</a></h5>
                                <span>Periodo da Noite</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="noti-btn" href="#" title=""><i class="icon ion-ios-bell"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>Você tem </span> 4 Notificações</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <span class="brd-rd50 thm-bg"><i class="fa fa-cog"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 1</a></h5><span></span>
                                    <i>Entrou</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-info"><i class="icon ion-ios-person"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 2</a></h5><span></span>
                                    <i>Saiu</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-warning"><i class="icon ion-thumbsup"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 3</a></h5><span></span>
                                    <i>Efetuou pagamento</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-danger"><i class="icon ion-information-circled"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Bombeiro 3</a></h5><span></span>
                                    <i>Entrou</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">Ver Tudo</a>
                    </div>
                </li>
            </ul><!-- Topbar Lists -->
        </div><!-- Topbar -->
        <header class="dark-bg">
            <div class="usr-inf" style="background-image: url(assets/images/mail-usr-img.jpg);">
                <div class="usr-inf-inner">
                    <span class="usr-img"><img src="assets/images/resources/user-im.jpg" alt="user-img.jpg"><i class="usr-sts onln"></i></span>
                    <div class="usr-nm-desg">
                        <h4>Carlos Vieira</h4>
                        <span>Bombeiro</span>
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
                            <li><a href="Venda-Empresa.html" title="">Consultas</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>Abastecimento</span></a>
                        <ul class="children">
                            <li><a href="{{url('vendaempresa')}}" title="">Venda Empresa</a></li>
                            <li><a href="{{url('vendaindividual')}}" title="">Venda Individual</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Nav -->
        </header><!-- Header -->
            <div class="usr-inf">
                @livewire('venda')
            </div>
        <footer>
            <p>Copyright <a href="#" title="">SIGBC</a> &copy; 2021</p>
            <ul class="btm-lnks">
                <li><a href="#" title="">Dashboard</a></li>
                <li><a href="#" title="">Widgets</a></li>
                <li><a href="#" title="">About us</a></li>
                <li><a href="#" title="">Contact us</a></li>
            </ul>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom-scripts.js')}}"></script>

    @livewireScripts
</body>

<!-- Mirrored from websroad.com/foxio/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:21 GMT -->

</html>