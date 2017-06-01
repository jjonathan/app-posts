@extends('layouts.app')

@section('content')
<div class="content content-comerc">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="iframe-weather">
                            <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="200" src="http://www.tempoagora.com.br/ta-widgets?cidades=SaoPaulo-SP&amp;tipo=horizontal"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Panorama Comerc</div>
                    <div class="panel-body">
                        <div id="iframe-weather">
                            <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="200" src="http://www.tempoagora.com.br/ta-widgets?cidades=SaoPaulo-SP&amp;tipo=horizontal"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
