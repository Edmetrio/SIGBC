@extends('header1')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Venda Empresa</h1>
        <p>Vender</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box frm-wrp frm-wd-rd40">
                    <form class="cont-frm" method="post" action="{{url('vendaempresa')}}">
                        @csrf
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Empresa</label>
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
                                <label>Matrícula</label>
                                <div class="slct-box2">
                                    <select name="automovel_id" id="automovel_id">
                                        <option value="0">Seleccione a Província</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Valor</label>
                                <input type="text" name="valor" id="valor" disabled placeholder="12.000,00MT">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Quantidade</label>
                                <input type="text" name="quantidade" id="quantidade" disabled placeholder="2">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Combustível</label>
                                <input type="text" disabled placeholder="Gasóleo">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Unidade</label>
                                <div class="slct-box2">
                                    <select name="automovel_id" id="automovel_id">
                                        <option>Seleccione a Matrícula</option>
                                        @foreach($unidade as $u)
                                        <option value="$u->id">{{$u->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button type="submit"><i class="fa fa-paper-plane"></i>Finalizar</button>
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