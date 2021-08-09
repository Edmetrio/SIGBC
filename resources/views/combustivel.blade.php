@extends('header')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Combustível</h1>
        <p>Registro</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box frm-wrp">
                    <form class="cont-frm" method="post" action="{{url('combustivel')}}">
                        @csrf
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="Nome*">
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-2">
                                <label></label>
                                <div class="slct-box2">
                                    <select name="unidade_id" id="unidade_id">
                                        <option>Selecciona a Unidade</option>
                                        @foreach($unidade as $u)
                                        <option value="{{$u->id}}">{{$u->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="gender-box">
                                                <strong>Estado</strong>
                                                <span class="rdio-bx">
                                                    <input type="radio" name="gender" id="male1">
                                                    <label for="male1">Listar</label>
                                                </span>
                                                <span class="rdio-bx">
                                                    <input type="radio" name="gender" id="female1">
                                                    <label for="female1">Não Listar</label>
                                                </span>
                                            </div>
                                        </div> -->
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button type="submit"><i class="fa fa-paper-plane"></i>Registrar</button>
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

<!-- Mirrored from websroad.com/foxio/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 17:19:21 GMT -->

</html>

@endsection