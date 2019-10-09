@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Marca</div>
                <div class="card-body">
                    {!! Form::model($brandProduct, ['route' => ['brandProducts.update', $brandProduct->id],
                    'method' => 'PUT']) !!}

                        @include('brandProducts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
