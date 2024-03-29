@extends('layouts.app')

@section('title')
    <h1>Editar Movimento Financeiro</h1>
@endsection

@section('breadcrumb') 
    <li class="breadcrumb-item">
        <a href="{{url('/movimentos-financeiros')}}">Listagem de Movimentos Financeiros</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{url('/movimentos-financeiros/' . $movimentos_financeiro->id. '/edit')}}">Editar Movimento Financeiro</a>
    </li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Movimento Financeiro #{{ $movimentos_financeiro->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/movimentos-financeiros') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/movimentos-financeiros/' . $movimentos_financeiro->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('movimentos-financeiros.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
