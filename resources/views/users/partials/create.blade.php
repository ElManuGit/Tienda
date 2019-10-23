<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{-- Nombre --}}

                    <div class="pl-lg-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                            <input type="text" name="name" id="input-name"
                                class="col-sm-11 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Nombre') }}" required autofocus>

                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        {{-- Apellido --}}
                        <div class="form-group{{ $errors->has('lastName') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-lastName">{{ __('Apellido') }}</label>
                            <input type="text" lastName="lastName" id="input-lastName"
                                class="col-sm-11 form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Apellido') }}" required>

                            @include('alerts.feedback', ['field' => 'lastName'])
                        </div>

                        {{-- Correo electrónico --}}
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                            <input type="email" name="email" id="input-email"
                                class="col-sm-11 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        {{-- Contraseña --}}
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label class="form-control-label" for="input-password">{{ __('Contraseña') }}</label>
                            <input type="password" name="password" id="input-password"
                                class="col-sm-11 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('Contraseña') }}" value="" required>

                            @include('alerts.feedback', ['field' => 'password'])
                        </div>

                        {{-- Confirmar contraseña --}}
                        <div class="form-group">
                            <label class="form-control-label"
                                for="input-password-confirmation">{{ __('Confirmar contraseña') }}</label>
                            <input type="password" name="password_confirmation" id="input-password-confirmation"
                                class="col-sm-11 form-control" placeholder="{{ __('Confirmar contraseña') }}" value=""
                                required>
                        </div>

                        <div class="text-center">
                            <button id="boton_submit_crear" type="submit" class="btn btn-primary sr-only"></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Guardar</button>
            </div>
        </div>
    </div>
</div>
