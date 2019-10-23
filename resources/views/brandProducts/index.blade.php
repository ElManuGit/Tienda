@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Marcas',
'activePage' => 'Marcas',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-round text-white pull-right"
                        href="{{ route('brandProducts.create') }}">{{ __('Agregar nueva Marca') }}</a>
                    <h4 class="card-title">{{ __('Marcas') }}</h4>
                    <div class="col-12 mt-2">
                        @include('alerts.success')
                        @include('alerts.errors')
                    </div>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width:15px">{{ __('Imágen') }}</th>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Fecha de alta') }}</th>
                                <th class="disabled-sorting text-right">{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                            @foreach($brandProducts as $brandProduct)
                            <tr>
                                <td>
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img src="{{asset('assets')}}/img/brandProducts/{{$brandProduct->picture}}" alt=""
                                            style="max-width: 80px; border-radiu: 100px">
                                    </span>
                                </td>
                                <td>{{$brandProduct->id}}</td>
                                <td>{{$brandProduct->name}}</td>
                                <td>{{ $brandProduct->created_at->diffForHumans()}}</td>
                                <td class="text-right">

                                    <a type="button" href="{{route("brandProducts.edit",$brandProduct)}}" rel="tooltip"
                                        class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </a>
                                    <form action="{{ route('brandProducts.destroy', $brandProduct) }}" method="post"
                                        style="display:inline-block;" class="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-icon btn-sm delete-button" data-original-title=""
                                            title=""
                                            onclick="confirm('{{ __('¿Está seguro de querer eliminar esta Marca?') }}') ? this.parentElement.submit() : ''">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
@endsection
