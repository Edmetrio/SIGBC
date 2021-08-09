@extends('headerempresa')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Cliente Empresarial</h1>
        <p>Conta</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="wdgt-box frm-wrp frm-wd-rd40">
                    <h4>Lista de Automóveis</h4>
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Matrícula</th>
                                    <th scope="col">Combustível</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Unidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($automovel as $a)
                                <tr>
                                    <td>{{$a->matricula}}</td>
                                    <td>{{$a->combnome}}</td>
                                    <td>{{$a->quantidade}}</td>
                                    <td>{{$a->uninome}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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