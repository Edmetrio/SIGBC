@extends('header')

@section('content')
<div class="content-wrap">
    <div class="page-title">
        <h1>Relatório das Vendas</h1>
        <p>Registro</p>
    </div>
    <div class="content-inner remove-ext5">
        <div class="row mrg20">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="usr-actvty-wrp">
                    <h4>Lista de Automóveis<span class="badge">{{$numero}} Automóveis</span></h4>
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Matrícula</th>
                                    <th scope="col">Combustível</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Unidade</th>
                                    <th scope="col">Utilizador</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($historico as $h)
                                <tr>
                                    <td>{{$h->emnome}}</td>
                                    <td>{{$h->autmat}}</td>
                                    <td>{{$h->combnome}}</td>
                                    <td>{{$h->quantidade}}</td>
                                    <td>{{$h->uninome}}</td>
                                    <td>{{$h->utinome}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="prf-btns">
                        <a href="#" title=""><i class="fa fa-envelope-o"></i>Gerar</a>
                    </div>
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