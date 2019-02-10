@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-1">
                <card titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <card titulo="Conteúdo 1" cor="warning">
                                Teste
                            </card>
                        </div>
                        <div class="col-md-4">
                            <card titulo="Conteúdo 2">
                                Teste
                            </card>
                        </div>
                        <div class="col-md-4">
                            <card titulo="Conteúdo 3">
                                Teste
                            </card>
                        </div>
                    </div>
                </card>
            </div>
            </div>
        </div>
    </div>
@endsection
