@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Marca de producto',
'activePage' => 'Marcas',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__(" Perfil")}}</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('brandProducts.store') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('alerts.success')
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label>{{__(" Nombre")}}</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', auth()->user()->name) }}">
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>

                        {{-- Proveedor --}}
                        <div class="row">
                            <div class="col-md-7 pr-1">
                                <div class="form-group">
                                    <label for="exampleInputProvider1">{{__(" Proveedor favorito")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect04" name="provider_id">
                                            @foreach ($providers as $provider)
                                            <option selected>{{$provider->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button"
                                                href="{{ route('providers.create') }}">Agregar proveedor</button>
                                        </div>
                                    </div>
                                    @include('alerts.feedback', ['field' => 'provider'])
                                </div>
                            </div>
                        </div>

                        <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-round">{{__('Guardar')}}</button>
                        </div>
                        <hr class="half-rule" />
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                            <h5 class="title">{{ auth()->user()->name }}</h5>
                        </a>
                        <p class="description">
                            {{ auth()->user()->email }}
                        </p>
                    </div>
                </div>
                <hr>
                <div class="button-container">
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-square"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-square"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
