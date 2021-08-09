@extends('header')

@section('content')
        <div class="content-wrap">
            <div class="page-title">
                <h1>Cliente Empresa</h1>
                <p>Registro</p>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box frm-wrp">
                            <form class="cont-frm" method="post" action="{{url('adicionar')}}">
                            @csrf
                                <div class="row mrg20">
                                <input type="text" name="utilizador_id" id="utilizador_id" value="50dc845a-83e4-4db3-8705-5432ae7aaee3" hidden>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" name="nome" id="nome" placeholder="Nome da Empresa*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" name="contacto" id="contacto" placeholder="Contacto*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" name="endereco" id="endereco" placeholder="Endereço*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="email" name="email" id="email" placeholder="E-mail*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button type="submit"><i class="fa fa-paper-plane"></i>Submeter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Contant Wrap -->
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
</body>	

<!-- Mirrored from websroad.com/foxio/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:21 GMT -->
</html>

@endsection