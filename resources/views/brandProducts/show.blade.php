@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Marca</div>
                <div class="card-body">
                    <p><strong>Nombre  </strong>{{ $brandProduct->name }}</p>
                    <p><strong>Descripción  </strong>{{ $brandProduct->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
