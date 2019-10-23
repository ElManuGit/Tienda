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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-round text-white pull-right"
                        href="{{ route('products.create') }}">{{ __('Agregar nuevo producto') }}</a>
                    <h4 class="card-title">{{ __('Productos') }}</h4>
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
                                <th style="width:50px">{{ __('Imágen') }}</th>
                                <th>{{ __('ID') }}</th>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Categoría') }}</th>
                                <th>{{ __('Marca') }}</th>
                                <th>{{ __('Stock disponible') }}</th>
                                <th>{{ __('Fecha de alta') }}</th>
                                <th class="disabled-sorting text-right">{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <span class="avatar avatar-sm rounded-circle">
                                        @foreach ($product->Pictures as $item)
                                        <img src="http://localhost:8000/img/products/{{$item->name}}" alt=""
                                            style="max-width: 80px; border-radiu: 100px">
                                        @endforeach

                                    </span>
                                </td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                @foreach ($product->categories as $category)
                                <td>{{$category->name}}</td>
                                @endforeach
                                <td>{{$product->brandProduct->name}}</td>
                                <td>{{'15'}}</td>
                                <td>{{$product->created_at->diffForHumans()}}</td>
                                <td class="text-right">

                                    <a type="button" href="{{route("products.edit",$product)}}" rel="tooltip"
                                        class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </a>
                                    <form action="{{ route('products.destroy', $product) }}" method="post"
                                        style="display:inline-block;" class="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-icon btn-sm delete-button" data-original-title=""
                                            title=""
                                            onclick="confirm('{{ __('¿Está seguro de querer eliminar este producto?') }}') ? this.parentElement.submit() : ''">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </form>
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
