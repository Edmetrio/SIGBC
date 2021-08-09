<div>
    <div class="content-wrap">
        <div class="page-title">
            <h1>Venda Empresa</h1>
            <p>Vender</p>
        </div>
        <div class="content-inner remove-ext5">
            <div class="row mrg20">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="wdgt-box frm-wrp frm-wd-rd40">
                        <form class="cont-frm" method="post" action="{{url('venda')}}">
                            @csrf
                            <div class="row mrg20">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <label>Empresa</label>
                                    <div class="slct-box2">
                                        <select wire:model="selectedEmpresa" name="empresa_id" id="empresa_id">
                                            <option>Seleccione a Empresa</option>
                                            @foreach($empresa as $e)
                                            <option value="{{$e->id}}">{{$e->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    @if (!is_null($selectedEmpresa))
                                    <label>Matrícula</label>
                                    <div class="slct-box2">
                                        <select wire:model="selectedAutomovel" name="matricula_id" id="matricula_id">
                                            <option>Seleccione a Matrícula</option>
                                            @foreach($automovel as $a)
                                            <option value="{{$a->id}}">{{$a->matricula}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    @if (!is_null($selectedAutomovel))
                                    <label>Combustível</label>
                                    @foreach($combustivel as $q)
                                    <input type="text" name="combnome" id="combnome" value="{{$q->combnome}}" style="font-weight: bold; color: #1C5C3D; text-align: center; font-size: 16px;">
                                    @endforeach
                                    @endif
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    @if (!is_null($selectedAutomovel))
                                    <label>Quantidade</label>
                                    @foreach($combustivel as $q)
                                    <input type="text" name="quantidade" value="{{$q->quantidade}}" style="font-weight: bold; color: #1C5C3D; text-align: center; font-size: 16px;" />
                                    @endforeach
                                    @endif
                                </div>

                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    @if (!is_null($selectedAutomovel))
                                    <label>Unidade</label>
                                    @foreach($combustivel as $q)
                                    <input type="text" name="unidade" value="{{$q->uninome}}" style="font-weight: bold; color: #1C5C3D; text-align: center; font-size: 16px;">
                                    @endforeach
                                    @endif
                                </div>
                                
                                <div hidden>
                                    <input type="text" name="utilizador_id" value="50dc845a-83e4-4db3-8705-5432ae7aaee3" />
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
    </div>
</div>