@extends('header')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Cadastrar Automóvel</h1>
        <p>Registro</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box frm-wrp frm-wd-rd40">
                    <div class="wdgt-titl">
                    </div>
                    <form class="cont-frm" method="post" action="{{url('clieautomovel')}}">
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
                                <input type="text" name="matricula" id="matricula" placeholder="AAA 000 MCs">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Tipo Combustível</label>
                                <div class="slct-box2">
                                    <select name="combustivel_id" id="combustivel_id">
                                        <option>Seleccione o Combustível</option>
                                        @foreach($combustivel as $c)
                                        <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade" id="quantidade" placeholder="12LT">
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/custom-scripts.js"></script>
</body>

</html>

@endsection