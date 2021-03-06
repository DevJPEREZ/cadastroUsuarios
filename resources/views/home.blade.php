@extends('templates.template')
@section('title','Inicio')

@section('titulo','Tela Inicial')
@section('icone','fa fa-home')

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <h4>Total Contas</h4>
                <p><b>{{ $contas }}</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
                <h4>Contas Ativas</h4>
                <p><b>{{ $ativas }}</b></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="embed-responsive embed-responsive-16by9">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="embed-responsive embed-responsive-16by9">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">&nbsp;
        </div>
    </div>
</div>

@endsection