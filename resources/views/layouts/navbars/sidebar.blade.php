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
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('home') }}">
                    <i class="now-ui-icons design_app"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>





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
                        <li class="@if ($activePage == 'Roles') active @endif">
                            <a href="{{ route('roles.index') }}">
                                <i class="now-ui-icons design_bullet-list-67"></i>
                                <p> {{ __("Gestión de roles") }} </p>
                            </a>
                        </li>

                        <li class="@if ($activePage == 'Usuarios') active @endif">
                            <a href="{{ route('user.index') }}">
                                <i class="now-ui-icons users_single-02"></i>
                                <p> {{ __("Gestión de usuarios") }} </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="@if ($activePage == 'Productos') active @endif">
                <a href="{{ route('products.index') }}">
                    <i class="now-ui-icons education_atom"></i>
                    <p>{{ __('Productos') }}</p>
                </a>
            </li>


            <li class="@if ($activePage == 'Categorias') active @endif">
                <a href="{{ route('categories.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Categorías") }} </p>
                </a>
            </li>

            <li class="@if ($activePage == 'Marcas') active @endif">
                <a href="{{ route('brandProducts.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Marcas") }} </p>
                </a>
            </li>


            <li class="@if ($activePage == 'Paises') active @endif">
                <a href="{{ route('countries.index') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p> {{ __("Países") }} </p>
                </a>
            </li>

            <li class="@if ($activePage == 'Provincias') active @endif">
                <a href="{{ route('provinces.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Provincias") }} </p>
                </a>
            </li>

            <li class="@if ($activePage == 'Localidades') active @endif">
                <a href="{{ route('cities.index') }}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> {{ __("Localidades") }} </p>
                </a>
            </li>



            <li class="@if ($activePage == 'icons') active @endif">
                <a href="{{ route('page.index','icons') }}">
                    <i class="now-ui-icons education_atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'maps') active @endif">
                <a href="{{ route('page.index','maps') }}">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class=" @if ($activePage == 'notifications') active @endif">
                <a href="{{ route('page.index','notifications') }}">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class=" @if ($activePage == 'table') active @endif">
                <a href="{{ route('page.index','table') }}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'typography') active @endif">
                <a href="{{ route('page.index','typography') }}">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'upgrade') active @endif active-pro">
                <a href="{{ route('page.index','upgrade') }}">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
