@extends('header')

@section('content')
        <div class="content-wrap">
            <div class="page-title">
                <h1>Contrato</h1>
                <p>Registro</p>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box frm-wrp">
                        <form class="cont-frm" method="post" action="{{url('contrato')}}">
                            @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Nome da Empresa</label>
                                        <div class="slct-box2">
                                            <select name="empresa_id" id="empresa_id">
                                            <option>Seleccione a Empresa</option>
                                            @foreach($empresa as $e)
                                                <option value="{{$e->id}}">{{$e->nome}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <label>Data de Registro</label>
                                        <input type="date" name="datainicio" id="datainicio" placeholder="Data de Registro*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Vencimento</label>
                                        <input type="date" name="vencimento" id="vencimento" placeholder="vencimento*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Data de Pagamento</label>
                                        <input type="date" name="datapagamento" id="datapagamento" placeholder="Data de Pagamento*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Tipo de Pagamento</label>
                                        <div class="slct-box2">
                                            <select name="pagamento_id" id="pagamento_id">
                                                <option>Seleccione o T/Pagamento</option>
                                                @foreach($pagamento as $p)
                                                <option value="{{$p->id}}">{{$p->nome}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Montante</label>
                                        <input type="number" name="saldo" id="saldo" placeholder="Saldo">
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
            <p>Copyright <a href="#" title="">SGIBC</a> &copy; 2021</p>
            <ul class="btm-lnks">
                <li><a href="#" title="">Dashboard</a></li>
                <li><a href="#" title="">Widgets</a></li>
                <li><a href="#" title="">About us</a></li>
                <li><a href="#" title="">Contact us</a></li>
            </ul>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>	

<!-- Mirrored from websroad.com/foxio/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:21 GMT -->
</html>

@endsection