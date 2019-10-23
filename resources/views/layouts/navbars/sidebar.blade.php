<div class="sidebar" data-color="orange">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            {{ __('MK Soft') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="" id="pageHome">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Panel de administración') }}</p>
                </a>
            </li>

            {{-- Usuarios y Roles --}}
            <li>
                <a data-toggle="collapse" href="#laravelExamples">
                    <i class="now-ui-icons business_badge"></i>
                    <p>
                        {{ __("Usuarios y Permisos") }}
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse hiden" id="laravelExamples">
                    <ul class="nav">
                        <li class="" id="pageRoleUser">
                            <a href="{{ route('roles.index') }}">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p> {{ __("Gestión de roles") }} </p>
                            </a>
                        </li>

                        <li class="" id="pageRoleUser">
                            <a href="{{ route('user.index') }}">
                                <i class="now-ui-icons users_single-02"></i>
                                <p> {{ __("Gestión de usuarios") }} </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Productos --}}
            <li class="" id="pageProduct">
                <a href="{{ route('products.index') }}">
                    <i class="now-ui-icons education_atom"></i>
                    <p>{{ __('Productos') }}</p>
                </a>
            </li>


            {{-- Providers --}}
            <li class="" id="pageProvider">
                <a href="{{ route('providers.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Proveedores") }} </p>
                </a>
            </li>

            {{-- Categorías --}}
            <li class="" id="pageCategory">
                <a href="{{ route('categories.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Categorías") }} </p>
                </a>
            </li>

            {{-- Marcas --}}
            <li class="">
                <a href="{{ route('brandProducts.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Marcas") }} </p>
                </a>
            </li>

            {{-- Paises --}}
            <li class="">
                <a href="{{ route('countries.index') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p> {{ __("Países") }} </p>
                </a>
            </li>

            {{-- Provincias --}}
            <li class="">
                <a href="{{ route('provinces.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Provincias") }} </p>
                </a>
            </li>

            {{-- Localidades --}}
            <li class="">
                <a href="{{ route('cities.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Localidades") }} </p>
                </a>
            </li>


            {{-- Ejemplos --}}
            <li class="">
                <a href="{{ route('page.index','icons') }}">
                    <i class="now-ui-icons education_atom"></i>
                    <p>{{ __('Pedidos') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{ route('page.index','maps') }}">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>{{ __('Mapas') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{ route('page.index','notifications') }}">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>{{ __('Notificaciones') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{ route('page.index','table') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Tablas') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{ route('page.index','typography') }}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>{{ __('Fuentes') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
