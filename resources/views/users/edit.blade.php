@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Edición del usuario',
'activePage' => 'user',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Gestión de usuario') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}"
                                class="btn btn-primary btn-round">{{ __('Volver a la lista') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off"
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
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__(" Dirección de correo")}}</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            value="{{ old('email', auth()->user()->email) }}">
                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary btn-round">{{__('Guardar')}}</button>
                            </div>
                            <hr class="half-rule" />
                        </form>
                    </div>
                    <div class="card-header">
                        <h5 class="title">{{__("Contraseña")}}</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')
                            @include('alerts.success', ['key' => 'password_status'])
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label>{{__(" Contraseña actual")}}</label>
                                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="old_password" placeholder="{{ __('Contraseña actual') }}"
                                            type="password" required>
                                        @include('alerts.feedback', ['field' => 'old_password'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label>{{__(" Nueva Contraseña")}}</label>
                                        <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            placeholder="{{ __('Nueva Contraseña') }}" type="password" name="password"
                                            required>
                                        @include('alerts.feedback', ['field' => 'password'])
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label>{{__(" Confirmar nueva Contraseña")}}</label>
                                        <input class="form-control" placeholder="{{ __('Confirmar nueva Contraseña') }}"
                                            type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit"
                                    class="btn btn-primary btn-round ">{{__('Cambiar Contraseña')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
