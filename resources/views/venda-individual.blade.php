@extends('header1')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Venda Individual</h1>
        <p>Vender</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box frm-wrp frm-wd-rd40">
                    <form class="cont-frm" method="post" action="{{url('vendaindividual')}}">
                        @csrf
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Scan/Número do Cartão</label>
                                <input type="text" name="cartao" id="cartao" placeholder="0000000000">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Tipo de Combustível</label>
                                <div class="slct-box2">
                                    <select name="combustivel_id" id="combustivel_id">
                                        <option>Seleccione o tipo de Combustível</option>
                                        @foreach($combustivel as $c)
                                        <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Valor</label>
                                <input type="text" name="valor" id="valor" placeholder="12.000,00MT">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade" id="quantidade" placeholder="20">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <label>Unidade</label>
                                <div class="slct-box2">
                                    <select name="unidade_id" id="unidade_id">
                                        <option>Seleccione a Unidade</option>
                                        @foreach($unidade as $u)
                                        <option value="{{$u->id}}">{{$u->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Litros Residuais</label>
                                <input type="text" disabled placeholder="2000">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Utilizador</label>
                                <input type="text" name="utilizador_id" value="50dc845a-83e4-4db3-8705-5432ae7aaee3">
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