@extends('layouts.app', [
'namePage' => 'Edición de proveedor',
'class' => 'sidebar-mini',
'activePage' => 'pageProvider',
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
                            <h3 class="mb-0">{{ __('Edición del proveedor') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('providers.index') }}"
                                class="btn btn-primary btn-round">{{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="put" action="{{ route('providers.update', $provider)}}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del proveedor') }}</h6>
                        <div class="pl-lg-4">

                            <div class="row">
                                {{-- Nombre --}}
                                <div class="col-sm-3 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nombre') }}" value="{{ $provider->name }}" required
                                        autofocus>

                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                {{-- Apellido --}}
                                <div class="col-sm-3 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-lastName">{{ __('Apellido') }}</label>
                                    <input name="lastName" id="input-lastName"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Apellido') }}" value="{{ $provider->lastName }}">

                                    @include('alerts.feedback', ['field' => 'lastName'])
                                </div>

                                {{-- Compañia --}}
                                <div class="col-sm-3 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-company">{{ __('Compañia') }}</label>
                                    <input name="company" id="input-company"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Compañia') }}" value="{{ $provider->company }}">

                                    @include('alerts.feedback', ['field' => 'company'])
                                </div>

                                {{-- Email --}}
                                <div class="col-sm-2 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-email">{{ __('Correo electrónico') }}</label>
                                    <input name="email" id="input-email"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('ejemplo@proveedor.com') }}" value="{{ $provider->email }}">

                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>

                            </div>
                            <div class="row">

                                {{-- Teléfonos --}}
                                <div class="col-sm-2 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone1">{{ __('Teléfono 1') }}</label>
                                    <input name="phone1" id="input-phone1"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Teléfono 1') }}" value="{{ $provider->phone1 }}">

                                    @include('alerts.feedback', ['field' => 'phone1'])
                                </div>
                                <div class="col-sm-2 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-phone2">{{ __('Teléfono 2') }}</label>
                                    <input name="phone2" id="input-phone2"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Teléfono 2') }}" value="{{ $provider->phone2 }}">

                                    @include('alerts.feedback', ['field' => 'phone2'])
                                </div>
                                {{-- Observaciones --}}
                                <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="others">{{ __('Información adicional acerca del proveedor') }}</label>
                                    <textarea name="others" id="others" rows="1"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"></textarea>
                                    @include('alerts.feedback', ['field' => 'others'])
                                </div>
                            </div>

                            <hr style="border:5px;">
                            <hr style="border-color:blue;">

                            {{-- Dirección --}}
                            <div class="row">
                                {{-- Designación --}}
                                <div class="col-sm-2 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="nameAddress">{{ __('Designación') }}</label>
                                    <input name="nameAddress" id="nameAddress"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        value="{{ $address->nameAddress }}">

                                    @include('alerts.feedback', ['field' => 'nameAddress'])
                                </div>

                                {{-- Ciudad --}}
                                <div class="col-sm-2 form-group">
                                    <label for="city_id">{{__(" Ciudad")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="city_id" name="city_id">
                                            @foreach ($cities as $city)
                                            <option value="{{$city->id}}" @if($address->City->id==$city->id) selected
                                                @endif>{{$city->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    @include('alerts.feedback', ['field' => 'city_id'])
                                </div>

                                {{-- Barrio --}}
                                <div class="col-sm-2 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-district">{{ __('Barrio') }}</label>
                                    <input name="district" id="input-district"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        value="{{ $address->district }}">

                                    @include('alerts.feedback', ['field' => 'district'])
                                </div>

                                {{-- Calle --}}
                                <div class="col-sm-2 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-street">{{ __('Calle') }}</label>
                                    <input name="street" id="input-street"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        value="{{ $address->street }}">

                                    @include('alerts.feedback', ['field' => 'street'])
                                </div>

                                {{-- Altura --}}
                                <div class="col-md-1 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-number">{{ __('Altura') }}</label>
                                    <input name="number" id="input-number"
                                        class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}"
                                        value="{{ $address->number }}">

                                    @include('alerts.feedback', ['field' => 'number'])
                                </div>

                                {{-- Piso --}}
                                <div class="col-md-1 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-floor">{{ __('Piso') }}</label>
                                    <input name="floor" id="input-floor"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        value="{{ $address->floor }}">

                                    @include('alerts.feedback', ['field' => 'floor'])
                                </div>

                                {{-- Departamento --}}
                                <div class="col-md-1 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-dpto">{{ __('Departamento') }}</label>
                                    <input name="dpto" id="input-dpto"
                                        class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}"
                                        value="{{ $address->dpto }}">

                                    @include('alerts.feedback', ['field' => 'dpto'])
                                </div>

                            </div>

                            <div class="row">

                                {{-- Observaciones --}}
                                <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="observations">{{ __('Datos adicionales') }}</label>
                                    <textarea name="observations" id="observations" rows="2"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">{{$address->observations}}</textarea>

                                    @include('alerts.feedback', ['field' => 'observations'])
                                </div>

                            </div>
                            <div class="footer">
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
