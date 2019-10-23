@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Productos',
'activePage' => 'Productos',
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
                            <h3 class="mb-0">{{ __('Nuevo Producto') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('products.index') }}" class="btn btn-primary">{{ __('Volver') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('products.store') }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf

                        {{-- Título del formulario --}}
                        <h6 class="heading-small text-muted mb-4">{{ __('Información del producto') }}</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                {{-- Nombre --}}
                                <div class="col-sm-3 form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                {{-- Código de barras --}}
                                <div class="col-sm-3 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-barCode">{{ __('Código de barras') }}</label>
                                    <input type="number" name="barCode" id="input-barCode"
                                        class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Código de barras') }}" value="" required>
                                    @include('alerts.feedback', ['field' => 'barCode'])
                                </div>

                                {{-- Tamaño --}}
                                <div class="col-sm-3 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-size">{{ __('Tamaño') }}</label>
                                    <input type="text" name="size" id="input-size"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Tamaño') }}" value="" required>

                                    @include('alerts.feedback', ['field' => 'size'])
                                </div>


                                {{-- Peso --}}
                                <div class="col-sm-3 form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-weight">{{ __('Peso') }}</label>
                                    <input type="text" name="weight" id="input-weight"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Peso') }}" value="" required>

                                    @include('alerts.feedback', ['field' => 'weight'])
                                </div>

                            </div>
                            <hr style="border:5px;">
                            <hr style="border-color:orange;">

                            <div class="row">

                                {{-- Proveedor --}}
                                <div class="col-sm-3 form-group">
                                    <label for="topProvider">{{__(" Proveedor asosiado")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="provider_id" name="provider_id">
                                            @foreach ($providers as $provider)
                                            <option value="{{$provider->id}}" selected>{{$provider->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @include('alerts.feedback', ['field' => 'provider_id'])
                                </div>

                                {{-- Marca --}}
                                <div class="col-sm-3 form-group">
                                    <label for="InputBrandPrduct">{{__(" Marca")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="brand_porduct_id" name="brand_product_id">
                                            @foreach ($brandProducts as $brandProduct)
                                            <option value="{{$brandProduct->id}}" selected>{{$brandProduct->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @include('alerts.feedback', ['field' => 'brand_product_id'])

                                </div>

                                {{-- Categoria --}}
                                <div class="col-sm-3 form-group">
                                    <label for="category">{{__(" Categoría")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="category_id" name="category_id">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    @include('alerts.feedback', ['field' => 'category_id'])
                                </div>

                                {{-- País --}}
                                <div class="col-sm-3 form-group">
                                    <label for="country">{{__(" País de procedencia")}}</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="country_id" name="country_id">
                                            @foreach ($countries as $country)
                                            <option value="{{$country->id}}" selected>{{$country->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    @include('alerts.feedback', ['field' => 'country_id'])
                                </div>

                            </div>
                            <hr style="border:5px;">
                            <hr style="border-color:orange;">
                            <div class="row">

                                {{-- Descripción --}}
                                <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-text">{{ __('Descripción') }}</label>
                                    <textarea name="description" id="input-description" rows="5"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Descripción') }}" required>
                                    </textarea>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>

                                {{-- Ingredientes --}}
                                <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-ingredients">{{ __('Ingredientes') }}</label>
                                    <textarea name="ingredients" id="input-ingredients" rows="5"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}"
                                        placeholder="{{ __('Ingredientes') }}" required>
                                    </textarea>

                                    @include('alerts.feedback', ['field' => 'ingredients'])
                                </div>

                                {{-- Información nutricional --}}
                                <div class="col-sm-4 form-group{{ $errors->has('text') ? ' has-danger' : '' }}">
                                    <label class="form-control-label"
                                        for="input-nutritionalInformation">{{ __('Información nutricional') }}</label>
                                    <textarea name="nutritionalInformation" id="input-nutritionalInformation" rows="5"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" required>
                                    </textarea>

                                    @include('alerts.feedback', ['field' => 'nutritionalInformation'])
                                </div>

                            </div>

                            <hr style="border-color:orange;">

                            <div class="input-group">
                                <div class="custom-file col-md-4">
                                    <input name="picture" id="picture" type="file" multiple=true
                                        class="custom-file-input" aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label" for="picture">Elegir imágen</label>
                                </div>

                            </div>



                            {{-- Boton guardar --}}
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

<script>
    $("#productsPictures").fileinput({
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any"
        });
</script>
