<div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModal" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            {{-- Cabecera del modal --}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- Body del modal --}}
            <div class="modal-body">
                <form method="POST" action="{{ route('providers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">{{ __('Información del proveedor') }}</h6>
                    <div class="pl-lg-4">

                        <div class="row">
                            {{-- Nombre --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-name"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Nombre') }}" required autofocus>
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            {{-- Apellido --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-lastName">{{ __('Apellido') }}</label>
                                <input name="lastName" id="input-lastName"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Apellido') }}">
                                @include('alerts.feedback', ['field' => 'lastName'])
                            </div>

                            {{-- Compañia --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-company">{{ __('Compañia') }}</label>
                                <input name="company" id="input-company"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Compañia') }}">
                                @include('alerts.feedback', ['field' => 'company'])
                            </div>
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label"
                                    for="input-email">{{ __('Correo electrónico') }}</label>
                                <input name="email" id="input-email"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('ejemplo@proveedor.com') }}">

                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            {{-- Teléfonos --}}
                            <div class="col-sm-4 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-phone1">{{ __('Teléfono 1') }}</label>
                                <input name="phone1" id="input-phone1"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Teléfono 1') }}">

                                @include('alerts.feedback', ['field' => 'phone1'])
                            </div>
                            <div class="col-sm-4 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-phone2">{{ __('Teléfono 2') }}</label>
                                <input name="phone2" id="input-phone2"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Teléfono 2') }}">

                                @include('alerts.feedback', ['field' => 'phone2'])
                            </div>
                        </div>
                        <div class="row">

                            {{-- Observaciones --}}
                            <div class="col-sm-12 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label"
                                    for="others">{{ __('Información adicional acerca del proveedor') }}</label>
                                <textarea name="others" id="others" rows="1"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"></textarea>
                                @include('alerts.feedback', ['field' => 'others'])
                            </div>
                        </div>
                    </div>

                    {{-- Linea divisoria en gris claro --}}
                    <hr style="border:5px;">
                    <hr style="border-color:#D3D3D3;">
                    {{-- Fin de linea --}}

                    {{-- Dirección --}}
                    <h6 class="heading-small text-muted mb-4">{{ __('Dirección del proveedor') }}</h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            {{-- Nombre --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="nameAddress">{{ __('Designación') }}</label>
                                <input name="nameAddress" id="nameAddress"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">

                                @include('alerts.feedback', ['field' => 'nameAddress'])
                            </div>

                            {{-- Ciudad --}}
                            <div class="col-sm-4 form-group">
                                <label for="city_id">{{__(" Ciudad")}}</label>
                                <div class="input-group">
                                    <select class="custom-select" id="city_id" name="city_id">
                                        @foreach ($cities as $city)
                                        <option value="{{$city->id}}"> {{$city->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                @include('alerts.feedback', ['field' => 'city_id'])
                            </div>

                            {{-- Barrio --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-district">{{ __('Barrio') }}</label>
                                <input name="district" id="input-district"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'district'])
                            </div>

                        </div>
                        <div class="row">
                            {{-- Calle --}}
                            <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-street">{{ __('Calle') }}</label>
                                <input name="street" id="input-street"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'street'])
                            </div>

                            {{-- Altura --}}
                            <div class="col-md-2 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-number">{{ __('Altura') }}</label>
                                <input name="number" id="input-number"
                                    class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'number'])
                            </div>

                            {{-- Piso --}}
                            <div class="col-md-2 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-floor">{{ __('Piso') }}</label>
                                <input name="floor" id="input-floor"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'floor'])
                            </div>

                            {{-- Departamento --}}
                            <div class="col-md-2 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-dpto">{{ __('Departamento') }}</label>
                                <input name="dpto" id="input-dpto"
                                    class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}">
                                @include('alerts.feedback', ['field' => 'dpto'])
                            </div>

                        </div>

                        <div class="row">

                            {{-- Observaciones --}}
                            <div class="col-sm-12 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                <label class="form-control-label"
                                    for="observations">{{ __('Datos adicionales') }}</label>
                                <textarea name="observations" id="observations" rows="1"
                                    class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"></textarea>
                                @include('alerts.feedback', ['field' => 'observations'])
                            </div>
                        </div>

                    </div>

                    <button id="boton_submit_crear" type="submit" class="btn btn-primary sr-only"></button>
                </form>
            </div>

            {{-- Pie del modal --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()"> Guardar
                </button>
            </div>
        </div>
    </div>
</div>
