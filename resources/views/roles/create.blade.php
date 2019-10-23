@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Roles',
'activePage' => 'Roles',
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
                            <h3 class="mb-0">{{ __('Agregar Rol') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('roles.index') }}"
                                class="btn btn-primary btn-round">{{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('roles.store') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        {{-- Nombre del rol --}}
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                <input type="text" name="name" id="input-name"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autofocus>

                                @include('alerts.feedback', ['field' => 'name'])
                            </div>


                            {{-- Url amigable --}}
                            <div class="form-group{{ $errors->has('slug') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-slug">{{ __('URL Amigable') }}</label>
                                <input type="textarea" name="slug" id="input-slug"
                                    class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('URL Amigable') }}" value="{{ old('slug') }}" required autofocus>

                                @include('alerts.feedback', ['field' => 'slug'])
                            </div>

                            {{-- Descripción --}}
                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                <label class="form-control-label"
                                    for="input-description">{{ __('Descripción') }}</label>
                                <input type="textarea" name="description" id="input-description"
                                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Descripción') }}" value="{{ old('description') }}" required
                                    autofocus>

                                @include('alerts.feedback', ['field' => 'description'])
                            </div>

                            <h3>Permiso especial</h3>
                            <div class="form-group">
                                <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
                                <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
                            </div>

                            <h3>Lista de permisos</h3>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    @foreach ($permissions as $permission)
                                    <li>
                                        <label>
                                            {{ Form::checkbox( 'permissions[]', $permission->id, null) }}
                                            {{ $permission->name }}
                                            <em>({{ $permission->description ?: 'Sin descripción' }})</em>
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





{{-- {!! Form::open(['route' => 'roles.store']) !!}



                    <div class="form-group">
                        {{ Form::label('name', 'Nombre') }}
{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL Amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripción') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>

<h3>Permiso especial</h3>
<div class="form-group">
    <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
    <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
</div>

<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
        <li>
            <label>
                {{ Form::checkbox( 'permissions[]', $permission->id, null) }}
                {{ $permission->name }}
                <em>({{ $permission->description ?: 'Sin descripción' }})</em>
            </label>
        </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
</div>




{!! Form::close() !!} --}}
{{-- </div>
        </div>
    </div>
</div>
</div>
@endsection --}}
