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
                    <h4>Perfil Empresarial</h4>
                    <div class="content-inner remove-ext5">
                        <div class="wdgt-box profile-wrp">
                            <div class="row mrg">
                                <div class="col-md-3 col-sm-12 col-lg-3">
                                    <div class="profile-info-wrp">
                                        <div class="insta-wrp thm-bg text-center">
                                            <i class="fa fa-pencil edit-btn"></i>
                                            <span><img src="assets/images/resources/insta-dp.jpg" alt="insta-dp.jpg"><span class="usr-sts onln"></span></span>
                                            <div class="insta-inf">
                                                <h2>{{$utilizador->nome}}</h2>
                                                <span class="desg">EMPRESA<a href="#" title="">{{$utilizador->email}}</a></span>
                                                <div class="prf-btns">
                                                    <a href="#" title=""><i class="fa fa-weixin"></i></a>
                                                    <a href="#" title=""><i class="fa fa-phone"></i></a>
                                                    <a href="#" title=""><i class="fa fa-envelope-o"></i>Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="usr-abut-wrp">
                                            <div class="usr-cnt-inf">
                                                <h5 class="prf-edit-tl">Informação de Contacto<i class="fa fa-pencil edit-btn"></i></h5>
                                                <ul class="usr-cnt-inf-lst">
                                                    <li><i class="fa fa-home"></i><strong>Endereço:</strong>{{$utilizador->nome}}</li>
                                                    <li><i class="fa fa-phone"></i><strong>Contacto:</strong>{{$utilizador->contacto}}</li>
                                                    <li><i class="fa fa-envelope"></i><strong>Email ID:</strong><a href="#" title="">{{$utilizador->email}}</a></li>
                                                </ul>
                                            </div>
                                            <div class="usr-prf">
                                                <a class="brd-rd5 btn scl-btn2 facebook" href="https://firsteducation.edu.mz/" title=""><i class="fa fa-facebook"></i></a>
                                                <a class="brd-rd5 btn scl-btn2 twitter" href="https://firsteducation.edu.mz/" title=""><i class="fa fa-twitter"></i></a>
                                                <a class="brd-rd5 btn scl-btn2 google" href="https://firsteducation.edu.mz/s" title=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12 col-lg-9">
                                    <div class="usr-actvty-wrp">
                                        <h4>Lista de Automóveis<span class="badge">{{$numero}} Automóveis</span></h4>
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