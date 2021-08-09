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
                        <form class="cont-frm" method="post" action="{{url('recarregamento')}}">
                            @csrf
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Nome da Empresa</label>
                                        <div class="slct-box2">
                                            <select name="individual_id" id="individual_id">
                                            <option>Seleccione Cliente Individual</option>
                                            @foreach($recarregamento as $e)
                                                <option value="{{$e->id}}">{{$e->nome}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <label>Montantes</label>
                                        <input type="text" name="valor" id="valor" placeholder="1200*">
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